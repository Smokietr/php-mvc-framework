<?php


Router::get("form/:id",function(){

   return view("form");
});



Router::get("/ders","ders@fizik");

Router::post("as",function (){


    print_r($_POST);
});

Router::get("/",function(){



    return view("welcome");
});


Router::get("/c","bb@aa");





