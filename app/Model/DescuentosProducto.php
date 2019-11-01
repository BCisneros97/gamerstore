<?php
App::uses('AppModel', 'Model');
/**
 * DescuentosProducto Model
 *
 * @property Descuento $Descuento
 * @property Producto $Producto
 */
class DescuentosProducto extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Descuento' => array(
			'className' => 'Descuento',
			'foreignKey' => 'descuento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Producto' => array(
			'className' => 'Producto',
			'foreignKey' => 'producto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
