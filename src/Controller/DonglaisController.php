<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
/**
 * Donglais Controller
 *
 * @property \App\Model\Table\DonglaisTable $Donglais
 *
 * @method \App\Model\Entity\Donglai[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DonglaisController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Quanlys', 'Users'],
        ];
        $donglais = $this->paginate($this->Donglais);

        $this->set(compact('donglais'));
    }

    /**
     * View method
     *
     * @param string|null $id Donglai id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $donglai = $this->Donglais->get($id, [
            'contain' => ['Quanlys', 'Users'],
        ]);

        $this->set('donglai', $donglai);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
     public function add()
    {
        $donglai = $this->Donglais->newEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $current_user = $this->get_current_user();
            $data['user_id'] = $current_user['id'];

            $this->loadModel('Quanlys');
            $quanly = $this->Quanlys->find('all')
                ->select(['id','ho_ten'])
                ->where([
                    'id' => $data['quanly_id'],
                    'user_id' => $current_user['id']
                ])
                ->first();
                
            if (!isset($quanly) || empty($quanly)) {
                $this->Flash->error(__('Chưa lưa đóng lãi của khách hàng'));
                $this->redirect([
                    'controller' => 'quanlys',
                    'action' => 'index'
                ]);
            }    
            $data['ngay_tra'] = $this->replace_ngay($data['ngay_tra']);
            $donglai = $this->Donglais->patchEntity($donglai, $data);
            if ($this->Donglais->save($donglai)) {
                $this->Flash->success(__('Đã đóng lãi thành công'));

                return $this->redirect(['controller' => 'quanlys','action' => 'index']);
            }
            $this->Flash->error(__('Chưa lưa đóng lãi của khách hàng'));
        }

        $this->set(compact('donglai','quanly'));

    }

    /**
     * Edit method
     *
     * @param string|null $id Donglai id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $donglai = $this->Donglais->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $donglai = $this->Donglais->patchEntity($donglai, $this->request->getData());
            if ($this->Donglais->save($donglai)) {
                $this->Flash->success(__('The donglai has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The donglai could not be saved. Please, try again.'));
        }
        $quanlys = $this->Donglais->Quanlys->find('list', ['limit' => 200]);
        $users = $this->Donglais->Users->find('list', ['limit' => 200]);
        $this->set(compact('donglai', 'quanlys', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Donglai id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $donglai = $this->Donglais->get($id);
        if ($this->Donglais->delete($donglai)) {
            $this->Flash->success(__('The donglai has been deleted.'));
        } else {
            $this->Flash->error(__('The donglai could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function getdata() {
        $this->request->allowMethod(['ajax']);
        $current_user = $this->get_current_user();
        $quanly_id = $this->request->query('quanly_id');
        $page = $this->request->query('page');
        $donglais = $this->Donglais->find('all')
            ->where([
                'user_id' => $current_user['id'],
                'quanly_id' => $quanly_id
            ])
            ->limit(10)
            ->page($page)
            ->order('ngay_tra ASC')
            ->toArray();
        $this->set(compact('donglais'));
    }

    public function xemthemdata() {
        $this->request->allowMethod(['ajax']);
        $current_user = $this->get_current_user();
        $quanly_id = $this->request->query('quanly_id');
        $page = $this->request->query('page');
        $limit = 10;

        $donglais = $this->Donglais->find('all')
            ->where([
                'user_id' => $current_user['id'],
                'quanly_id' => $quanly_id
            ])
            ->limit($limit)
            ->page($page)
            ->order('ngay_tra ASC')
            ->toArray();
        $this->set(compact('donglais','limit','page'));
    }

    public function updatetrangthai() {
        $this->request->allowMethod(['ajax']);
        $this->autoRender = false;
        $data = $this->request->query();
        $donglaiTable = TableRegistry::getTableLocator()->get('Donglais');
        $Donglai = $donglaiTable->get($data['donglai_id']);
        $Donglai->trang_thai_tra_lai = $data['trang_thai_tra_lai'];
        if ($donglaiTable->save($Donglai)) {
            if ($data['trang_thai_tra_lai'] == 1) {
                echo __("đóng lãi thành công");
            } else {
                echo __("bạn đã bỏ đóng lãi của khách hàng");
            }
        } else {
            echo __("thay đổi không thành công");
        }
    }




}
