<?php
/**
 * File containing UserHistoryDataController class
 *
 * @category FileControllers
 * @package  KcalApp
 * @author   Mateusz P <mattpiskorzatgmail.com>
 * @license  www.notavailable.com public
 * @link     www.scx.grizon.pl/kcal
 */
namespace app\controllers;
use app\models\UserHistoryDatas;
use lithium\security\Auth;
use lithium\storage\Session;
/**
 * Controller
 *
 * @category Controllers
 * @package  KcalApp
 * @author   Mateusz P <mattpiskorzatgmail.com>
 * @license  www.notavailable.com public
 * @link     www.scx.grizon.pl/kcal
 */
class UserHistoryDataController extends \lithium\action\Controller
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
       
        $userhistorydatas = UserHistoryDatas::find('all', array('conditions'=> array('user_id'=>$user_id)));
        

        return compact('userhistorydatas');
    }
    /**
     * [add description]
     *
     * @return aaaa
     */
    public function add()
    {
        $success = false;

        if ($this->request->data) {

            $session_data = Session::read();
            $user_id = $session_data['default']['_id'];

            $user_data = UserHistoryDatas::create($this->request->data);
            $user_data->user_id = $user_id;
            $success = $user_data->save();

            return $this->redirect('UserHistoryData::index');
        }

        return compact('success');
    }
    /**
     * [test description]
     *
     * @return [type] [description]
     */
    public function test()
    {
        //if not connected redirect to /index/index
        if (!Auth::check('member', $this->request)) {
            return $this->redirect('User::index');
        }
    }

}
