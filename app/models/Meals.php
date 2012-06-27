<?php
namespace app\models;
use lithium\util\Validator;

class Meals extends \lithium\data\Model {
	
		protected $_schema = array(
		'_id'		=>	array('type' => 'id'),
		'name'	=>	array('type' => 'string', 'null' => 0),
		'kcal'	=>	array('type' => 'string', 'null' => 0),
		'prot'	=>	array('type' => 'string', 'null' => 0),
		'carb'	=>	array('type' => 'string', 'null' => 0),
		'fat'	=>	array('type' => 'string', 'null' => 0),
	);
	
}




?>