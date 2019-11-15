<?php
App::uses('AppModel', 'Model');
/**
 * Categoria Model
 *
 * @property Producto $Producto
 * @property Descuento $Descuento
 */
class Categoria extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Producto' => array(
			'className' => 'Producto',
			'foreignKey' => 'categoria_id',
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
			'joinTable' => 'categorias_descuentos',
			'foreignKey' => 'categoria_id',
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

	public $actsAs = array('Containable');

}
