<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Taisans Controller
 *
 * @property \App\Model\Table\TaisansTable $Taisans
 *
 * @method \App\Model\Entity\Taisan[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TaisansController extends AppController
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
        $taisans = $this->paginate($this->Taisans);

        $this->set(compact('taisans'));
    }

    /**
     * View method
     *
     * @param string|null $id Taisan id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $taisan = $this->Taisans->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set('taisan', $taisan);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $taisan = $this->Taisans->newEntity();
        if ($this->request->is('post')) {
            $taisan = $this->Taisans->patchEntity($taisan, $this->request->getData());
            if ($this->Taisans->save($taisan)) {
                $this->Flash->success(__('The taisan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The taisan could not be saved. Please, try again.'));
        }
        $users = $this->Taisans->Users->find('list', ['limit' => 200]);
        $this->set(compact('taisan', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Taisan id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $taisan = $this->Taisans->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $taisan = $this->Taisans->patchEntity($taisan, $this->request->getData());
            if ($this->Taisans->save($taisan)) {
                $this->Flash->success(__('The taisan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The taisan could not be saved. Please, try again.'));
        }
        $users = $this->Taisans->Users->find('list', ['limit' => 200]);
        $this->set(compact('taisan', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Taisan id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['get', 'delete']);
        $taisan = $this->Taisans->get($id);
        if ($this->Taisans->delete($taisan)) {
            $this->Flash->success(__('The taisan has been deleted.'));
        } else {
            $this->Flash->error(__('The taisan could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
