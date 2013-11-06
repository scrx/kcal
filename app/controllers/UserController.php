<?php
/**
 * File containing UserController class
 *
 * @category FileControllers
 * @package  KcalApp
 * @author   Mateusz P <mattpiskorzatgmail.com>
 * @license  www.notavailable.com public
 * @link     www.scx.grizon.pl/kcal
 */
namespace app\controllers;

use app\models\Users;
use lithium\security\Auth;
use lithium\storage\Session;
use app\models\UserHistoryDatas;

/**
 * Controller
 *
 * @category Controllers
 * @package  KcalApp
 * @author   Mateusz P <mattpiskorzatgmail.com>
 * @license  www.notavailable.com public
 * @link     www.scx.grizon.pl/kcal
 */
class UserController extends \lithium\action\Controller
{

     public $publicActions = array('login');
     /**
      * index action
      *
      * @return [type] [description]
      */
    public function index()
    {

        if (!Auth::check('default')) {
            return $this->redirect('User::login');
        }

        $total = Users::count();
        $page = 1;

        foreach ($this->request->params['args'] as $arg) {
            list($name,$value) = explode(":", $arg);
            if ($name == 'page') {
                $page = $value;
            }
        }

        $limit = 20;
        $order = array('name' => 'ASC');
        $users = Users::all(compact('order', 'limit', 'page'));

        return compact('users','total', 'limit', 'page');
    }

    /**
     * Action which allows us to save $this->request-> data with new user data
     *
     * @return [type] [description]
     */
    public function add()
    {
        $user = Users::create($this->request->data);

        if (($this->request->data) && $user->save()) {
            return $this->redirect('User::index');
        }

        return compact('user');
    }
    /**
     * Action login
     *
     * @return [type] [description]
     */
    public function login()
    {
        if (! Auth::check('default')) {

            if ($this->request->data && Auth::check('default', $this->request)) {
                //var_dump('yeah');
                //die('yea');
                //return $this->redirect('/');
                return $this->redirect('User::index');
            }
            // Handle failed authentication attempts
        } else {
            return $this->redirect('User::index');
        }
    }
    /**
     * Action logout self explemantory
     *
     * @return [type] [description]
     */
    public function logout()
    {
        Auth::clear('default');

        return $this->redirect('/');
    }
    /**
     * Action for user profile page
     *
     * @return [type] [description]
     */
    public function profile()
    {

        $session_data = Session::read();
        if(!isset($session_data['default']['name']))
            $session_data['default']['name'] = 'Popraw imię';
        if(!isset($session_data['default']['surname']))
            $session_data['default']['surname'] = 'Popraw nazwisko';
        //print_r($session_data);
        //$user_details = Users::find('first');
        //foreach ($user_details as $user_det) {
        //      print_r($user_det);
        //}
        //
        $id_uzytkownika = $session_data['default']['_id'];

        //var_dump($id_uzytkownika);

        $user_data = UserHistoryDatas::find('first', array('conditions'=> array('user_id'=>$id_uzytkownika)));

        //var_dump($user_data);
        //
        return compact('user_data', 'session_data');

    }

}
