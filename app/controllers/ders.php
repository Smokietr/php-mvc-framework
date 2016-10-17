<?php

/**
 * Created by PhpStorm.
 * User: dilsi
 * Date: 27.9.2016
 * Time: 21:35
 */

class ders extends MainController
{



    public function fizik(){

        $array=(new users())->find(3);
        $deger=123466;
        $ad="dılo abinin yeri";



return view("anasayfa",compact("array","deger","ad"));
    }



}