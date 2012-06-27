<?php

namespace app\controllers;

class HelloWorldController extends \lithium\action\Controller {

	public function index() {
		
		return $this->render(array('layout' => false));
	}

	public function to_string() {
		return "Hello World 123";
	}

	public function to_json() {
		return $this->render(array('json' => 'Hello World 111'));
	}
}

?>
