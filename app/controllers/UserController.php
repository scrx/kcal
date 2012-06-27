<?php

namespace app\controllers;
use app\models\Users;
use lithium\security\Auth;
use lithium\storage\Session;

class UserController extends \lithium\action\Controller {

	public function signup() {	
		$user = Users::create();
		if(($this->request->data) && $user->save($this->request->data)) {	
			$this->redirect('User::index');	
		}
		return compact(array('user'));
	}
	
	public function index() {
		$users = Users::all();
		return compact('users');
	}
	
	public function login() {
			
		if(Auth::check('member', $this->request)) {
			
			return $this->redirect('User::index');	
		}
		else {
			//pr($this->request);
			//print_r($this->request->data);
			//die();
		}
	}
	
	public function logout() {	
		Auth::clear('member');
		return $this->redirect('Index::index');
	}	
	public function test() {	

		//if not connected redirect to /index/index
		if(!Auth::check('member', $this->request)) {
			return $this->redirect('User::index');	
		}
	}	
	
}
?>
