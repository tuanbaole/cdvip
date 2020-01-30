<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Kieudonglais Controller
 *
 * @property \App\Model\Table\KieudonglaisTable $Kieudonglais
 *
 * @method \App\Model\Entity\Kieudonglai[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class KieudonglaisController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $kieudonglais = $this->paginate($this->Kieudonglais);

        $this->set(compact('kieudonglais'));
    }

    /**
     * View method
     *
     * @param string|null $id Kieudonglai id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $kieudonglai = $this->Kieudonglais->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set('kieudonglai', $kieudonglai);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $kieudonglai = $this->Kieudonglais->newEntity();
        if ($this->request->is('post')) {
            debug($this->request->getData());
            $kieudonglai = $this->Kieudonglais->patchEntity($kieudonglai, $this->request->getData());
            if ($this->Kieudonglais->save($kieudonglai)) {
                $this->Flash->success(__('The kieudonglai has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The kieudonglai could not be saved. Please, try again.'));
        }
        $users = $this->Kieudonglais->Users->find('list', ['limit' => 200]);
        $this->set(compact('kieudonglai', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Kieudonglai id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $kieudonglai = $this->Kieudonglais->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $kieudonglai = $this->Kieudonglais->patchEntity($kieudonglai, $this->request->getData());
            if ($this->Kieudonglais->save($kieudonglai)) {
                $this->Flash->success(__('The kieudonglai has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The kieudonglai could not be saved. Please, try again.'));
        }
        $users = $this->Kieudonglais->Users->find('list', ['limit' => 200]);
        $this->set(compact('kieudonglai', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Kieudonglai id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['get', 'delete']);
        $kieudonglai = $this->Kieudonglais->get($id);
        if ($this->Kieudonglais->delete($kieudonglai)) {
            $this->Flash->success(__('The kieudonglai has been deleted.'));
        } else {
            $this->Flash->error(__('The kieudonglai could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
