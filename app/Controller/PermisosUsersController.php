<?php
App::uses('AppController', 'Controller');
/**
 * PermisosUsers Controller
 *
 * @property PermisosUser $PermisosUser
 * @property PaginatorComponent $Paginator
 */
class PermisosUsersController extends AppController {

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
		$this->PermisosUser->recursive = 0;
		$this->set('permisosUsers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PermisosUser->exists($id)) {
			throw new NotFoundException(__('Invalid permisos user'));
		}
		$options = array('conditions' => array('PermisosUser.' . $this->PermisosUser->primaryKey => $id));
		$this->set('permisosUser', $this->PermisosUser->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PermisosUser->create();
			if ($this->PermisosUser->save($this->request->data)) {
				$this->Session->setFlash(__('The permisos user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The permisos user could not be saved. Please, try again.'));
			}
		}
		$permisos = $this->PermisosUser->Permiso->find('list');
		$users = $this->PermisosUser->User->find('list');
		$this->set(compact('permisos', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PermisosUser->exists($id)) {
			throw new NotFoundException(__('Invalid permisos user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PermisosUser->save($this->request->data)) {
				$this->Session->setFlash(__('The permisos user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The permisos user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PermisosUser.' . $this->PermisosUser->primaryKey => $id));
			$this->request->data = $this->PermisosUser->find('first', $options);
		}
		$permisos = $this->PermisosUser->Permiso->find('list');
		$users = $this->PermisosUser->User->find('list');
		$this->set(compact('permisos', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PermisosUser->id = $id;
		if (!$this->PermisosUser->exists()) {
			throw new NotFoundException(__('Invalid permisos user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PermisosUser->delete()) {
			$this->Session->setFlash(__('The permisos user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The permisos user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
