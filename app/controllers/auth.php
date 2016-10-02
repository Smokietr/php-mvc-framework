<?php

/**
 * Created by PhpStorm.
 * User: dilsi
 * Date: 1.10.2016
 * Time: 20:50
 */
include_once "system/session/login.php";
include_once "system/session/logout.php";


class auth
{

    use login,logout;

 public function authlogin(){

login::login();
 }



 public function authlogout(){


logout::logout();

 }

}