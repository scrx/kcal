<?php
namespace app\extensions\helper;
use lithium\security\Auth;

class User extends \lithium\template\helper {
        
	public function connected() {
		
		return Auth::check('member', $this->_context->_config['request']);
	}
	
	//public function checkPassword() {
	//	return Password::check()
	//}
}

?>