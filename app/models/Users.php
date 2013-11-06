<?php
/**
 * File with User model
 *
 * @category Models
 * @package  KcalApp
 * @author   Mateusz P <mattpiskorzatgmail.com>
 * @license  www.notavailable.com public
 * @link     www.scx.grizon.pl/kcal
 */
namespace app\models;

/**
 * Users model class
 *
 * @category Models
 * @package  KcalApp
 * @author   Mateusz P <mattpiskorzatgmail.com>
 * @license  www.notavailable.com public
 * @link     www.scx.grizon.pl/kcal
 */
class Users extends \lithium\data\Model
{
        protected $_schema = array(
        '_id'           =>  array('type' => 'id'),
        'username'      =>  array('type' => 'string',   'null' => false,'unique'=>true),
        'password'      =>  array('type' => 'password', 'null' => false),
        'dateofbirth'   =>  array('type' => 'date',     'null' => false),
        'name'          =>  array('type' => 'string',   'null' => false),
        'surname'       =>  array('type' => 'string',   'null' => false),
        'created'       =>  array('type' => 'datetime', 'null' => false),
        'modified'      =>  array('type' => 'datetime', 'null' => false)
        /*
        'body_fat'  =>  array('type' => 'string', 'null' => false),

        'height'    =>  array('type' => 'string', 'null' => false),
        'waist'     =>  array('type' => 'string', 'null' => false),
        'chest'     =>  array('type' => 'string', 'null' => false),
        'neck'      =>  array('type' => 'string', 'null' => false),
        'hips'      =>  array('type' => 'string', 'null' => false),
        'biceps'    =>  array('type' => 'string', 'null' => false),

        'date_when' =>  array('type' => 'datetime', 'null' => false),
        'updated'   =>  array('type' => 'datetime', 'null' => false),
        'created'   =>  array('type' => 'datetime', 'null' => false), */
        //'current' =>  array('type' => 'int', 'null'   =>false);
    );
}
