<?php

/**
 * Created by PhpStorm.
 * User: kutuphane
 * Date: 21.12.2016
 * Time: 14:08
 */
class getCart

{

    private $data,$connect,$table,$query,$in;

    function __construct()
    {

        $this->connect=(new dbConnect())->connect();

        return $this->connect;
    }

    function __call($col, $val)
    {


     //   return $data[$col]=$val;

    }





public function fetchProducts($tablename)
{

    $this->in=(new cartClass())->inMysql();

    $stdClass=new stdClass();
$this->query=$this->connect->query("SELECT * FROM $tablename  where id IN (".$this->in.")  ");
while($row=$this->query->fetch(PDO::FETCH_ASSOC)){

    $this->data[]=$row;




}
    return $this->data;







}


}
