<?php
App::uses('AppController', 'Controller');
/**
 * Descuentos Controller
 *
 * @property Descuento $Descuento
 * @property PaginatorComponent $Paginator
 */
class DescuentosController extends AppController {

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
	public function index() {
		$this->Descuento->recursive = 1;
		$this->set('descuentos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Descuento->exists($id)) {
			throw new NotFoundException(__('Invalid descuento'));
		}
		$options = array('conditions' => array('Descuento.' . $this->Descuento->primaryKey => $id));
		$this->set('descuento', $this->Descuento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Descuento->create();
			if ($this->Descuento->save($this->request->data)) {
				$this->Session->setFlash(__('The descuento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The descuento could not be saved. Please, try again.'));
			}
		}
		$categorias = $this->Descuento->Categorium->find('list');
		$productos = $this->Descuento->Producto->find('list');
		$this->set(compact('categorias', 'productos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Descuento->exists($id)) {
			throw new NotFoundException(__('Invalid descuento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Descuento->save($this->request->data)) {
				$this->Session->setFlash(__('The descuento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The descuento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Descuento.' . $this->Descuento->primaryKey => $id));
			$this->request->data = $this->Descuento->find('first', $options);
		}
		$categorias = $this->Descuento->Categorium->find('list');
		$productos = $this->Descuento->Producto->find('list');
		$this->set(compact('categorias', 'productos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Descuento->id = $id;
		if (!$this->Descuento->exists()) {
			throw new NotFoundException(__('Invalid descuento'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Descuento->delete()) {
			$this->Session->setFlash(__('The descuento has been deleted.'));
		} else {
			$this->Session->setFlash(__('The descuento could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
