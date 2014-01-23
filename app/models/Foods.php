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
    public static $alias = 'Foods';

   public $validates = array(
            'name' => array('notEmpty', 'message' => 'Please supply a name.'),
            'kcal' => array('notEmpty', 'message' => 'Please supply energy in kcal.'),
    );


    protected $_schema = array(
        '_id'	=>	array(
            'type' => 'id',
            'length' => 10,
            'null' => false,
            'default' => null
        ),
        'name'	=>	array(
            'type' => 'string',
            'null' => 0
        ),
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

    /**
     * simple method for calculating energy given by total of proteins, carbs and fats given
     *
     * @param array $nutrients array with corresponding number of protein, carb and fat
     *
     * @return int sum of given nutrients
     */
    public static function calculateKcal($nutrients)
    {
        if (isset($nutrients['protein'])) {
            $protein = $nutrients['protein'];
        } else {
            $protein = 0;
        }
        if (isset($nutrients['carb'])) {
            $carb = $nutrients['carb'];
        } else {
            $carb = 0;
        }
        if (isset($nutrients['fat'])) {
            $fat = $nutrients['fat'];
        } else {
            $fat = 0;
        }

        return ($protein*4)+ ($carb * 4) +($fat * 9);
    }

}
