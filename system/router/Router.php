<?php

/**
 * Created by PhpStorm.
 * User: dilsi
 * Date: 25.9.2016
 * Time: 15:07
 */


include_once "system/autoload.php";



class Router
{

    private static $sayi=0;

protected static $url;
public static $dynUrl=[];
public function __construct($url){
self::$url=trim($url,"/");


    if(!function_exists('view')) {

        function view($param,$vars=false)
        {
            restore_include_path();
            $vars ?  extract($vars) :'';
            include_once "app/views/$param.php";


        }


        }

        function  say($a){

            echo    "hello ".$a;
        }

}

//get start

protected static  function mainRouter($url,$callback){
    self::$sayi++;
    $kontrol = gettype($callback);
    if ($kontrol == "object") {


        call_user_func($callback);
    } else {

        $controlname = explode("@", $callback)[0];


        $methodname = explode("@", $callback)[1];

        if(class_exists($controlname)){
            $b = new $controlname();
        }

        if(is_callable($b->$methodname())){

            $b->$methodname();

        }


    }
}


    public static function get($url,$callback){



       if ($_SERVER['REQUEST_METHOD'] === 'GET') {


                if(count(array_filter(explode("/",self::$url))==count(array_filter(explode("/",$url))))) {


     if(explode("/",trim(self::$url,"/"))[0]==explode("/",trim($url,"/"))[0]){

      self::$dynUrl=explode("/",self::$url);


         Router::mainRouter($url, $callback);

     }








      }

        }




}

//get end



//post start


public static function post($url,$callback){

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(count(array_filter(explode("/",self::$url))==count(array_filter(explode("/",$url))))) {


            if(explode("/",trim(self::$url,"/"))[0]==explode("/",trim($url,"/"))[0]){

                self::$dynUrl=explode("/",self::$url);


                Router::mainRouter($url, $callback);

            }








        }
    }

}

//post end

//put start
    public static function put($url,$callback){

        if ($_SERVER['REQUEST_METHOD'] === 'PUT') {

            if(count(array_filter(explode("/",self::$url))==count(array_filter(explode("/",$url))))) {


                if(explode("/",trim(self::$url,"/"))[0]==explode("/",trim($url,"/"))[0]){

                    self::$dynUrl=explode("/",self::$url);


                    Router::mainRouter($url, $callback);

                }








            }

        }
    }

//put end

//delete start

    public static function delete($url,$callback){

        if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {

            if(count(array_filter(explode("/",self::$url))==count(array_filter(explode("/",$url))))) {


                if(explode("/",trim(self::$url,"/"))[0]==explode("/",trim($url,"/"))[0]){

                    self::$dynUrl=explode("/",self::$url);


                    Router::mainRouter($url, $callback);

                }








            }

        }
    }

//delete end


//any start

    public static function any($url,$callback){



        if(count(array_filter(explode("/",self::$url))==count(array_filter(explode("/",$url))))) {


            if(explode("/",trim(self::$url,"/"))[0]==explode("/",trim($url,"/"))[0]){

                self::$dynUrl=explode("/",self::$url);


                Router::mainRouter($url, $callback);

            }








        }

        }

//any end


public static function submit(){

  if(self::$sayi==0){

     return view("404");
  }

}

function __destruct()
{



}
}

