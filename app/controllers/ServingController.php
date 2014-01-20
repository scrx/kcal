<?php
/**
 * File containing ServingController class
 *
 * @category FileControllers
 * @package  KcalApp
 * @author   Mateusz P <mattpiskorzatgmail.com>
 * @license  www.notavailable.com public
 * @link     www.scx.grizon.pl/kcal
 */

namespace app\controllers;

use app\models\Servings;
use app\models\Foods;

/**
 * ServingController
 *
 * @category Controllers
 * @package  KcalApp
 * @author   Mateusz P <mattpiskorzatgmail.com>
 * @license  www.notavailable.com public
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
        $servings = Servings::all();

        return compact('servings');

    }

    /**
     * [add description]
     *
     * @return [type] [description]
     */
    public function add()
    {
        $success = false;
        $meals = Foods::all();
        $meals_array = array();

        foreach ($meals as $meal) {
            $meals_array[$meal->_id->{'$id'}] = $meal->name;
        }
        if ($this->request->data) {
            $serving = Servings::create($this->request->data);
            $success = $serving->save();

            return $this->redirect('Serving::index');
        }

        return compact('success', 'meals_array');
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
}
