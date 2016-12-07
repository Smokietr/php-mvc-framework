<?php



class session{


    function __construct(){
     
 
     if(session_status()!=2){

     	@session_start();
     }

    
    
    }



    public function set(array $array){

 foreach($array as $key=>$val){

$_SESSION[$key]=$val;

}

    }


    public function get($key){

return $_SESSION[$key];
    }



    public function destroy(){


        return session_destroy();
    }
}
