<?php

class engine{
private static $file;
    public static function template($file,$vars=false){


        self::$file=file_get_contents("app/views/$file.php");

        extract($vars);

function doTemplate($match){

return  $GLOBALS[$match[1]];

}
     echo preg_replace_callback("#{{(.*)}}#isU",'doTemplate',self::$file);
    }

}