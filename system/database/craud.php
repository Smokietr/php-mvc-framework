<?php

/**
 * Created by PhpStorm.
 * User: dilsi
 * Date: 17.10.2016
 * Time: 09:15
 */



trait craud
{

private $result;
    private $host="localhost";
    private $dbname="deneme";
    private $user="root";
    private $password="";
    protected $connect;

    function __construct(){

        $this->connect=new PDO("mysql:host=".$this->host.";dbname=".$this->dbname.";charset=utf8",$this->user,$this->password);

    }


    public function find($id){

        $this->result=$this->connect->prepare("select * from ".$this->table." where id=:id");
        $this->result->bindParam("id",$id);
        $this->result->execute();
        $this->result=$this->result->fetch(PDO::FETCH_ASSOC);

       return $this->result;



    }






}