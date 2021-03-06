<?php
/**
 * UserHistoryData file
 *
 * @category ModelsFile
 * @package  KcalApp
 * @author   Mateusz P <mattpiskorzatgmail.com>
 * @license  http://opensource.org/licenses/bsd-license.php The BSD License
 * @link     www.scx.grizon.pl/kcal
 */
namespace app\models;

/**
 * UserHistoryData model class
 *
 * @category Models
 * @package  KcalApp
 * @author   Mateusz P <mattpiskorzatgmail.com>
 * @license  http://opensource.org/licenses/bsd-license.php The BSD License
 * @link     www.scx.grizon.pl/kcal
 */
class UserHistoryDatas extends \lithium\data\Model
{

    protected $_schema = array(
        '_id'		=>	array('type' => 'id'),
        'user_id'	=>	array('type' => 'string', 'null' => false),
        'weight'	=>	array('type' => 'string', 'null' => false),
        'body_fat'	=>	array('type' => 'string', 'null' => false),
        'calculated_body_fat'  =>  array('type' => 'string', 'null' => false),
        'height'	=>	array('type' => 'string', 'null' => false),
        'waist'		=>	array('type' => 'string', 'null' => false),
        'chest'		=>	array('type' => 'string', 'null' => false),
        'neck'		=>	array('type' => 'string', 'null' => false),
        'hips'		=>	array('type' => 'string', 'null' => false),
        'biceps'	=>	array('type' => 'string', 'null' => false),

        'date_when'	=>	array('type' => 'datetime', 'null' => false),
        'updated'	=>	array('type' => 'datetime', 'null' => false),
        'created'	=>	array('type' => 'datetime', 'null' => false),
        //'current'	=>  array('type' => 'int', 'null'	=>false);
    );

    protected $_meta = array(
        'key' => '_id',
        'locked' => true
    );
}
