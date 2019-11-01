<?php
App::uses('AppController', 'Controller');
/**
 * Tiporeclamos Controller
 *
 * @property Tiporeclamo $Tiporeclamo
 * @property PaginatorComponent $Paginator
 */
class TiporeclamosController extends AppController {

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
		$this->Tiporeclamo->recursive = 0;
		$this->set('tiporeclamos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tiporeclamo->exists($id)) {
			throw new NotFoundException(__('Invalid tiporeclamo'));
		}
		$options = array('conditions' => array('Tiporeclamo.' . $this->Tiporeclamo->primaryKey => $id));
		$this->set('tiporeclamo', $this->Tiporeclamo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tiporeclamo->create();
			if ($this->Tiporeclamo->save($this->request->data)) {
				$this->Session->setFlash(__('The tiporeclamo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tiporeclamo could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Tiporeclamo->exists($id)) {
			throw new NotFoundException(__('Invalid tiporeclamo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tiporeclamo->save($this->request->data)) {
				$this->Session->setFlash(__('The tiporeclamo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tiporeclamo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tiporeclamo.' . $this->Tiporeclamo->primaryKey => $id));
			$this->request->data = $this->Tiporeclamo->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Tiporeclamo->id = $id;
		if (!$this->Tiporeclamo->exists()) {
			throw new NotFoundException(__('Invalid tiporeclamo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Tiporeclamo->delete()) {
			$this->Session->setFlash(__('The tiporeclamo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tiporeclamo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
