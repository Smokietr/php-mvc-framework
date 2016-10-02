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
protected static $url;
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


}

//get start

    public static function get($url,$callback){



        if ($_SERVER['REQUEST_METHOD'] === 'GET') {


            if (self::$url == trim($url, "/")) {

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

        }

}

//get end



//post start


public static function post($url,$callback){

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (self::$url == trim($url, "/")) {

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

    }
}

//post end

//put start
    public static function put($url,$callback){

        if ($_SERVER['REQUEST_METHOD'] === 'PUT') {

            if (self::$url == trim($url, "/")) {

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

        }
    }

//put end

//delete start

    public static function delete($url,$callback){

        if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {

            if (self::$url == trim($url, "/")) {

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

        }
    }

//delete end


//any start

    public static function any($url,$callback){



        if (self::$url == trim($url, "/")) {

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

        }

//any end
}

