<?php
namespace app\models;
use lithium\util\Validator;

class Foods extends \lithium\data\Model {

	protected $_schema = array(
		'_id'		=>	array('type' => 'id'),
		'name'	=>	array('type' => 'string', 'null' => 0),
		'kcal'	=>	array('type' => 'string', 'null' => 0),
		'prot'	=>	array('type' => 'string', 'null' => 0),
		'carb'	=>	array('type' => 'string', 'null' => 0),
		'sat_fat'	=>	array('type' => 'string', 'null' => 0),
		'nosat_fat'	=>	array('type' => 'string', 'null' => 0),
	);

}


?>