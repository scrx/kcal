<?php
namespace app\models;
use lithium\util\Validator;

class Meals extends \lithium\data\Model {
	
	protected $_schema = array(
		'_id'		=>	array('type' => 'id'),
		'user_id'	=>	array('type' => 'int', 'null' => false),
		'food_id'   =>  array('type' => 'int'),
		'weight'	=> array('type' => 'int'),	
		'cost'	=>	array('type' => 'int', 'null' => false),
		'date_when'	=>	array('type' => 'date', 'null' => false),
		'modified'	=>	array('type' => 'date', 'null' => false),
		'created'	=>	array('type' => 'date', 'null' => false),
	);

	protected $_meta = array(
		'key' => '_id',
		'locked' => true
	);


}

?>