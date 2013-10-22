<?php

namespace app\controllers;

use app\models\Users;
use lithium\security\Auth;
use lithium\storage\Session;


class UserController extends \lithium\action\Controller {

	 public $publicActions = array('login','add');

	 public function index() {

		if (!Auth::check('default')) {
			return $this->redirect('User::login');
		}

		$users = Users::all();
		return compact('users');
	}

	public function add() {
		$user = Users::create($this->request->data);

		if (($this->request->data) && $user->save()) {
			return $this->redirect('User::index');
		}

		return compact('user');
	}

	public function login() {
		if (! Auth::check('default')) {

			if ($this->request->data && Auth::check('default', $this->request)) {
				//var_dump('yeah');
				//die('yea');	
				//return $this->redirect('/');
				return $this->redirect('User::index');
			}
			// Handle failed authentication attempts
		}  else {
			return $this->redirect('User::index');
		}
	}

	public function logout() {
		Auth::clear('default');
		return $this->redirect('/');
	}

	public function profile() {
		
	}

}
?>
