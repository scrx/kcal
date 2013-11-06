<?php
/**
 * File with Food model
 *
 * @category FileControllers
 * @package  KcalApp
 * @author   Mateusz P <mattpiskorzatgmail.com>
 * @license  www.notavailable.com public
 * @link     www.scx.grizon.pl/kcal
 */
namespace app\models;

/**
 * Food model
 *
 * @category Models
 * @package  KcalApp
 * @author   Mateusz P <mattpiskorzatgmail.com>
 * @license  www.notavailable.com public
 * @link     www.scx.grizon.pl/kcal
 */
class Foods extends \lithium\data\Model
{
    protected $_schema = array(
        '_id'	=>	array('type' => 'id'),
        'name'	=>	array('type' => 'string', 'null' => 0),
        'kcal'	=>	array('type' => 'string', 'null' => 0), //kilo kalorie
        'prot'	=>	array('type' => 'string', 'null' => 0), //bialka
        'carb'	=>	array('type' => 'string', 'null' => 0), //weglow
        'fats'	=>	array('type' => 'string', 'null' => 0), //tluszcze
        'fiber'	=>	array('type' => 'string', 'null' => 0), //blonnik
        'calc'	=>	array('type' => 'string', 'null' => 0), //wapno
        'iron'	=>	array('type' => 'string', 'null' => 0), //zelazo
        'potas'	=>	array('type' => 'string', 'null' => 0), //potas
        'magne'	=>	array('type' => 'string', 'null' => 0), //magnez
        'nosat_fat'	=>	array('type' => 'string', 'null' => 0),
    );

}
