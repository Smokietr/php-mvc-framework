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

        $array=(new users())->where("id=2")->update("type='mvc12'"); //update

        /*
         (new users())->get(); hesini çeker
        (new users())->where("id=2")->get();  id si 2 olan data
        (new users())->find(2);    id 2 olan data otomatik id atanmıştır
        (new users())->delete(); tüm dataları siler
        (new users())->where("id=2")->delete();  id 2olanı siler
         */

        $deger=123466;
        $ad="dılo abinin yeri";



return view("anasayfa",compact("array","deger","ad"));
    }



}
