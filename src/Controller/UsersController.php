<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['logout']);
    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->premission();
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $users = $this->paginate($this->Users);
        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Groups'],
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        $this->loadModel('Groups');
        $groups = $this->Groups->find('list', [
            'keyField' => 'id',
            'valueField' => 'name_group'
        ]);
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            if ($data['password'] == $data['confirm_password']) {
                unset($data['confirm_password']);
                $user = $this->Users->patchEntity($user, $data);
                if ($this->Users->save($user)) {
                    $this->Flash->success(__('Tạo Tài Khoản Thành Công.'),'alert alert-success');
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('Không tạo được tài khoản. Hãy Thử lại.')); 
            } else {
                $this->Flash->success(__('mật khẩu không trùng khớp.','alert alert-success')); 
            }
        }
        $this->set(compact('user','groups'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        $this->loadModel('Groups');
        $groups = $this->Groups->find('list', [
            'keyField' => 'id',
            'valueField' => 'name_group'
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->getData();
            if (!empty($data['password_new'])) {
                if ($data['password_new'] == $data['confirm_password']) {
                    $data ['password'] = $data['password_new'];
                    $user = $this->Users->patchEntity($user, $data);
                    if ($this->Users->save($user)) {
                        $this->Flash->success(__('Thay đổi thông tin tài khoản thành công.'));
                        return $this->redirect(['action' => 'index']);
                    }
                } else {
                    $this->Flash->error(__('Mật Khẩu Không Trùng Khớp'));
                }
            } else {
                $user = $this->Users->patchEntity($user, $data);
                if ($this->Users->save($user)) {
                    $this->Flash->success(__('Thay đổi thông tin tài khoản thành công.','alert alert-success'));
                    return $this->redirect(['action' => 'index']);
                } else {
                   $this->Flash->error(__('Không thay đổi được thông tin tài khoản. Hãy Thử lại.','alert alert-success')); 
                }
            }
        }
        $this->set(compact('user','groups'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['get', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function login() 
    {
        $this->viewBuilder()->setLayout('login');
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error('Nhập sai tên đăng nhập hoặc mật khẩu.');
        }
    }

    public function logout() {
        $this->Flash->success('Đăng Xuất Thành Công.','alert alert-success');
        return $this->redirect($this->Auth->logout());
    }

}
