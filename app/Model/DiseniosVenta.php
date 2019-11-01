<?php
App::uses('AppModel', 'Model');
/**
 * DiseniosVenta Model
 *
 * @property Disenio $Disenio
 * @property Venta $Venta
 * @property Reclamo $Reclamo
 */
class DiseniosVenta extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Disenio' => array(
			'className' => 'Disenio',
			'foreignKey' => 'disenio_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Venta' => array(
			'className' => 'Venta',
			'foreignKey' => 'venta_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Reclamo' => array(
			'className' => 'Reclamo',
			'foreignKey' => 'reclamo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
