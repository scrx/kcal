<?php
namespace app\models;
use lithium\util\Validator;

class Foods extends \lithium\data\Model {

	protected $_schema = array(
		'_id'	=>	array('type' => 'id'),
		'name'	=>	array('type' => 'string', 'null' => 0), 
		'kcal'	=>	array('type' => 'string', 'null' => 0),
		'prot'	=>	array('type' => 'string', 'null' => 0),
		'carbs'	=>	array('type' => 'string', 'null' => 0),
		'fat'	=>	array('type' => 'string', 'null' => 0),
		'fiber'	=>	array('type' => 'string', 'null' => 0),
		'calci'	=>	array('type' => 'string', 'null' => 0), #wapno
		'iron'	=>	array('type' => 'string', 'null' => 0),     #zelazo
		'potas'	=>	array('type' => 'string', 'null' => 0), #potas
		'magne'	=>	array('type' => 'string', 'null' => 0), #magnez
		'nosat_fat'	=>	array('type' => 'string', 'null' => 0),
	);

}


?>