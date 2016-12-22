<?php

/**
 * Created by PhpStorm.
 * User: dilsi
 * Date: 27.9.2016
 * Time: 21:35
 */

class ders extends MainController
{



    public function fizik($param1,$param2){

        $array=(new users())->where("id=3")->get();


$ses=(new session)->set(["ad"=>"dılo abinin yeri"]);

        /*
         (new users())->get(); hesini çeker
        (new users())->where("id=2")->get();  id si 2 olan data
        (new users())->find(2);    id 2 olan data otomatik id atanmıştır
        (new users())->delete(); tüm dataları siler
        (new users())->where("id=2")->delete();  id 2olanı siler
         */

       $param2;  //urlde ki 2. parametreyi alır değişken ismi önemli değildir.url de kaç parametre varsa o kadar parametre alabilir bu fonskiyon
         
$deneme=63+12;
        $deger=123466;
        $ad="dılo abinin yeri";
$data=(new uyeler())->get();
    return view("anasayfa",compact("deger","ad","array","deneme","data","ses"));


    }



}
