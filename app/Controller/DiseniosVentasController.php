<?php
App::uses('AppController', 'Controller');
/**
 * DiseniosVentas Controller
 *
 * @property DiseniosVenta $DiseniosVenta
 * @property PaginatorComponent $Paginator
 */
class DiseniosVentasController extends AppController
{

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
	public function index()
	{
		$this->loadModel('Cliente');
		$options = array(
			'contain' => array(
				'Venta' => array(
					'DiseniosVenta' => array('Disenio', 'Reclamo')
				)
			),
			'conditions' => array('Cliente.user_id' => AuthComponent::user('id'))
		);
		$this->set('cliente', $this->Cliente->find('first', $options));
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
		if (!$this->DiseniosVenta->exists($id)) {
			throw new NotFoundException(__('Invalid disenios venta'));
		}
		$options = array('conditions' => array('DiseniosVenta.' . $this->DiseniosVenta->primaryKey => $id));
		$this->set('diseniosVenta', $this->DiseniosVenta->find('first', $options));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add()
	{
		if ($this->request->is('post')) {
			$this->DiseniosVenta->create();
			if ($this->DiseniosVenta->save($this->request->data)) {
				$this->Session->setFlash(__('The disenios venta has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The disenios venta could not be saved. Please, try again.'));
			}
		}
		$disenios = $this->DiseniosVenta->Disenio->find('list');
		$ventas = $this->DiseniosVenta->Ventum->find('list');
		$reclamos = $this->DiseniosVenta->Reclamo->find('list');
		$this->set(compact('disenios', 'ventas', 'reclamos'));
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
		if (!$this->DiseniosVenta->exists($id)) {
			throw new NotFoundException(__('Invalid disenios venta'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->DiseniosVenta->save($this->request->data)) {
				$this->Session->setFlash(__('The disenios venta has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The disenios venta could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('DiseniosVenta.' . $this->DiseniosVenta->primaryKey => $id));
			$this->request->data = $this->DiseniosVenta->find('first', $options);
		}
		$disenios = $this->DiseniosVenta->Disenio->find('list');
		$ventas = $this->DiseniosVenta->Ventum->find('list');
		$reclamos = $this->DiseniosVenta->Reclamo->find('list');
		$this->set(compact('disenios', 'ventas', 'reclamos'));
	}

	/**
	 * delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function finalizar($id = null)
	{
		$this->DiseniosVenta->id = $id;
		if (!$this->DiseniosVenta->exists()) {
			throw new NotFoundException(__('Invalid disenios venta'));
		}
		$this->request->allowMethod('post');
		$disenioVenta = $this->DiseniosVenta->find('first', array(
			'conditions' => array('DiseniosVenta.id' => $id)
		));
		$disenioVenta['DiseniosVenta']['estado'] = 'Finalizado';
		if ($this->DiseniosVenta->save($disenioVenta)) {
			$this->Session->setFlash(__('El pedido se marcó como finalizado.'));
		} else {
			$this->Session->setFlash(__('No se pudo guardar los cambios'));
		}
		return $this->redirect(array('controller' => 'ventas', 'action' => 'view', $disenioVenta['DiseniosVenta']['id']));
	}
}
