<?php
App::uses('AppController', 'Controller');
/**
 * Ventas Controller
 *
 * @property Venta $Venta
 * @property PaginatorComponent $Paginator
 */
class VentasController extends AppController
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
		$ventas = $this->Venta->find('all', array(
			'contain' => array(
				'Cliente' => array('User'),
				'DiseniosVenta'
			)
		));
		$this->set('ventas', $ventas);
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
		if (!$this->Venta->exists($id)) {
			throw new NotFoundException(__('La Venta no Existe'));
		}
		$options = array(
			'conditions' => array('Venta.id' => $id),
			'contain' => array(
				'Cliente' => array('User'),
				'DiseniosVenta' => array('Disenio', 'Reclamo'),
				'Direccion' => array(
					'Ciudad' => array('Region')
				)
			)
		);
		$this->set('venta', $this->Venta->find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add()
	{
		if ($this->request->is('post')) {
			$this->Venta->create();

			$fcompra = date_create('now');
			$this->request->data['Venta']['fechacompra'] = date_format($fcompra, 'Y-m-d');
			date_add($fcompra, date_interval_create_from_date_string('10 days'));
			$this->request->data['Venta']['fechaentrega'] = date_format($fcompra, 'Y-m-d');

			if ($this->Venta->saveAssociated($this->request->data, array('deep' => true))) {
				CakeSession::delete('Carrito');
				return $this->redirect(array('controller' => 'diseniosVentas', 'action' => 'index'));
			} else {
				$this->Session->setFlash(__('La Venta no se pudo guardar. Intente otra vez.'));
				return $this->redirect(array('controller' => 'disenios', 'action' => 'carrito'));
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
	public function edit($id = null)
	{
		if (!$this->Venta->exists($id)) {
			throw new NotFoundException(__('La Venta no Existe'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Venta->save($this->request->data)) {
				$this->Session->setFlash(__('La Venta ha sido Guardada.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La Venta no se pudo guardar. Intente otra vez.'));
			}
		} else {
			$options = array('conditions' => array('Venta.' . $this->Venta->primaryKey => $id));
			$this->request->data = $this->Venta->find('first', $options);
		}
		$clientes = $this->Venta->Cliente->find('list');
		$disenios = $this->Venta->Disenio->find('list');
		$this->set(compact('clientes', 'disenios'));
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
		$this->Venta->id = $id;
		if (!$this->Venta->exists()) {
			throw new NotFoundException(__('La Venta no Existe'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Venta->delete()) {
			$this->Session->setFlash(__('La Venta ha sido Guardada.'));
		} else {
			$this->Session->setFlash(__('La Venta no se pudo guardar. Intente otra vez.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
