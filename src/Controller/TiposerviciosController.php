<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tiposervicios Controller
 *
 * @property \App\Model\Table\TiposerviciosTable $Tiposervicios
 *
 * @method \App\Model\Entity\Tiposervicio[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TiposerviciosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $tiposervicios = $this->paginate($this->Tiposervicios);

        $this->set(compact('tiposervicios'));
    }

    /**
     * View method
     *
     * @param string|null $id Tiposervicio id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tiposervicio = $this->Tiposervicios->get($id, [
            'contain' => ['Servicios']
        ]);

        $this->set('tiposervicio', $tiposervicio);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tiposervicio = $this->Tiposervicios->newEntity();
        if ($this->request->is('post')) {
            $tiposervicio = $this->Tiposervicios->patchEntity($tiposervicio, $this->request->getData());
            if ($this->Tiposervicios->save($tiposervicio)) {
                $this->Flash->success(__('The tiposervicio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tiposervicio could not be saved. Please, try again.'));
        }
        $this->set(compact('tiposervicio'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tiposervicio id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tiposervicio = $this->Tiposervicios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tiposervicio = $this->Tiposervicios->patchEntity($tiposervicio, $this->request->getData());
            if ($this->Tiposervicios->save($tiposervicio)) {
                $this->Flash->success(__('The tiposervicio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tiposervicio could not be saved. Please, try again.'));
        }
        $this->set(compact('tiposervicio'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tiposervicio id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tiposervicio = $this->Tiposervicios->get($id);
        if ($this->Tiposervicios->delete($tiposervicio)) {
            $this->Flash->success(__('The tiposervicio has been deleted.'));
        } else {
            $this->Flash->error(__('The tiposervicio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
