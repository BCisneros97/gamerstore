<?php
App::uses('AppModel', 'Model');
/**
 * Descuento Model
 *
 * @property Categoria $Categoria
 * @property Producto $Producto
 */
class Descuento extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Categoria' => array(
			'className' => 'Categoria',
			'joinTable' => 'categorias_descuentos',
			'foreignKey' => 'descuento_id',
			'associationForeignKey' => 'categoria_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Producto' => array(
			'className' => 'Producto',
			'joinTable' => 'descuentos_productos',
			'foreignKey' => 'descuento_id',
			'associationForeignKey' => 'producto_id',
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
