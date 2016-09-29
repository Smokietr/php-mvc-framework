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


    //


    if(!function_exists('view')) {

        function view($param,$vars=false)
        {
            restore_include_path();
            $vars ?  extract($vars) :'';
            include_once "app/views/$param.php";


        }


        }


}



    public static function get($url,$callback){



     if(self::$url==trim($url,"/")){

         $kontrol=gettype($callback);
         if($kontrol=="object"){


             call_user_func($callback);
         }
         else
         {

             $controlname=explode("@",$callback)[0];


             $methodname=explode("@",$callback)[1];
           $b=new $controlname();
          $b->$methodname();

         }

     }


}
}

