<?php

/**
 * Created by PhpStorm.
 * User: dilsi
 * Date: 1.10.2016
 * Time: 20:50
 */


class auth
{



 public function authlogin($userdata=false){

     session_start();

     if(is_array($userdata)){

         foreach ($userdata as $key=>$value){


             $_SESSION["user"][$key]=$value;

         }

     }
 }



 public function authlogout(){

     session_start();
     session_destroy();


 }

}
