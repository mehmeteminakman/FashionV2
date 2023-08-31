<?php
class Database{

    private $mySqlHost="localhost";
    private $mySqlDbName="fashion";
    private $mySqlUserPassword="";
    private $mySqlUserName="root";
    private $mySqlCharSet="UTF8";
public function _openDb($a,$b,$c,$d){
$Sql="mysql:host=".$this->mySqlHost.";dbname=".$this->mySqlDbName.";charset=".$this->mySqlCharSet;
try {
  $conn=new PDO($Sql,$this->mySqlUserName,$this->mySqlUserPassword);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 $sql= "INSERT INTO products(ProductsID,ProductsTitle,ProductsOldPrice,ProductsPrice,Productsİmage) 
  VALUES (null,$a,$b,$c,$d)";
  $conn ->exec($sql); 
} catch (\Throwable $th) {

 die("PDO ile veritabanina baglanilamadi.".$th->getMessage());
}
}


public function _closeDb(){
  $conn=null;
 }
}
?>