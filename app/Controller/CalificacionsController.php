<?php
App::uses('AppController', 'Controller');
/**
 * Calificacions Controller
 *
 * @property Calificacion $Calificacion
 * @property PaginatorComponent $Paginator
 */
class CalificacionsController extends AppController {

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
		$this->Calificacion->recursive = 0;
		$this->set('calificacions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Calificacion->exists($id)) {
			throw new NotFoundException(__('Invalid calificacion'));
		}
		$options = array('conditions' => array('Calificacion.' . $this->Calificacion->primaryKey => $id));
		$this->set('calificacion', $this->Calificacion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Calificacion->create();
			if ($this->Calificacion->save($this->request->data)) {
				$this->Session->setFlash(__('The calificacion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The calificacion could not be saved. Please, try again.'));
			}
		}
		$disenios = $this->Calificacion->Disenio->find('list');
		$clientes = $this->Calificacion->Cliente->find('list');
		$this->set(compact('disenios', 'clientes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Calificacion->exists($id)) {
			throw new NotFoundException(__('Invalid calificacion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Calificacion->save($this->request->data)) {
				$this->Session->setFlash(__('The calificacion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The calificacion could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Calificacion.' . $this->Calificacion->primaryKey => $id));
			$this->request->data = $this->Calificacion->find('first', $options);
		}
		$disenios = $this->Calificacion->Disenio->find('list');
		$clientes = $this->Calificacion->Cliente->find('list');
		$this->set(compact('disenios', 'clientes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Calificacion->id = $id;
		if (!$this->Calificacion->exists()) {
			throw new NotFoundException(__('Invalid calificacion'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Calificacion->delete()) {
			$this->Session->setFlash(__('The calificacion has been deleted.'));
		} else {
			$this->Session->setFlash(__('The calificacion could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
