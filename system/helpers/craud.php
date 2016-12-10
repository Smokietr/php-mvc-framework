<?php

/**
 * Created by PhpStorm.
 * User: dilsi
 * Date: 17.10.2016
 * Time: 09:15
 */



trait craud
{

private $result,$columnString,$valueString,$STH ;
    private $host="localhost";
    private $dbname="deneme";
    private $user="root";
    private $password="";
    private $where;
    private $join;
    protected $connect;
    private $array;
    private $col;
    private $query;

    function __construct(){

        $this->connect=new \PDO("mysql:host=".$this->host.";dbname=".$this->dbname.";charset=utf8",$this->user,$this->password);

    }

    function __set($name, $value)
    {
        $this->col[$name]=$value;

    }

    public function find($id){

        $this->result=$this->connect->prepare("select * from ".$this->table." where id=:id ");
        $this->result->bindParam("id",$id);
        $this->result->execute();
        $this->result=$this->result->fetch(\PDO::FETCH_ASSOC);

       return $this->result;



    }

public function join($join=false){


$this->join=" ,$join ";

    return $this;



}

    public function where($where){

     $this->where=" where $where";

        return $this;
    }



    public function get(){

        $this->result=$this->connect->query("select * from ".$this->table.$this->join.$this->where);

       while($a=$this->result->fetch(PDO::FETCH_ASSOC)){


           $this->array[]=$a;
       }


       return $this->array;




    }



    public function delete(){

return $this->connect->exec("delete  from ".$this->table.$this->where);




    }



    public function update($update=false){


        return $this->connect->exec("update ".$this->table." set ".$update.$this->where);



    }





    public function add(array $insert){


        $this->columnString = implode(',', array_keys($insert));
        $this->valueString = implode(',', array_fill(0, count($insert), '?'));

        $this->STH = $this->connect->prepare("INSERT INTO ".$this->table." ($this->columnString) VALUES ($this->valueString)");
       return  $this->STH->execute(array_values($insert));



    }
}
