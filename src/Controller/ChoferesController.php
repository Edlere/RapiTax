<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Choferes Controller
 *
 * @property \App\Model\Table\ChoferesTable $Choferes
 *
 * @method \App\Model\Entity\Chofere[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ChoferesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $choferes = $this->paginate($this->Choferes);

        $this->set(compact('choferes'));
    }

    /**
     * View method
     *
     * @param string|null $id Chofere id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $chofere = $this->Choferes->get($id, [
            'contain' => ['Servicios']
        ]);

        $this->set('chofere', $chofere);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $chofere = $this->Choferes->newEntity();
        if ($this->request->is('post')) {
            $chofere = $this->Choferes->patchEntity($chofere, $this->request->getData());
            if ($this->Choferes->save($chofere)) {
                $this->Flash->success(__('The chofere has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The chofere could not be saved. Please, try again.'));
        }
        $this->set(compact('chofere'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Chofere id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $chofere = $this->Choferes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $chofere = $this->Choferes->patchEntity($chofere, $this->request->getData());
            if ($this->Choferes->save($chofere)) {
                $this->Flash->success(__('The chofere has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The chofere could not be saved. Please, try again.'));
        }
        $this->set(compact('chofere'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Chofere id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $chofere = $this->Choferes->get($id);
        if ($this->Choferes->delete($chofere)) {
            $this->Flash->success(__('The chofere has been deleted.'));
        } else {
            $this->Flash->error(__('The chofere could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
