<?php

$bestSellers= [
[
  "id"=>1,
  "card-title"=>"THE ROLLING STONES T-SHIRT",
  "oldPrice"=>100,
  "price"=>80,
  "image"=>"http://localhost/proje1/PHP%20Folders/Resimler1/ürün1.jpg"
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
]
  
?>









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
       <p class="card-text"></p>
       <p class="pricefirst" style="text-decoration:line-through;"><?php echo $bestseller["oldPrice"]."$"?></p>
       <p class="pricesecond price" id="sell"> <?php echo $bestseller["price"]."$"?></p>
       <a name="<?php echo $bestseller["card-title"]?>" res="<?php echo $bestseller["image"]?>"  price=<?php echo $bestseller["price"]?> class="btn btn-danger text-white btnAdd addBtColor" href="#" style="margin-top:55px ;">Add to Cart</a>
     </div>
   </div>
   <?php endforeach; ?>
<!-- BEST SELLERS-->





<?php include("Partials/footer.php")?>









    























  


<script src="ShoppingCard.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>