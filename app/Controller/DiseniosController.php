<?php
App::uses('AppController', 'Controller');
/**
 * Disenios Controller
 *
 * @property Disenio $Disenio
 * @property PaginatorComponent $Paginator
 */
class DiseniosController extends AppController {

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
		$this->Disenio->recursive = 0;
		$this->set('disenios', $this->Paginator->paginate());





	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Disenio->exists($id)) {
			throw new NotFoundException(__('Invalid disenio'));
		}
		$options = array('conditions' => array('Disenio.' . $this->Disenio->primaryKey => $id));
		$this->set('disenio', $this->Disenio->find('first', $options));

        $this->loadModel('User');
        $options['joins']=array(
            array('table'=>'users',
                'alias'=>'User',
                'type'=>'LEFT',
                'conditions'=>array(
                    'Cliente.user_id = User.id'
                ))
        );
        $options['fields'] =array(
            'Disenio.id','Disenio.imagen','Disenio.descripcion','Disenio.producto_id','Disenio.cliente_id',
            'Producto.id','Producto.nombre','Producto.imagen','Producto.caracteristica','Producto.preciounitario','Producto.precioenviolocal','Producto.precioenvioprovincia','Producto.categoria_id','Producto.proveedor_id',
            'Cliente.id','Cliente.tipo','Cliente.sexo', 'Cliente.user_id',
            'User.id','User.nombre','User.email','User.password','User.foto','User.tipo'
        );
        $disenios=$this->Disenio->find('first',$options);
        $this->set('disenio',$disenios);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Disenio->create();
			if ($this->Disenio->save($this->request->data)) {
				$this->Session->setFlash(__('The disenio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The disenio could not be saved. Please, try again.'));
			}
		}
		$productos = $this->Disenio->Producto->find('list');
		$clientes = $this->Disenio->Cliente->find('list');
		$ventas = $this->Disenio->Ventum->find('list');
		$this->set(compact('productos', 'clientes', 'ventas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Disenio->exists($id)) {
			throw new NotFoundException(__('Invalid disenio'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Disenio->save($this->request->data)) {
				$this->Session->setFlash(__('The disenio has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The disenio could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Disenio.' . $this->Disenio->primaryKey => $id));
			$this->request->data = $this->Disenio->find('first', $options);
		}
		$productos = $this->Disenio->Producto->find('list');
		$clientes = $this->Disenio->Cliente->find('list');
		$ventas = $this->Disenio->Ventum->find('list');
		$this->set(compact('productos', 'clientes', 'ventas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Disenio->id = $id;
		if (!$this->Disenio->exists()) {
			throw new NotFoundException(__('Invalid disenio'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Disenio->delete()) {
			$this->Session->setFlash(__('The disenio has been deleted.'));
		} else {
			$this->Session->setFlash(__('The disenio could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
