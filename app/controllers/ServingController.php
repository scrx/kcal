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
     * [index description]
     *
     * @return [type] [description]
     */
    public function index()
    {

        $session_data = Session::read();
        $user_id = $session_data['default']['_id'];

        $servings = Servings::find('all',array('conditions'=>array('user_id'=>$user_id)));

        $foods = array();
        if(count($servings)){
            $food_ids = array();
            foreach($servings as $serving){
                $food_ids[] = $serving->food_id;
            }
            $foods = Foods::find('all', array('conditions'=>array('_id'=>$food_ids)));                     
        }

        return compact('servings','foods');

    }

    /**
     * [add description]
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

            $session_data = Session::read();        
            $serving_data['user_id'] = $session_data['default']['_id'];   
            $serving_data['modified'] = $serving_data['created'] = date('H:i:s d-m-Y',time());

            //$this->request->data->modified -> $this->request->data->created= time();

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
