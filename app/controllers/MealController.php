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
		//$meals = compact($meals);
		//foreach($meals as $meal => $key){
		//	print_r($meal[$key]);
		//}
		//$mealz = array();
		foreach($foods as $food){
			//print_r($meal->_id->{'$id'});
			//print_r($meal->name);
			$foods_array[$food->_id->{'$id'}] = $food->name;
			//$id_jakies = $meal->{'$id'};
			//print_r($id_jakies);
			//$mealz[$meal->_id] = 'baba';
		}
		//print_r($meals_array);
		//die();
		//foreach($mealz as $mil){
		//	print_r($mil);
		//}
		

		
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