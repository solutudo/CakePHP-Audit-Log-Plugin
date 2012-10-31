<?php
App::uses('AuditoryAppModel', 'Auditory.Model');

class AuditDelta extends AuditoryAppModel {

	public $belongsTo = array(
		'Audit' => array(
			'className' => 'Audit',
			'foreignKey' => 'audit_id'
		)
	);

}
