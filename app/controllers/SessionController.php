<?php

namespace app\controllers;
use lithium\security\Auth;
use lithium\storage\Session;

class SessionController extends \lithium\action\Controller {

	public function add() {	
		if($this->request->data) {
			print_r(Auth::check('default',$this->request));
			if(Auth::check('default',$this->request)) {
				$this->redirect('/');
			} else {
				echo 'brak auth';
			}
			//print_r($this->data);
			//Session::write('user',$this->request->username);
			//Session::write('isAdmin','1');
		} else {
			echo 'Brak daty';
		}
	}
	
}

?>