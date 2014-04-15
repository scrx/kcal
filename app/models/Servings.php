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
		'food'		=> array('type'=> 'object'), // Embeded food collection
		'weight'	=> array('type' => 'numeric'),	
		'cost'		=>	array('type' => 'numeric', 'null' => false),
		'date_when'	=>	array('type' => 'string', 'null' => false),
		'description'	=>	array('type' => 'string', 'null' => false),
		'modified'	=>	array('type' => 'string', 'null' => false),
		'created'	=>	array('type' => 'string', 'null' => false),
	);

	protected $_meta = array(
		'key' => '_id',
		'locked' => true
	);

	/**
	 * Function for generating calculated servings data
	 * @param  [type] $user_id self describing
	 * @return array        containing servings in formated form and with extra calculated values
	 */
	public function calculatedServings($user_id){

        $servings = Servings::find('all',array('conditions'=>array('user_id'=>$user_id),'order' => array('date_when' => 'DES'),'limit'=>100));

        $servings_by_date = array();
        $total_kcal = array();

        if(count($servings)) {
            $food_ids = array();
            foreach($servings as $serving) {

                $serving['calculated_kcal'] = $serving->food->kcal * $serving->weight/100;
                $serving['calculated_protein'] = $serving->food->protein * $serving->weight/100;
                $serving['calculated_fats'] = $serving->food->lipid_total * $serving->weight/100;
                $serving['calculated_carbs'] = $serving->food->carbs * $serving->weight/100;
                          
                $servings_by_date[$serving->date_when][] = $serving;

                if(isset($totals[$serving->date_when]['kcal'])) {
                    $totals[$serving->date_when]['kcal'] += $serving['calculated_kcal'];
                } else {
                    $totals[$serving->date_when]['kcal'] = $serving['calculated_kcal'];
                }

                if(isset($totals[$serving->date_when]['protein'])) {
                    $totals[$serving->date_when]['protein'] += $serving['calculated_protein'];
                } else {
                    $totals[$serving->date_when]['protein'] = $serving['calculated_protein'];
                }
                if(isset($totals[$serving->date_when]['fats'])) {
                    $totals[$serving->date_when]['fats'] += $serving['calculated_fats'];
                } else {
                    $totals[$serving->date_when]['fats'] = $serving['calculated_fats'];
                }
                if(isset($totals[$serving->date_when]['carbs'])) {
                    $totals[$serving->date_when]['carbs'] += $serving['calculated_carbs'];
                } else {
                    $totals[$serving->date_when]['carbs'] = $serving['calculated_carbs'];
                }     
                if(isset($totals[$serving->date_when]['cost'])) {
                    $totals[$serving->date_when]['cost'] += $serving->cost;
                } else {
                    $totals[$serving->date_when]['cost'] = $serving->cost;
                }                              
            }                  
        }	
        return array($servings_by_date,$totals);
	}
}

?>
