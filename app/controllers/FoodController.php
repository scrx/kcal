<?php
/**
 * File with Food class
 *
 * @category FileControllers
 * @package  KcalApp
 * @author   Mateusz P <mattpiskorzatgmail.com>, Filip K <filipkuligatgmail.com>
 * @license  www.notavailable.com public
 * @link     www.scx.grizon.pl/kcal
 */

namespace app\controllers;
use app\models\Foods;

/**
 * Controller
 *
 * @category Controllers
 * @package  KcalApp
 * @author   Mateusz P <mattpiskorzatgmail.com>
 * @license  www.notavailable.com public
 * @link     www.scx.grizon.pl/kcal
 */
class FoodController extends \lithium\action\Controller
{
    /**
     * List of available foods in application
     *
     * @return [type] [description]
     */
    public function index()
    {
        $total = Foods::count();
        $page = 1;

        foreach ($this->request->params['args'] as $arg) {
            list($name,$value) = explode(":", $arg);
            if ($name == 'page') {
                $page = $value;
            }
        }

        $limit = 20;
        $order = array('name' => 'ASC');
        $meals = Foods::all(compact('order', 'limit', 'page'));

        return compact('meals', 'total', 'page', 'limit');

    }
    /**
     * List of available foods in application
     *
     * @return [type] [description]
     */
    public function add()
    {
        if ($this->request->data) {
            $food = Foods::create($this->request->data);
            $success = $food->save();

            return $this->redirect('Food::index');
        }
    }
    /**
     * List of available foods in application
     *
     * @return [type] [description]
     */
    public function import()
    {

        $meals = Foods::count();
        if ($meals > 640) {
            $this->redirect("Food::index");
        }
        $products = file_get_contents("data/products.txt");
        $products = explode("\n", $products);
        foreach ($products as $product) {
            list(
                $product_info['name'],
                $product_info['prot'],
                $product_info['fat'],
                $product_info['carb'],
                $product_info['kcal'],
                $product_info['sat_fat'],
                $product_info['unsat_fat'])
                    = explode("\t", $product);
             $product_info['created'] = time();
             $product_info['modified'] = time();
             $food = Foods::create($product_info);
             $food->save();
        }

        $this->redirect("Food::index");
    }
    /**
     * [removeAll description]
     *
     * @return [type] [description]
     */
    public function removeAll()
    {
        $success = Foods::remove();

        $this->redirect("Food::index");
    }
    /**
     * Removing single food by given food id
     *
     * @param mongoObjectId $id food id
     *
     * @return [type] [description]
     */
    public function remove($id)
    {
        $success = Foods::remove(array('_id'=>$id));

        $this->redirect("Food::index");
    }
    /**
     * Removing single food by given food id
     *
     * @param mongoObjectId $id food id
     *
     * @return [type] [description]
     */
    public function edit($id)
    {
        if ($this->request->data) {

            //$myPost = MyPosts::find($this->request->args[0]);

            //$food = Foods::find(array('_id'=>$this->request->data['_id']));

            $this->request->data['modified']=time();
            $success = $food->save($this->request->data);

            return $this->redirect('Food::index');
        }

        $food_item = Foods::find('first', array('conditions'=> array('_id'=>$id)));

        return compact('food_item');

    }
}
