<?php
App::uses('AppController', 'Controller');
/**
 * CategoriasDescuentos Controller
 *
 * @property CategoriasDescuento $CategoriasDescuento
 * @property PaginatorComponent $Paginator
 */
class CategoriasDescuentosController extends AppController
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
		$this->CategoriasDescuento->recursive = 0;
		$this->set('categoriasDescuentos', $this->Paginator->paginate());
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
		$this->loadModel('Descuento');
		if (!$this->Descuento->exists($id)) {
			throw new NotFoundException(__('No existe el descuento'));
		}
		$options = array('conditions' => array('Descuento.' . $this->Descuento->primaryKey => $id));
		$this->set('descuento', $this->Descuento->find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add()
	{
		if ($this->request->is('post')) {
			$this->loadModel('Descuento');
			$this->Descuento->create();
			if ($this->Descuento->save($this->request->data, array('deep' => 'true'))) {
				$this->Session->setFlash(__('El descuento se guardó correctamente.'));
				return $this->redirect(array('controller' => 'descuentos', 'action' => 'index'));
			} else {
				$this->Session->setFlash(__('El descuento no se pudo guardar. Intente otra vez.'));
			}
		}
		$categorias = $this->CategoriasDescuento->Categoria->find('all');
		$this->set(compact('categorias'));
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
		$this->loadModel('Descuento');
		$this->loadModel('Categoria');
		if (!$this->Descuento->exists($id)) {
			throw new NotFoundException(__('No existe el descuento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Descuento->save($this->request->data, array('deep' => 'true'))) {
				$this->Session->setFlash(__('El descuento se guardó correctamente.'));
				return $this->redirect(array('controller' => 'descuentos', 'action' => 'index'));
			} else {
				$this->Session->setFlash(__('El descuento no se pudo guardar. Intente otra vez.'));
			}
		} else {
			$options = array('conditions' => array('Descuento.' . $this->Descuento->primaryKey => $id));
			$this->request->data = $this->Descuento->find('first', $options);
		}
		$categorias = $this->Categoria->find('all');
		$this->set(compact('categorias'));
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
		$this->loadModel('Descuento');
		$this->Descuento->id = $id;
		if (!$this->Descuento->exists()) {
			throw new NotFoundException(__('No existe el descuento'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Descuento->delete($id, false)) {
			$this->Session->setFlash(__('El descuento se eliminó correctamente.'));
		} else {
			$this->Session->setFlash(__('El descuento no se pudo eliminar. Intente otra vez.'));
		}
		return $this->redirect(array('controller' => 'descuentos', 'action' => 'index'));
	}
}
