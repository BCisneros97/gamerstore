<?php
App::uses('AppController', 'Controller');
/**
 * Categorias Controller
 *
 * @property Categoria $Categoria
 * @property PaginatorComponent $Paginator
 */
class CategoriasController extends AppController
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
	public function index($id = 1)
	{
		$this->Categoria->recursive = 1;
		$this->set('categorias', $this->Categoria->find('all'));
		$this->Categoria->recursive = 0;
		$this->set('categoria', $this->Categoria->find(
			'first',
			array('conditions' => array('Categoria.id' => $id))
		));
		$this->loadModel('Disenio');
		$this->set('disenios', $this->Disenio->find('all', array(
			'contain' => array(
				'Producto',
				'Cliente' => array('User')
			),
			'conditions' => array('Producto.categoria_id' => $id)
		)));
		$this->layout = 'default';
	}

	/**
	 * index method
	 *
	 * @return void
	 */
	public function adminIndex()
	{
		$this->Categoria->recursive = 0;
		$this->set('categorias', $this->Paginator->paginate());
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
		if (!$this->Categoria->exists($id)) {
			throw new NotFoundException(__('No existe la categoría.'));
		}
		$options = array('conditions' => array('Categoria.' . $this->Categoria->primaryKey => $id));
		$this->set('categoria', $this->Categoria->find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add()
	{
		if ($this->request->is('post')) {
			$this->Categoria->create();
			if ($this->Categoria->save($this->request->data)) {
				$this->Session->setFlash(__('La categoría ha sido guardada.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La categoría no se pudo guardar. Intente otra vez.'));
			}
		}
		$descuentos = $this->Categoria->Descuento->find('list');
		$this->set(compact('descuentos'));
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
		if (!$this->Categoria->exists($id)) {
			throw new NotFoundException(__('No existe categoria'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Categoria->save($this->request->data)) {
				$this->Session->setFlash(__('La categoría ha sido guardada.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La categoría no se pudo guardar. Intente otra vez.'));
			}
		} else {
			$options = array('conditions' => array('Categoria.' . $this->Categoria->primaryKey => $id));
			$this->request->data = $this->Categoria->find('first', $options);
		}
		$descuentos = $this->Categoria->Descuento->find('list');
		$this->set(compact('descuentos'));
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
		$this->Categoria->id = $id;
		if (!$this->Categoria->exists()) {
			throw new NotFoundException(__('La categoría no existe'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Categoria->delete()) {
			$this->Session->setFlash(__('Se ha eliminado la categoría.'));
		} else {
			$this->Session->setFlash(__('No se pudo eliminar la categoría. Intente otra vez.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
