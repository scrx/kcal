<?php

namespace app\controllers;
use app\models\Servings;
use app\models\Foods;
use lithium\security\Auth;
use lithium\storage\Session;

class FoodController extends \lithium\action\Controller {

	public function index() {

		$meals = Foods::all();
		return compact('meals');

	}
	public function add() {
		
		
		if ($this->request->data) {
			$food = Foods::create($this->request->data);
			$success = $food->save();
			return $this->redirect('Food::index');	
		}
	}
	
	
	
}
	