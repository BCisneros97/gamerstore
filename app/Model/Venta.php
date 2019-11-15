<?php
App::uses('AppModel', 'Model');
/**
 * Venta Model
 *
 * @property Cliente $Cliente
 * @property Disenio $Disenio
 */
class Venta extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Cliente' => array(
			'className' => 'Cliente',
			'foreignKey' => 'cliente_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Direccion' => array(
			'className' => 'Direccion',
			'foreignKey' => 'direccion_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public $hasMany = array(
		'DiseniosVenta' => array(
			'className' => 'DiseniosVenta',
			'foreignKey' => 'venta_id'
		)
	);

}
