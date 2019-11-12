<?php
App::uses('AppModel', 'Model');
/**
 * Tiporeclamo Model
 *
 * @property Reclamo $Reclamo
 */
class Tiporeclamo extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Reclamo' => array(
			'className' => 'Reclamo',
			'foreignKey' => 'tiporeclamo_id',
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
