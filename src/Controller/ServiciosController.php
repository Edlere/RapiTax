<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Servicios Controller
 *
 * @property \App\Model\Table\ServiciosTable $Servicios
 *
 * @method \App\Model\Entity\Servicio[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ServiciosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Clientes', 'Choferes', 'Vehiculos', 'Tiposervicios']
        ];
        $servicios = $this->paginate($this->Servicios);

        $this->set(compact('servicios'));
    }

    /**
     * View method
     *
     * @param string|null $id Servicio id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $servicio = $this->Servicios->get($id, [
            'contain' => ['Clientes', 'Choferes', 'Vehiculos', 'Tiposervicios']
        ]);

        $this->set('servicio', $servicio);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $servicio = $this->Servicios->newEntity();
        if ($this->request->is('post')) {
            $servicio = $this->Servicios->patchEntity($servicio, $this->request->getData());
            if ($this->Servicios->save($servicio)) {
                $this->Flash->success(__('The servicio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The servicio could not be saved. Please, try again.'));
        }
        $clientes = $this->Servicios->Clientes->find('list', ['limit' => 200]);
        $choferes = $this->Servicios->Choferes->find('list', ['limit' => 200]);
        $vehiculos = $this->Servicios->Vehiculos->find('list', ['limit' => 200]);
        $tiposervicios = $this->Servicios->Tiposervicios->find('list', ['limit' => 200]);
        $this->set(compact('servicio', 'clientes', 'choferes', 'vehiculos', 'tiposervicios'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Servicio id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $servicio = $this->Servicios->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $servicio = $this->Servicios->patchEntity($servicio, $this->request->getData());
            if ($this->Servicios->save($servicio)) {
                $this->Flash->success(__('The servicio has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The servicio could not be saved. Please, try again.'));
        }
        $clientes = $this->Servicios->Clientes->find('list', ['limit' => 200]);
        $choferes = $this->Servicios->Choferes->find('list', ['limit' => 200]);
        $vehiculos = $this->Servicios->Vehiculos->find('list', ['limit' => 200]);
        $tiposervicios = $this->Servicios->Tiposervicios->find('list', ['limit' => 200]);
        $this->set(compact('servicio', 'clientes', 'choferes', 'vehiculos', 'tiposervicios'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Servicio id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $servicio = $this->Servicios->get($id);
        if ($this->Servicios->delete($servicio)) {
            $this->Flash->success(__('The servicio has been deleted.'));
        } else {
            $this->Flash->error(__('The servicio could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
