<?php

$bestSellers= [
  [
    "id"=>1,
    "card-title"=>'THE ROLLING STONES T-SHIRT',
    "oldPrice"=>100,
    "price"=>80,
    "image"=>'http://localhost/proje1/PHP%20Folders/Resimler1/ürün1.jpg'
    ],
    [
      "id"=>2,
      "card-title"=>"FOO FIGHTERS T-SHIRT",
      "oldPrice"=>110,
      "price"=>60,
      "image"=>"http://localhost/proje1/PHP%20Folders/Resimler1/ürün2.jpg"
      ],
      [
        "id"=>3,
        "card-title"=>"ONE PIECE  T-SHIRT",
        "oldPrice"=>120,
        "price"=>60,
        "image"=>"http://localhost/proje1/PHP%20Folders/Resimler1/ürün4.jpg"
        ],
        [
  "id"=>4,
  "card-title"=>"GREEN T-SHIRT GARMENT DYED EMBROIDERED",
  "oldPrice"=>105,
  "price"=>60,
  "image"=>"http://localhost/proje1/PHP%20Folders/Resimler1/urun7.jpg"
  ]
  ];
  ?>


<!--ADD MYSQL -->
  <?php 
  // class Database{
  
  //     private $mySqlHost="localhost";
  //     private $mySqlDbName="fashion";
  //     private $mySqlUserPassword="";
  //     private $mySqlUserName="root";
  //     private $mySqlCharSet="UTF8";
  // public function _openDb($title,$old,$price,$proImage){
  // $Sql="mysql:host=".$this->mySqlHost.";dbname=".$this->mySqlDbName.";charset=".$this->mySqlCharSet;
  // try {
  //   $conn=new PDO($Sql,$this->mySqlUserName,$this->mySqlUserPassword);
  //   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  //  $sql= $conn-> prepare("INSERT INTO produts(ProductsTitle,ProductsOldPrice,ProductsPrice,ProductsImage) 
  //  VALUES (:title,:old,:price,:proImage)"); 
  //  $sql ->bindParam(':title',$title, PDO::PARAM_STR);
  //  $sql ->bindParam(':old',$old, PDO::PARAM_INT);
  //  $sql->bindParam(':price',$price,PDO::PARAM_INT);
  //  $sql->bindParam(':proImage',$proImage,PDO::PARAM_STR);
  // $sql->execute();
  // } catch (\Throwable $th) {
  
  //  die("PDO ile veritabanina baglanilamadi.".$th->getMessage());
  // }
  // }
  
  
  // public function _closeDb(){
  //   $conn=null;
  //  }
  // }
  
  
  // $Insert=new Database();
  
  // foreach ($bestSellers as $z): {}
  
  // $title=$z["card-title"];
  // $oldPrice=$z["oldPrice"];
  // $price=$z["price"];
  // $image=$z["image"];
  // $Insert->_openDb($title,$oldPrice,$price,$image);
  
  
  
  // endforeach;
  // $Insert->_closeDb();
  
  
  ?>
<!--ADD MYSQL -->








<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("Partials/header.php")?>
    

</head>
<body>
<?php include("Partials/navbar.php")?>
<?php include("Partials/ForMainPage/carousel.php")?>
<?php include("Partials/ForMainPage/4productsRow.php")?>

<!-- BEST SELLERS-->
<div class="row" style="margin-top: 100px  !important;  justify-content: space-around ;">
  <h2 style="text-align: center; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif ;font-size: 50px;">BEST SELLERS</h2>
  <br><br><hr><br><br><br>



   <?php foreach ($bestSellers as $bestseller ): {} ?>
    <div class="card cardİmg" style="width: 18rem; border-width: 1px; border-style:outset; border-color: white; ">
     <img src=<?php  echo $bestseller['image']?> class="card-img-top"  alt="..."/>
     <div class="card-body bestsellers">
       <a href=""><h5 class="card-title"><?php echo $bestseller["card-title"]?></h5></a>
       <p class="card-text">
       </p>
       <p class="pricefirst" style="text-decoration:line-through;"><?php echo $bestseller["oldPrice"]."$"?></p>
       <p class="pricesecond price" id="sell"> <?php echo $bestseller["price"]."$"?></p>
       <div class="btn-group">
         <button class="btn  btn-sm dropdown-toggle Size btnSize" id="seeSize"   type="button" data-bs-toggle="dropdown" aria-expanded="false" style="background-color:#8660f8; color:white; margin:auto; margin-top:30px; width:55px;">
            SIZE
          </button>
           <ul class="dropdown-menu" style="text-align:center;">
           <li><a class="dropdown-item"  size ="XS" href="#">XS</a></li>
           <li><a class="dropdown-item"  size ="S" href="#">S</a></li>
           <li><a class="dropdown-item"  size ="M" href="#">M</a></li>
           <li><a class="dropdown-item"  size ="L" href="#">L</a></li>
           <li><a class="dropdown-item"  size ="XL" href="#">XL</a></li>
           </ul>
       </div>
       <a name="<?php echo $bestseller["card-title"]?>" res="<?php echo $bestseller["image"]?>"  price=<?php echo $bestseller["price"]?> size="0" class="btn btn-danger text-white btnAdd addBtColor"  href="#" style="margin-top:30px ;">Add to Cart</a>
     </div>
   </div>
   <?php endforeach; ?> 
<!-- BEST SELLERS-->
<!-- ADDED TO CART POPUP -->
<div class="fixed-top" id="alert" style="text-align: center; color:white; background-color:#8660f8;">
<b></b>
</div>
<!-- ADDED TO CART POPUP -->

































































<?php include("Partials/footer.php")?>









    























  

<script src="http://localhost/proje1/PHP%20Folders/ShoppingCard1js"></script>
<!-- <script src="ShoppingCard1.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>