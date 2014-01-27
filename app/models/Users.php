<?php
/**
 * User model file
 *
 * @category ModelsFile
 * @package  KcalApp
 * @author   Mateusz P <mattpiskorzatgmail.com>
 * @license  http://opensource.org/licenses/bsd-license.php The BSD License
 * @link     www.scx.grizon.pl/kcal
 */
namespace app\models;

/**
 * Users model class
 *
 * @category Models
 * @package  KcalApp
 * @author   Mateusz P <mattpiskorzatgmail.com>
 * @license  http://opensource.org/licenses/bsd-license.php The BSD License
 * @link     www.scx.grizon.pl/kcal
 */
class Users extends \lithium\data\Model
{

  public $validates = array(
            'username' => array(
                    array('unique', 'message' => 'Username already in use'),
                    array('notEmpty', 'message'=>'Username cannot be empty')
                    )
                );

        protected $_schema = array(
        '_id'           =>  array('type' => 'id'),
        'username'      =>  array('type' => 'string',   'null' => false),
        'password'      =>  array('type' => 'password', 'null' => false),
        'dateofbirth'   =>  array('type' => 'date',     'null' => false),
        'name'          =>  array('type' => 'string',   'null' => false),
        'surname'       =>  array('type' => 'string',   'null' => false),
        'created'       =>  array('type' => 'datetime', 'null' => false),
        'modified'      =>  array('type' => 'datetime', 'null' => false)
    );
}
