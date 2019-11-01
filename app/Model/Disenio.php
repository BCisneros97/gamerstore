<?php
App::uses('AppModel', 'Model');
/**
 * Disenio Model
 *
 * @property Producto $Producto
 * @property Cliente $Cliente
 * @property Calificacion $Calificacion
 * @property Venta $Venta
 */
class Disenio extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Producto' => array(
			'className' => 'Producto',
			'foreignKey' => 'producto_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Cliente' => array(
			'className' => 'Cliente',
			'foreignKey' => 'cliente_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Calificacion' => array(
			'className' => 'Calificacion',
			'foreignKey' => 'disenio_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Venta' => array(
			'className' => 'Venta',
			'joinTable' => 'disenios_ventas',
			'foreignKey' => 'disenio_id',
			'associationForeignKey' => 'venta_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
