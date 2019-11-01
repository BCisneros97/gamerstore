<?php
App::uses('AppController', 'Controller');
/**
 * DescuentosProductos Controller
 *
 * @property DescuentosProducto $DescuentosProducto
 * @property PaginatorComponent $Paginator
 */
class DescuentosProductosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->DescuentosProducto->recursive = 0;
		$this->set('descuentosProductos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->DescuentosProducto->exists($id)) {
			throw new NotFoundException(__('Invalid descuentos producto'));
		}
		$options = array('conditions' => array('DescuentosProducto.' . $this->DescuentosProducto->primaryKey => $id));
		$this->set('descuentosProducto', $this->DescuentosProducto->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->DescuentosProducto->create();
			if ($this->DescuentosProducto->save($this->request->data)) {
				$this->Session->setFlash(__('The descuentos producto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The descuentos producto could not be saved. Please, try again.'));
			}
		}
		$descuentos = $this->DescuentosProducto->Descuento->find('list');
		$productos = $this->DescuentosProducto->Producto->find('list');
		$this->set(compact('descuentos', 'productos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->DescuentosProducto->exists($id)) {
			throw new NotFoundException(__('Invalid descuentos producto'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DescuentosProducto->save($this->request->data)) {
				$this->Session->setFlash(__('The descuentos producto has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The descuentos producto could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DescuentosProducto.' . $this->DescuentosProducto->primaryKey => $id));
			$this->request->data = $this->DescuentosProducto->find('first', $options);
		}
		$descuentos = $this->DescuentosProducto->Descuento->find('list');
		$productos = $this->DescuentosProducto->Producto->find('list');
		$this->set(compact('descuentos', 'productos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->DescuentosProducto->id = $id;
		if (!$this->DescuentosProducto->exists()) {
			throw new NotFoundException(__('Invalid descuentos producto'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->DescuentosProducto->delete()) {
			$this->Session->setFlash(__('The descuentos producto has been deleted.'));
		} else {
			$this->Session->setFlash(__('The descuentos producto could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
