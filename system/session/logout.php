<?php

/**
 * Created by PhpStorm.
 * User: dilsi
 * Date: 30.9.2016
 * Time: 22:58
 */
trait logout
{
public function  logout(){


    session_start();
    session_destroy();
}
}