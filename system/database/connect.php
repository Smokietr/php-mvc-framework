<?php

/**
 * Created by PhpStorm.
 * User: dilsi
 * Date: 28.9.2016
 * Time: 20:26
 */

namespace db;
include_once "system/database/config.php";

class database
{
    private $host;
    private $dbname;
    private $user;
    private $password;
    protected $connect;

    function __construct(){
global  $dbuser,$dbpassword,$dbhost,$dbname;
        $this->dbname=$dbname;
        $this->password=$dbpassword;
        $this->host=$dbhost;
        $this->user=$dbuser;
        $this->connect=new \PDO("mysql:host=".$this->host.";dbname=".$this->dbname.";charset=utf8",$this->user,$this->password);

    }


}

