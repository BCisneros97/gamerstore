<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

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
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Usuario no existe'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			$this->request->data['User']['password'] = password_hash($this->request->data['User']['password'], PASSWORD_BCRYPT);
			$this->request->data['User']['foto'] = file_get_contents($_FILES['foto']['tmp_name']);
			if ($this->User->save($this->request->data, array('deep'=>'true'))) {
				$this->Session->setFlash(__('Usuario guardado correctamente'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se pudo guardar el usuario'));
			}
		}
		$this->loadModel('Permiso');
		$permisos = $this->Permiso->find('all');
		$this->set(compact('permisos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if (strlen($this->request->data['User']['password']) > 0) {
				$this->request->data['User']['password'] = password_hash($this->request->data['User']['password'], PASSWORD_BCRYPT);
			}
			else {
				unset($this->request->data['User']['password']);
			}
			if ($this->User->save($this->request->data, array('deep'=>'true'))) {
				$this->Session->setFlash(__('Usuario guardado correctamente'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se pudo guardar el usuario'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
			unset($this->request->data['User']['password']);
		}
		$permisos = $this->User->Permiso->find('all');
		$this->set(compact('permisos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('Usuario dado de baja correctamente'));
		} else {
			$this->Session->setFlash(__('No se pudo dar de baja al usuario'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function registrar() {
		if ($this->request->is('post')) {
			$this->User->create();
			$this->request->data['User']['password'] = password_hash($this->request->data['User']['password'], PASSWORD_BCRYPT);
			$this->request->data['User']['tipo'] = 'Cliente';
			if ($this->User->save($this->request->data)) {
				$this->loadModel('Cliente');
				$this->Cliente->create();
				$this->request->data['Cliente']['user_id'] = $this->User->id;
				$this->request->data['Cliente']['tipo'] = '';
				$this->Cliente->save($this->request->data);
				return $this->redirect(array('controller'=>'pages'));
			} else {
				$this->Session->setFlash(__('No se pudo guardar el usuario.'));
			}
		}

		$this->layout = 'login';
	}
}
