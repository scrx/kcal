<?php

namespace app\extensions\helper;
use lithium\security\Auth;

class Login extends \lithium\template\Helper {

    public function user() {

        $user = Auth::check('default');

        return $user;
    }

    public function fullName() {

        $user = self::user();

        return $user["username"];
    }

}

?>