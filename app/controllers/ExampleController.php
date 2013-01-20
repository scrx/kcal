<?php
namespace app\controllers;
use app\models\Users;
use lithium\security\Auth;
use lithium\storage\Session;

class ExampleController extends \lithium\action\Controller {

	public function test() {	

		//if not connected redirect to /index/index
		if(Auth::check('default', $this->request)) {

			// ok, authenticate

			Auth::set('default','Siema zolciu');

			//return $this->redirect('Index::index');	
		} else {
			echo 'nie ma auth';
		}

	}
}
?>