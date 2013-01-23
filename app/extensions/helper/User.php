<?php
namespace app\extensions\helper;
use lithium\security\Auth;

class User extends \lithium\template\helper {
        
	public function connected() {
		
		return Auth::check('member', $this->_context->_config['request']);
	}
	
	
  // public function fullName() {

  //      $user = self::user();

   //     return $user["first_name"] . " " . $user["last_name"];
    //}
	//
		
	//public function checkPassword() {
	//	return Password::check()
	//}
}

?>