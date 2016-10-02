<?php

/**
 * Created by PhpStorm.
 * User: dilsi
 * Date: 30.9.2016
 * Time: 22:59
 */
//login işlemleri
echo "loginnnnnnn";
trait login
{

    public static function login($userdata=false){

session_start();

        if(is_array($userdata)){

            foreach ($userdata as $key=>$value){


                $_SESSION["user"][$key]=$value;

            }

        }

    }

}
