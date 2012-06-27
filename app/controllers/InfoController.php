<?php

namespace app\controllers;
use lithium\security\Auth;
use lithium\storage\Session;

class InfoController extends \lithium\action\Controller {

	public function index() {
		
		
		
	return 0;
	}
	
	
	
	

	public function to_string() {
		return "Hello World 123";
	}

	public function to_json() {
		return $this->render(array('json' => 'Hello World 111'));
	}
}

?>
