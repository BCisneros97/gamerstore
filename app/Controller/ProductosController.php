<?php
App::uses('AppController', 'Controller');
/**
 * Productos Controller
 *
 * @property Producto $Producto
 * @property PaginatorComponent $Paginator
 */
class ProductosController extends AppController
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
		$this->Producto->recursive = 0;
		$this->set('productos', $this->Paginator->paginate());
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
		if (!$this->Producto->exists($id)) {
			throw new NotFoundException(__('No Existe el Producto'));
		}
		$options = array('conditions' => array('Producto.' . $this->Producto->primaryKey => $id));
		$this->set('producto', $this->Producto->find('first', $options));
	}

	public function show($id = null)
	{
		if (!$this->Producto->exists($id)) {
			throw new NotFoundException(__('El producto no existe'));
		}
		$options = array('conditions' => array('Producto.' . $this->Producto->primaryKey => $id));
		$this->set('producto', $this->Producto->find('first', $options));
		$this->layout = 'default';
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add()
	{
		if ($this->request->is('post')) {
			$this->Producto->create();

			$this->request->data['Producto']['imagen'] = file_get_contents($_FILES['imagen']['tmp_name']);

			if ($this->Producto->save($this->request->data)) {
				$this->Session->setFlash(__('El producto ha sido Guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El Producto no se pudo guardar. Intente otra vez.'));
			}
		}
		$categorias = $this->Producto->Categoria->find('list', array(
			'fields' => array('id', 'nombre')
		));
		$proveedors = $this->Producto->Proveedor->find('list', array(
			'fields' => array('id', 'razonsocial')
		));
		$this->set(compact('categorias', 'proveedors'));
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
		if (!$this->Producto->exists($id)) {
			throw new NotFoundException(__('Invalid producto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if (isset($_FILES['imagen'])) {
				$this->request->data['Producto']['imagen'] = file_get_contents($_FILES['imagen']['tmp_name']);
			}
			if ($this->Producto->save($this->request->data)) {
				$this->Session->setFlash(__('El Producto ha sido Guardado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El Producto no se pudo guardar. Intente otra vez.'));
			}
		} else {
			$options = array('conditions' => array('Producto.' . $this->Producto->primaryKey => $id));
			$this->request->data = $this->Producto->find('first', $options);
		}
		$categorias = $this->Producto->Categoria->find('list', array(
			'fields' => array('id', 'nombre')
		));
		$proveedors = $this->Producto->Proveedor->find('list', array(
			'fields' => array('id', 'razonsocial')
		));
		$this->set(compact('categorias', 'proveedors'));
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
		$this->Producto->id = $id;
		if (!$this->Producto->exists()) {
			throw new NotFoundException(__('El Producto no Existe'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Producto->delete()) {
			$this->Session->setFlash(__('Se ha eliminado el Producto.'));
		} else {
			$this->Session->setFlash(__('No se pudo eliminar el Producto. Intente otra vez.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
