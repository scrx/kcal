<?php
/**
 * Food model file
 *
 * @category ModelsFile
 * @package  KcalApp
 * @author   Mateusz P <mattpiskorzatgmail.com>
 * @license  http://opensource.org/licenses/bsd-license.php The BSD License
 * @link     www.scx.grizon.pl/kcal
 */
namespace app\models;

/**
 * Food model
 *
 * @category Models
 * @package  KcalApp
 * @author   Mateusz P <mattpiskorzatgmail.com>
 * @license  http://opensource.org/licenses/bsd-license.php The BSD License
 * @link     www.scx.grizon.pl/kcal
 */
class Foods extends \lithium\data\Model
{
    //public static $alias = 'Foods';

   public $validates = array(
            'name' => array('notEmpty', 'message' => 'Please supply a name.'),
            'kcal' => array('notEmpty', 'message' => 'Please supply energy in kcal.'),
    );


    protected $_schema = array(
        '_id'	=>	array(
            'type' => 'id',
            'null' => false,
            'default' => null
        ),
        //USDA National Nutrient Database for Standard Reference, Release 26
        'ndb_no' => array('type'=>'string', 'null'=>0),

        //Short Description
        'name'	=>	array('type' => 'string','null' => 0),
        'water' =>  array('type' => 'float','null' => 0),
        'kcal'	=>	array('type' => 'float', 'null' => 0),
        'protein'	=>	array('type' => 'float', 'null' => 0),
        'lipid_total'   =>  array('type' => 'float', 'null' => 0),
        'ash'   =>  array('type' => 'float', 'null' => 0),
        'carbs'   =>  array('type' => 'float', 'null' => 0),
        'fiber'  =>  array('type' => 'float', 'null' => 0),
        'sugar_total'    =>  array('type' => 'float', 'null' => 0),
        'calcium'  =>  array('type' => 'float', 'null' => 0),
        'iron'  =>  array('type' => 'float', 'null' => 0),
        'magnesium' =>  array('type' => 'float', 'null' => 0),
        'phosphorus' =>  array('type' => 'float', 'null' => 0),
        'potassium' =>  array('type' => 'float', 'null' => 0),
        'sodium' =>  array('type' => 'float', 'null' => 0),
        'zinc' =>  array('type' => 'float', 'null' => 0),
        'copper' =>  array('type' => 'float', 'null' => 0),
        'manganese' =>  array('type' => 'float', 'null' => 0),
        'selenium' =>  array('type' => 'float', 'null' => 0),
        'vit_c' =>  array('type' => 'float', 'null' => 0),
        'thiamin' =>  array('type' => 'float', 'null' => 0),
        'riboflavin' =>  array('type' => 'float', 'null' => 0),
        'niacin' =>  array('type' => 'float', 'null' => 0),
        'panto_acid' =>  array('type' => 'float', 'null' => 0),
        'vit_b6' =>  array('type' => 'float', 'null' => 0),
        'folate_tot' =>  array('type' => 'float', 'null' => 0),
        'folic_acid' =>  array('type' => 'float', 'null' => 0),
        'food_folate' =>  array('type' => 'float', 'null' => 0),
        'folate_dfe' =>  array('type' => 'float', 'null' => 0),
        'choline_tot' =>  array('type' => 'float', 'null' => 0),
        'vit_b12' =>  array('type' => 'float', 'null' => 0),
        'vit_a_iu' =>  array('type' => 'float', 'null' => 0),
        'vit_a_rea' =>  array('type' => 'float', 'null' => 0),
        'retinol' =>  array('type' => 'float', 'null' => 0),
        'alpha_carot' =>  array('type' => 'float', 'null' => 0),
        'beta_carot' =>  array('type' => 'float', 'null' => 0),
        'beta_crypt' =>  array('type' => 'float', 'null' => 0),
        'lycopene' =>  array('type' => 'float', 'null' => 0),
        'lut_plus_zea' =>  array('type' => 'float', 'null' => 0),
        'vit_e' =>  array('type' => 'float', 'null' => 0),
        'vit_d' =>  array('type' => 'float', 'null' => 0),
        'vit_d_iu' =>  array('type' => 'float', 'null' => 0),
        'vit_k' =>  array('type' => 'float', 'null' => 0),
        'fa_sat' =>  array('type' => 'float', 'null' => 0),
        'fa_mono' =>  array('type' => 'float', 'null' => 0),
        'fa_poly' =>  array('type' => 'float', 'null' => 0),
        'cholestrl' =>  array('type' => 'float', 'null' => 0),
        'gmwt_1' =>  array('type' => 'string', 'null' => 0),
        'gmwt_desc1' =>  array('type' => 'string', 'null' => 0),
        'gmwt_2' =>  array('type' => 'string', 'null' => 0),
        'gmwt_desc2' =>  array('type' => 'string', 'null' => 0),
        'refuse_pct' =>  array('type' => 'float', 'null' => 0)
        );

    /**
     * Simple method for calculating energy given by total of proteins, carbs and fats given
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
