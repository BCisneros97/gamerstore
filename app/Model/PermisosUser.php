<?php
App::uses('AppModel', 'Model');
/**
 * PermisosUser Model
 *
 * @property Permiso $Permiso
 * @property User $User
 */
class PermisosUser extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Permiso' => array(
			'className' => 'Permiso',
			'foreignKey' => 'permiso_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
