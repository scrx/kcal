<?php

namespace app\controllers;
use app\models\Meals;
use app\models\Foods;
use lithium\security\Auth;
use lithium\storage\Session;

class MealController extends \lithium\action\Controller {

	public function index() {

		$meals = Meals::all();
		return compact('meals');

	}
	
	public function add() {

		$success = false;
		$foods = Foods::all();
		$foods_array = array();
	
		foreach($foods as $food){
		
			$foods_array[$food->_id->{'$id'}] = $food->name;
	
		}

		

		
	if ($this->request->data) {
		$meal = Meals::create($this->request->data);
		$success = $meal->save();
		return $this->redirect('Meal::index');	
	}
	return compact('success','foods_array');
}
	
	
	public function removeAll(){
		$rm = Foods::remove();
		return $this->redirect('Food::index');	
	}
		
	
	  
}

?>