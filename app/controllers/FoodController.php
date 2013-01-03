<?php

namespace app\controllers;
use app\models\Meals;
use lithium\security\Auth;
use lithium\storage\Session;

class MealController extends \lithium\action\Controller {
	
	  
    public function index() {
    
    	$meals = Meals::all();
		

		
		//var_dump($meals)
    	return compact('meals');
    }
    
	public function add() {
    	$success = false;

    if ($this->request->data) {
        $meal = Meals::create($this->request->data);
        $success = $meal->save();
		return $this->redirect('Meal::index');	
    }
    return compact('success');
}
	
	
	public function removeAll(){
		$rm = Meals::remove();
		return $this->redirect('Meal::index');	
	}
		
	
	  
}

?>