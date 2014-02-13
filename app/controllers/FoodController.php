<?php
/**
 * File with Food class
 *
 * @category ControllersFile
 * @package  KcalApp
 * @author   Mateusz P <mattpiskorzatgmail.com>, Filip K <filipkuligatgmail.com>
 * @license  http://opensource.org/licenses/bsd-license.php The BSD License
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
 * @license  http://opensource.org/licenses/bsd-license.php The BSD License
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

        $food = Foods::create();
        if ($this->request->data && $food->save($this->request->data)) {     
            return $this->redirect('Food::index');      
        }
        $errors = $food->errors();

        return compact('errors');

    }
    /**
     * List of available foods in application
     *
     * @return [type] [description]
     */
    public function import()
    {

        $meals = Foods::count();
        if ($meals > 1) {
            //To prevent more then 1 import
            $this->redirect("Food::index", array('exit'=>true));
        }
        $products_file = file_get_contents("data/nutrient_data.csv");
        $products = explode("\n", $products_file);
       
        foreach ($products as $product) {
            list(
                $product_info['ndb_no'],
                $product_info['name'],
                $product_info['water'],
                $product_info['kcal' ],
                $product_info['protein' ],
                $product_info['lipid_total'],
                $product_info['ash'],
                $product_info['carbs'],
                $product_info['fiber'],
                $product_info['sugar_total'],
                $product_info['calcium'],
                $product_info['iron'],
                $product_info['magnesium'],
                $product_info['phosphorus'],
                $product_info['potassium'],
                $product_info['sodium'],
                $product_info['zinc'],
                $product_info['copper'],
                $product_info['manganese'],
                $product_info['selenium'],
                $product_info['vit_c'],
                $product_info['thiamin'],
                $product_info['riboflavin'],
                $product_info['niacin'],
                $product_info['panto_acid'],
                $product_info['vit_b6'],
                $product_info['folate_tot'],
                $product_info['folic_acid'],
                $product_info['food_folate'],
                $product_info['folate_dfe'],
                $product_info['choline_tot'],
                $product_info['vit_b12'],
                $product_info['vit_a_iu'],
                $product_info['vit_a_rae'],
                $product_info['retinol'],
                $product_info['alpha_carot'],
                $product_info['beta_carot'],
                $product_info['beta_crypt'],
                $product_info['lycopene'],
                $product_info['lut_plus_zea'],
                $product_info['vit_e'],
                $product_info['vit_d'],
                $product_info['vit_d_iu'],
                $product_info['vit_k'],
                $product_info['fa_sat'],
                $product_info['fa_mono'],
                $product_info['fa_poly'],
                $product_info['cholestrl'],
                $product_info['gmwt_1'],
                $product_info['gmwt_desc1'],
                $product_info['gmwt_2'],
                $product_info['gmwt_desc2'],
                $product_info['refuse_pct'])
                    = explode("\t", $product);

            $product_info['modified'] = $product_info['created'] =  time();
            $food = Foods::create($product_info);

            $food->save();
  
        }
        $this->redirect("Food::index", array('exit'=>true));
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
            
            $food = Foods::find(array('_id'=>$this->request->data['_id']));

            $this->request->data['modified']=time();
            $success = $food->save($this->request->data);

            return $this->redirect('Food::index');
        }

        $food = Foods::find('first', array('conditions'=> array('_id'=>$id)));

        return compact('food');

    }
    public function view($id)
    {
        if (is_null($id)) {
            $this->redirect('Food:index');
        }

        $food = Foods::find('first', array('conditions'=> array('_id'=>$id)));

        return compact('food');
    }
}
