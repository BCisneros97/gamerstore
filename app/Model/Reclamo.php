<?php
App::uses('AppModel', 'Model');
/**
 * Reclamo Model
 *
 * @property Tiporeclamo $Tiporeclamo
 * @property DiseniosVenta $DiseniosVenta
 */
class Reclamo extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Tiporeclamo' => array(
			'className' => 'Tiporeclamo',
			'foreignKey' => 'tiporeclamo_id',
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
		'DiseniosVenta' => array(
			'className' => 'DiseniosVenta',
			'foreignKey' => 'reclamo_id',
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

}
