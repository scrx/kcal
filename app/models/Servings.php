<?php
/**
 * Servings model file
 *
 * @category ModelsFile
 * @package  KcalApp
 * @author   Mateusz P <mattpiskorzatgmail.com>
 * @license  http://opensource.org/licenses/bsd-license.php The BSD License
 * @link     www.scx.grizon.pl/kcal
 */
namespace app\models;
use lithium\util\Validator;

/**
 * Servings model, tracks daily what kind of food user have taken
 *
 * @category Models
 * @package  KcalApp
 * @author   Mateusz P <mattpiskorzatgmail.com>
 * @license  http://opensource.org/licenses/bsd-license.php The BSD License
 * @link     www.scx.grizon.pl/kcal
 */
class Servings extends \lithium\data\Model {
	
	protected $_schema = array(
		'_id'		=>	array('type' => 'id'),
		'user_id'	=>	array('type' => 'id', 'null' => false),
		'food_id'   =>  array('type' => 'id'),
		'weight'	=> array('type' => 'numeric'),	
		'cost'		=>	array('type' => 'numeric', 'null' => false),
		'date_when'	=>	array('type' => 'string', 'null' => false),
		'modified'	=>	array('type' => 'string', 'null' => false),
		'created'	=>	array('type' => 'string', 'null' => false),
	);

	protected $_meta = array(
		'key' => '_id',
		'locked' => true
	);


}

?>
