<?php
namespace app\controllers;
use app\models\Users;
use lithium\security\Auth;
use lithium\storage\Session;

class ExampleController extends \lithium\action\Controller {

	public function test() {	

		//if not connected redirect to /index/index
		if(!Auth::check('member', $this->request)) {
			return $this->redirect('Index::index');	
		}
	}
}
?>