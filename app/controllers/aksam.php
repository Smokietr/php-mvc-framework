<?php

/**
 * Created by PhpStorm.
 * User: dilsi
 * Date: 29.9.2016
 * Time: 01:54
 */
class aksam extends MainController
{


    public function sabah(){

$rakam=12;
        return view("derbi",compact("rakam"));
    }
}