<?php

/**
 * Created by PhpStorm.
 * User: kutuphane
 * Date: 20.12.2016
 * Time: 08:45
 */
class cartClass
{


    private $cartArray=array(),$serialize,$unserialize;


    public function add($product){
        if(!isset($_COOKIE["cart_addToCart"])){


           setCookie("cart_addToCart",serialize([]),time()+3600);
        }


$this->cartArray=unserialize($_COOKIE["cart_addToCart"]);
        if(in_array($product,$this->cartArray)){


         return  false;
        }
array_push($this->cartArray,$product);

        return   setCookie("cart_addToCart",serialize($this->cartArray),time()+3600);



    }


    public  function get($getProduct=false){

return  unserialize($_COOKIE["cart_addToCart"]);
    }




    public function makeEmpty(){

setcookie("cart_addToCart",serialize([1]),time()-3660);

    }



}