<?php


Router::get("home/dert",function(){

    $rakam=123456;
    return view("derbi",compact("rakam"));
});



Router::get("/ders","ders@fizik");

Router::post("as",function (){


    print_r($_POST);
});

Router::get("as",function(){
    echo '<form method="post" action="as">
         <input type="text" name="ad"/>
          <input type="submit" value="gonder">

';
});


