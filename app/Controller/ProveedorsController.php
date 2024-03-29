<?php
App::uses('AppController', 'Controller');
/**
 * Proveedors Controller
 *
 * @property Proveedor $Proveedor
 * @property PaginatorComponent $Paginator
 */
class ProveedorsController extends AppController
{

	/**
	 * Components
	 *
	 * @var array
	 */
	public $components = array('Paginator', 'Session');
	public $layout = 'admin';

	/**
	 * index method
	 *
	 * @return void
	 */
	public function index()
	{
		$this->Proveedor->recursive = 0;
		$this->set('proveedors', $this->Paginator->paginate());
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
		if (!$this->Proveedor->exists($id)) {
			throw new NotFoundException(__('No Existe el Proveedor'));
		}
		$options = array('conditions' => array('Proveedor.' . $this->Proveedor->primaryKey => $id));
		$this->set('proveedor', $this->Proveedor->find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add()
	{
		if ($this->request->is('post')) {
			$this->Proveedor->create();
			if ($this->Proveedor->save($this->request->data)) {
				$this->Session->setFlash(__('El Proveedor ha sido Guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El Proveedor no se pudo guardar. Intente otra vez.'));
			}
		}
		$ciudads = $this->Proveedor->Ciudad->find('list', array('fields' => array('id', 'nombre')));
		$this->set(compact('ciudads'));
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
		if (!$this->Proveedor->exists($id)) {
			throw new NotFoundException(__('No Existe el Proveedor'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Proveedor->save($this->request->data)) {
				$this->Session->setFlash(__('El Proveedor ha sido Guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El Proveedor no se pudo guardar. Intente otra vez.'));
			}
		} else {
			$options = array('conditions' => array('Proveedor.' . $this->Proveedor->primaryKey => $id));
			$this->request->data = $this->Proveedor->find('first', $options);
		}
		$ciudads = $this->Proveedor->Ciudad->find('list', array('fields' => array('id', 'nombre')));
		$this->set(compact('ciudads'));
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
		$this->Proveedor->id = $id;
		if (!$this->Proveedor->exists()) {
			throw new NotFoundException(__('No Existe el Proveedor'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Proveedor->delete()) {
			$this->Session->setFlash(__('El Proveedor ha sido Guardado.'));
		} else {
			$this->Session->setFlash(__('El Proveedor no se pudo guardar. Intente otra vez.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
