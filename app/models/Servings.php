<?php
namespace app\models;
use lithium\util\Validator;

class Servings extends \lithium\data\Model {
		
	
	//$script = 'jquery-1.7.2.js';
	
	protected $_schema = array(
		'_id'		=>	array('type' => 'id'),
		'user_id'	=>	array('type' => 'string', 'null' => false),
		'food_id'   =>  array('type' => 'string'),
		'weight'	=> array('type' => 'int'),
		// mozna rozszerzyc o cene ale czy ma to sens?
		
		//'weight'	=>	array('type' => 'string', 'null' => false),
		//'height'	=>	array('type' => 'string', 'null' => false),
		//'waist'		=>	array('type' => 'string', 'null' => false),
		//'chest'		=>	array('type' => 'string', 'null' => false),
		//'neck'		=>	array('type' => 'string', 'null' => false),
		//'hips'		=>	array('type' => 'string', 'null' => false),
		//'biceps'	=>	array('type' => 'string', 'null' => false),		
		'cost'	=>	array('type' => 'string', 'null' => false),
		'date_when'	=>	array('type' => 'string', 'null' => false),
		'updated'	=>	array('type' => 'datetime', 'null' => false),
		'created'	=>	array('type' => 'datetime', 'null' => false),
	);

	protected $_meta = array(
		'key' => '_id',
		'locked' => true
	);


}

?>
/*
		
*/