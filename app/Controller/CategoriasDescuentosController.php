<?php
App::uses('AppController', 'Controller');
/**
 * CategoriasDescuentos Controller
 *
 * @property CategoriasDescuento $CategoriasDescuento
 * @property PaginatorComponent $Paginator
 */
class CategoriasDescuentosController extends AppController {

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
	public function view($id = null) {
		if (!$this->CategoriasDescuento->exists($id)) {
			throw new NotFoundException(__('Invalid categorias descuento'));
		}
		$options = array('conditions' => array('CategoriasDescuento.' . $this->CategoriasDescuento->primaryKey => $id));
		$this->set('categoriasDescuento', $this->CategoriasDescuento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CategoriasDescuento->create();
			if ($this->CategoriasDescuento->save($this->request->data)) {
				$this->Session->setFlash(__('The categorias descuento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The categorias descuento could not be saved. Please, try again.'));
			}
		}
		$categorias = $this->CategoriasDescuento->Categorium->find('list');
		$descuentos = $this->CategoriasDescuento->Descuento->find('list');
		$this->set(compact('categorias', 'descuentos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CategoriasDescuento->exists($id)) {
			throw new NotFoundException(__('Invalid categorias descuento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CategoriasDescuento->save($this->request->data)) {
				$this->Session->setFlash(__('The categorias descuento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The categorias descuento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CategoriasDescuento.' . $this->CategoriasDescuento->primaryKey => $id));
			$this->request->data = $this->CategoriasDescuento->find('first', $options);
		}
		$categorias = $this->CategoriasDescuento->Categorium->find('list');
		$descuentos = $this->CategoriasDescuento->Descuento->find('list');
		$this->set(compact('categorias', 'descuentos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CategoriasDescuento->id = $id;
		if (!$this->CategoriasDescuento->exists()) {
			throw new NotFoundException(__('Invalid categorias descuento'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CategoriasDescuento->delete()) {
			$this->Session->setFlash(__('The categorias descuento has been deleted.'));
		} else {
			$this->Session->setFlash(__('The categorias descuento could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
