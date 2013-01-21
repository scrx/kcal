<?php

namespace app\controllers;
use app\models\Servings;
use app\models\Meals;
use lithium\security\Auth;
use lithium\storage\Session;

class ServingController extends \lithium\action\Controller {

	public function index() {

		$servings = Servings::all();
		return compact('servings');

	}
	
	public function add() {

		$success = false;
		$meals = Meals::all();
		$meals_array = array();
		//$meals = compact($meals);
		//foreach($meals as $meal => $key){
		//	print_r($meal[$key]);
		//}
		//$mealz = array();
		foreach($meals as $meal){
			//print_r($meal->_id->{'$id'});
			//print_r($meal->name);
			$meals_array[$meal->_id->{'$id'}] = $meal->name;
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
		$serving = Servings::create($this->request->data);
		$success = $serving->save();
		return $this->redirect('Serving::index');	
	}
	return compact('success','meals_array');
}
	
	
	public function removeAll(){
		$rm = Meals::remove();
		return $this->redirect('Serving::index');	
	}
		
	
	  
}

?>