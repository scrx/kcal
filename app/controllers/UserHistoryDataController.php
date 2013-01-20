<?php

namespace app\controllers;
use app\models\UserHistoryDatas;
use lithium\security\Auth;
use lithium\storage\Session;

class UserHistoryDataController extends \lithium\action\Controller {


	
	public function index() {
		$userhistorydatas = UserHistoryDatas::all();
		return compact('userhistorydatas');
		
		
	}
	
	public function add() {
    	$success = false;

    if ($this->request->data) {
        $user_data = UserHistoryDatas::create($this->request->data);
        $success = $user_data->save();
		return $this->redirect('UserHistoryData::index');	
    }
    return compact('success');
}
	

	

	public function test() {	

		//if not connected redirect to /index/index
		if(!Auth::check('member', $this->request)) {
			return $this->redirect('User::index');	
		}
	}	
	
}
?>
