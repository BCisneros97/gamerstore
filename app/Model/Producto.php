<?php
App::uses('AppModel', 'Model');
/**
 * Producto Model
 *
 * @property Categoria $Categoria
 * @property Proveedor $Proveedor
 * @property Disenio $Disenio
 * @property Descuento $Descuento
 */
class Producto extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Categoria' => array(
			'className' => 'Categoria',
			'foreignKey' => 'categoria_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Proveedor' => array(
			'className' => 'Proveedor',
			'foreignKey' => 'proveedor_id',
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
		'Disenio' => array(
			'className' => 'Disenio',
			'foreignKey' => 'producto_id',
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
		'Descuento' => array(
			'className' => 'Descuento',
			'joinTable' => 'descuentos_productos',
			'foreignKey' => 'producto_id',
			'associationForeignKey' => 'descuento_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

	public $actAs = array('Containable');

}
