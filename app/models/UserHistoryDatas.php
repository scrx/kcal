<?php
namespace app\models;
use lithium\util\Validator;

class UserHistoryDatas extends \lithium\data\Model {

/*
 * Waist: 47"
Chest: 46"
Neck: 18"
Hips: 49"
Biceps: 17"
Weight: 255.6 lbs
Height: 6'2"
 * 
 */
	protected $_schema = array(
		'_id'		=>	array('type' => 'id'),
		'user_id'	=>	array('type' => 'string', 'null' => false),
		'weight'	=>	array('type' => 'string', 'null' => false),
		'body_fat'	=>	array('type' => 'string', 'null' => false),
		'height'	=>	array('type' => 'string', 'null' => false),
		'waist'		=>	array('type' => 'string', 'null' => false),
		'chest'		=>	array('type' => 'string', 'null' => false),
		'neck'		=>	array('type' => 'string', 'null' => false),
		'hips'		=>	array('type' => 'string', 'null' => false),
		'biceps'	=>	array('type' => 'string', 'null' => false),		
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

