<?php
App::uses('AppModel', 'Model');
/**
 * Calificacion Model
 *
 * @property Disenio $Disenio
 * @property Cliente $Cliente
 */
class Calificacion extends AppModel {


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
		'Cliente' => array(
			'className' => 'Cliente',
			'foreignKey' => 'cliente_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
