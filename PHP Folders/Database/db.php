<?php

class Database{

    private $mySqlHost="localhost";
    private $mySqlDbName="fashion";
    private $mySqlUserPassword="";
    private $mySqlUserName="root";
    private $mySqlCharSet="UTF8";


public function _construct(){
$Sql="mysql:host=".$this->mySqlHost.";dbname=".$this->mySqlDbName.";charset=".$this->mySqlCharSet;
try {
  $pdo=new \PDO($Sql,$this->mySqlUserName,$this->mySqlUserPassword);
  $this->$pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE,\PDO::FETCH_OBJ);
 
} catch (\Throwable $th) {

 die("PDO ile veritabanina baglanilamadi.".$th->getMessage());
}
}


public function _closeDb(){
  $this.$pdo=null; 
 }



}





?>