<?php
/**
 * File containing UserController class
 *
 * @category ControllersFile
 * @package  KcalApp
 * @author   Mateusz P <mattpiskorzatgmail.com>
 * @license  http://opensource.org/licenses/bsd-license.php The BSD License
 * @link     www.scx.grizon.pl/kcal
 */
namespace app\controllers;

use app\models\Users;
use lithium\security\Auth;
use lithium\storage\Session;
use app\models\UserHistoryDatas;
use li3_flash_message\extensions\storage\FlashMessage;

/**
 * Controller
 *
 * @category Controllers
 * @package  KcalApp
 * @author   Mateusz P <mattpiskorzatgmail.com> scrx
 * @license  http://opensource.org/licenses/bsd-license.php The BSD License
 * @link     www.scx.grizon.pl/kcal
 */
class UserController extends \lithium\action\Controller
{

     public $publicActions = array('login','register');

     /**
      * Index action
      *
      * @return [type] [description]
      */
    public function index()
    {
        if (!Auth::check('default')) {
            return $this->redirect('User::login');
        }

        //FlashMessage::write('Succes! New user was added.');
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

        return compact('users', 'total', 'limit', 'page');
    }

    /**
     * Action which allow us to save $this->request-> data with new user data
     *
     * @return [type] [description]
     */
    public function add()
    {
        $user = Users::create($this->request->data);

        if (($this->request->data) && $user->save()) {
            FlashMessage::write(array('User successfully created. You may now log in.','class'=>'alert-success'));
            return $this->redirect('User::index');
        }

        return compact('user');
    }

    /**
     * Action which allows user to register himself in system
     *
     * @return [type] [description]
     */
    public function register()
    {
        $user = Users::create($this->request->data);
        if (($this->request->data) && $user->save()) {
            FlashMessage::write(array('User successfully created. You may now log in.','class'=>'alert-success'));
            return $this->redirect('User::login');
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

                FlashMessage::write(array('Welcome','class'=>'alert-success'));
                return $this->redirect('User::profile');
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
        FlashMessage::write(array('You have been Logged out.','class'=>'alert-info'));
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
        if (!isset($session_data['default']['name'])) {
            $session_data['default']['name'] = 'Fix Name';
        }
        if (!isset($session_data['default']['surname'])) {
            $session_data['default']['surname'] = 'Fix Surname';
        }

        $user_id = $session_data['default']['_id'];

        $user_data = UserHistoryDatas::find('first', array('conditions'=> array('user_id'=>$user_id)));


        return compact('user_data', 'session_data');

    }
}
