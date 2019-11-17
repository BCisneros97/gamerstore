<?php
App::uses('AppController', 'Controller');
/**
 * Disenios Controller
 *
 * @property Disenio $Disenio
 * @property PaginatorComponent $Paginator
 */
class DiseniosController extends AppController
{

	/**
	 * Components
	 *
	 * @var array
	 */
	public $components = array('Paginator', 'Session');
	public $layout = 'admin';

	public function beforeFilter()
	{
		$this->Auth->allow('show', 'carrito', 'search');
	}

	/**
	 * index method
	 *
	 * @return void
	 */
	public function index()
	{
		$this->Disenio->recursive = 0;
		$this->set('disenios', $this->Paginator->paginate());
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
		if (!$this->Disenio->exists($id)) {
			throw new NotFoundException(__('Invalid disenio'));
		}
		$options = array('conditions' => array('Disenio.' . $this->Disenio->primaryKey => $id));
		$this->set('disenio', $this->Disenio->find('first', $options));

		$this->loadModel('User');
		$options['joins'] = array(
			array(
				'table' => 'users',
				'alias' => 'User',
				'type' => 'LEFT',
				'conditions' => array(
					'Cliente.user_id = User.id'
				)
			)
		);
		$options['fields'] = array(
			'Disenio.id', 'Disenio.imagen', 'Disenio.descripcion', 'Disenio.producto_id', 'Disenio.cliente_id',
			'Producto.id', 'Producto.nombre', 'Producto.imagen', 'Producto.caracteristica', 'Producto.preciounitario', 'Producto.precioenviolocal', 'Producto.precioenvioprovincia', 'Producto.categoria_id', 'Producto.proveedor_id',
			'Cliente.id', 'Cliente.tipo', 'Cliente.sexo', 'Cliente.user_id',
			'User.id', 'User.username', 'User.email', 'User.password', 'User.foto', 'User.tipo'
		);
		$disenios = $this->Disenio->find('first', $options);
		$this->set('disenio', $disenios);
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add()
	{
		if ($this->request->is('post')) {
			$this->Disenio->create();
			if ($this->Disenio->save($this->request->data)) {
				$this->Session->setFlash(__('The disenio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The disenio could not be saved. Please, try again.'));
			}
		}
		$productos = $this->Disenio->Producto->find('list');
		$clientes = $this->Disenio->Cliente->find('list');
		$ventas = $this->Disenio->Ventum->find('list');
		$this->set(compact('productos', 'clientes', 'ventas'));
	}

	public function create($id = null)
	{
		if (!$this->Disenio->Producto->exists($id)) {
			throw new NotFoundException(__('No existe el producto'));
		}
		if ($this->request->is('post')) {
			$this->Disenio->create();
			$this->request->data['Disenio']['imagen'] = file_get_contents($_FILES['imagen']['tmp_name']);
			if ($this->Disenio->save($this->request->data)) {
				$this->Session->setFlash(__('Su diseño se guardó correctamente.'));
				return $this->redirect(array('action' => 'show', $this->Disenio->id));
			} else {
				$this->Session->setFlash(__('Su diseño no se pudo guardar. Intente otra vez'));
			}
		}
		$this->set('cliente', $this->Disenio->Cliente->find('first', array(
			'conditions' => array('Cliente.user_id' => AuthComponent::user('id'))
		)));
		$this->set('producto_id', $id);
		$this->layout = 'default';
	}

	public function show($id = null)
	{
		if (!$this->Disenio->exists($id)) {
			throw new NotFoundException(__('El diseño no existe.'));
		}
		$options = array();
		$this->set('disenio', $this->Disenio->find('first', array(
			'contain' => array(
				'Producto',
				'Cliente' => array('User')
			),
			'conditions' => array('Disenio.id' => $id)
		)));
		$this->layout = 'default';
	}

	public function comprar($id = null)
	{
		$this->Disenio->id = $id;
		if (!$this->Disenio->exists()) {
			throw new NotFoundException(__('No existe el diseño'));
		}
		$this->request->allowMethod('post');
		$this->Disenio->recursive = 0;
		$options = array('conditions' => array('Disenio.' . $this->Disenio->primaryKey => $id));
		CakeSession::write('Carrito.' . $id, array(
			'disenio' => $this->Disenio->find('first', $options),
			'cantidad' => $this->request->data['cantidad'],
			'envio' => $this->request->data['envio']
		));

		return $this->redirect(array('action' => 'carrito'));
	}

	public function carrito()
	{
		$this->loadModel('Cliente');
		$this->Cliente->recursive = 1;
		$this->set('cliente', $this->Cliente->find('first', array(
			'contain' => array(
				'Direccion' => array(
					'Ciudad' => 'Region'
				),
				'Tarjeta'
			),
			'conditions' => array('Cliente.user_id' => AuthComponent::user('id'))
		)));
		$this->set('disenios', CakeSession::read('Carrito'));

		$this->layout = 'default';
	}

	public function removeCarrito($index = null)
	{
		CakeSession::delete('Carrito.' . $index);
		return $this->redirect(array('action' => 'carrito'));
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
		if (!$this->Disenio->exists($id)) {
			throw new NotFoundException(__('Invalid disenio'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Disenio->save($this->request->data)) {
				$this->Session->setFlash(__('The disenio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The disenio could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Disenio.' . $this->Disenio->primaryKey => $id));
			$this->request->data = $this->Disenio->find('first', $options);
		}
		$productos = $this->Disenio->Producto->find('list');
		$clientes = $this->Disenio->Cliente->find('list');
		$ventas = $this->Disenio->Ventum->find('list');
		$this->set(compact('productos', 'clientes', 'ventas'));
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
		$this->Disenio->id = $id;
		if (!$this->Disenio->exists()) {
			throw new NotFoundException(__('Invalid disenio'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Disenio->delete()) {
			$this->Session->setFlash(__('The disenio has been deleted.'));
		} else {
			$this->Session->setFlash(__('The disenio could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function search()
	{
		$query = strtolower(trim($this->request->data['query'], ' '));
		$disenios = $this->Disenio->find('all', array(
			'joins' => array(
				array(
					'table' => 'categorias',
					'alias' => 'Categoria',
					'type' => 'LEFT',
					'conditions' => array(
						'Producto.categoria_id = Categoria.id'
					)
				),
				array(
					'table' => 'users',
					'alias' => 'User',
					'type' => 'LEFT',
					'conditions' => array(
						'Cliente.user_id = User.id'
					)
				)
			),
			'conditions' => array('OR' => array(
				array('Producto.nombre LIKE' => '%' . $query . '%'),
				array('Disenio.descripcion LIKE' => '%' . $query . '%'),
				array('Categoria.nombre LIKE' => '%' . $query . '%')
			)),
			'fields' => array('User.username', 'Disenio.imagen', 'Disenio.descripcion', )
		));
		$this->set('disenios', $disenios);
		$this->set('query', $this->request->data['query']);
		$this->layout = 'default';
	}
}
