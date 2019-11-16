<?php
App::uses('AppController', 'Controller');
/**
 * Direccions Controller
 *
 * @property Direccion $Direccion
 * @property PaginatorComponent $Paginator
 */
class DireccionsController extends AppController
{

	/**
	 * Components
	 *
	 * @var array
	 */
	public $components = array('Paginator', 'Session');

	/**
	 * index method
	 *
	 * @return void
	 */
	public function index()
	{
		$this->Direccion->recursive = 0;
		$this->set('direccions', $this->Paginator->paginate());
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null)
	{
		if (!$this->Direccion->exists($id)) {
			throw new NotFoundException(__('Invalid direccion'));
		}
		$options = array('conditions' => array('Direccion.' . $this->Direccion->primaryKey => $id));
		$this->set('direccion', $this->Direccion->find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add()
	{
		if ($this->request->is('post')) {
			$this->Direccion->create();
			$cliente=$this->Direccion->Cliente->find('first',array(
			    'conditions' => array('Cliente.user_id' => AuthComponent::user('id'))
            ));
			$this->request->data['Direccion']['cliente_id']=$cliente['Cliente']['id'];
			if ($this->Direccion->save($this->request->data)) {
				$this->Session->setFlash(__('The direccion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The direccion could not be saved. Please, try again.'));
			}
		}
		$ciudads = $this->Direccion->Ciudad->find('list', array('fields' => array('id', 'nombre')));
		$clientes = $this->Direccion->Cliente->find('list');
		$this->set(compact('ciudads', 'clientes'));
	}

	/**
	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function edit($id = null)
	{
		if (!$this->Direccion->exists($id)) {
			throw new NotFoundException(__('Invalid direccion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$cliente=$this->Direccion->Cliente->find('first',array(
			    'conditions' => array('Cliente.user_id' => AuthComponent::user('id'))
            ));
			$this->request->data['Direccion']['cliente_id']=$cliente['Cliente']['id'];
			if ($this->Direccion->save($this->request->data)) {
				$this->Session->setFlash(__('The direccion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The direccion could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Direccion.' . $this->Direccion->primaryKey => $id));
			$this->request->data = $this->Direccion->find('first', $options);
		}
		$ciudads = $this->Direccion->Ciudad->find('list', array('fields' => array('id', 'nombre')));
		$clientes = $this->Direccion->Cliente->find('list');
		$this->set(compact('ciudads', 'clientes'));
	}

	/**
	 * delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function delete($id = null)
	{
		$this->Direccion->id = $id;
		if (!$this->Direccion->exists()) {
			throw new NotFoundException(__('Invalid direccion'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Direccion->delete()) {
			$this->Session->setFlash(__('The direccion has been deleted.'));
		} else {
			$this->Session->setFlash(__('The direccion could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
