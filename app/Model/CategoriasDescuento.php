<?php
App::uses('AppModel', 'Model');
/**
 * CategoriasDescuento Model
 *
 * @property Categoria $Categoria
 * @property Descuento $Descuento
 */
class CategoriasDescuento extends AppModel {


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
		'Descuento' => array(
			'className' => 'Descuento',
			'foreignKey' => 'descuento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
