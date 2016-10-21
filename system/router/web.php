<?php


Router::get("home/dert",function(){

    $rakam=123456;
    return view("derbi",compact("rakam"));
});



Router::get("/ders","ders@fizik");

Router::post("as",function (){


    print_r($_POST);
});

Router::get("/",function(){
    return view("welcome");
});




