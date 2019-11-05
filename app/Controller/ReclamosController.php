<?php
App::uses('AppController', 'Controller');
/**
 * Reclamos Controller
 *
 * @property Reclamo $Reclamo
 * @property PaginatorComponent $Paginator
 */
class ReclamosController extends AppController
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
		$options = array(
			'contain' => array(
				'Tiporeclamo',
				'DiseniosVenta' => array(
					'Venta' => array(
						'Cliente' => array('User')
					)
				)
			)
		);
		$this->set('reclamos', $this->Reclamo->find('all', $options));
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
		if (!$this->Reclamo->exists($id)) {
			throw new NotFoundException(__('No existe el reclamo'));
		}
		$options = array(
			'conditions' => array('Reclamo.' . $this->Reclamo->primaryKey => $id),
			'contain' => array(
				'Tiporeclamo',
				'DiseniosVenta' => array(
					'Venta' => array(
						'Cliente' => array('User')
					)
				)
			)
		);
		$this->set('reclamo', $this->Reclamo->find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add($disenioventa_id = null)
	{
		if (!$this->Reclamo->DiseniosVenta->exists($disenioventa_id)) {
			throw new NotFoundException(__('No se puede crear reclamo'));
		}
		if ($this->request->is('post')) {
			$this->Reclamo->create();
			$this->request->data['Reclamo']['prueba'] = file_get_contents($_FILES['prueba']['tmp_name']);
			$this->request->data['Reclamo']['fecha'] = date("Y-m-d");
			$this->request->data['Reclamo']['estado'] = 'Pendiente';
			if ($this->Reclamo->save($this->request->data)) {
				$this->Session->setFlash(__('Se envió el reclamo.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reclamo could not be saved. Please, try again.'));
			}
		}
		$this->Reclamo->Tiporeclamo->recursive = 0;
		$tiporeclamos = $this->Reclamo->Tiporeclamo->find('all');
		$this->set(compact('tiporeclamos', 'disenioventa_id'));
		$this->layout = 'default';
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
		if (!$this->Reclamo->exists($id)) {
			throw new NotFoundException(__('El reclamo no existe'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Reclamo->save($this->request->data)) {
				$this->Session->setFlash(__('El reclamo se guardó correctamente.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('No se guardó el reclamo. Intente otra vez.'));
			}
		} else {
			$options = array(
				'conditions' => array('Reclamo.' . $this->Reclamo->primaryKey => $id),
				'contain' => array(
					'Tiporeclamo',
					'DiseniosVenta' => array(
						'Venta' => array(
							'Cliente' => array('User')
						)
					)
				)
			);
			$this->request->data = $this->Reclamo->find('first', $options);
		}
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
		$this->Reclamo->id = $id;
		if (!$this->Reclamo->exists()) {
			throw new NotFoundException(__('Invalid reclamo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Reclamo->delete()) {
			$this->Session->setFlash(__('The reclamo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The reclamo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
