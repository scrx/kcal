<?php
/**
 * File containing ServingController class
 *
 * @category ControllersFile
 * @package  KcalApp
 * @author   Mateusz P <mattpiskorzatgmail.com>
 * @license  http://opensource.org/licenses/bsd-license.php The BSD License
 * @link     www.scx.grizon.pl/kcal
 */

namespace app\controllers;

use app\models\Servings;
use app\models\Foods;
use lithium\storage\Session;

/**
 * ServingController
 *
 * @category Controllers
 * @package  KcalApp
 * @author   Mateusz P <mattpiskorzatgmail.com>
 * @license  http://opensource.org/licenses/bsd-license.php The BSD License
 * @link     www.scx.grizon.pl/kcal
 */
class ServingController extends \lithium\action\Controller
{
    /**
     * Displaying all servings
     *
     * @return [type] [description]
     */
    public function index()
    {
        $user_id = Session::read()['default']['_id'];

        $calculatedServings = Servings::calculatedServings($user_id);
        list($servings_by_date,$totals) = $calculatedServings;

        return compact('servings_by_date','totals');

    }

    /**
     * Action handling adding serving with embeded food
     *
     * @return [type] [description]
     */
    public function add()
    {
        $success = false;
        $meals = Foods::find('list',array('fields'=>'name'));
 
        $meals_array = $meals;
  
        if ($this->request->data) {
            $serving_data = $this->request->data;

            $food_data = Foods::find('first', array('conditions'=>array('_id'=>$serving_data['food_id'])));
            
            //Embeding food data into serving
            $serving_data['food'] = $food_data;

            $session_data = Session::read();        
            $serving_data['user_id'] = $session_data['default']['_id'];   
            $serving_data['modified'] = $serving_data['created'] = date('H:i:s d-m-Y',time());

            $serving = Servings::create($serving_data);
            $success = $serving->save();

            return $this->redirect('Serving::index');
        }

        return compact('success', 'meals_array');
    }

    /**
     * Simple method to remove selected serving
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function remove($id)
    {
        if(isset($id)) {
            $success = Servings::remove(array('_id'=>$id));
        }
        

        $this->redirect("Serving::index");        
    }

    /**
     * Method to remove all given servings
     *
     * @return [type] [description]
     */
    public function removeAll()
    {
        $rm = Foods::remove();

        return $this->redirect('Serving::index');
    }

    /**
     * Future Action for genereting ajax list of servings for the user
     * @return [type] [description]
     */
    public function getServings()
    {

    }
}
