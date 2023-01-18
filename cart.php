<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cos de cumparaturi</title>
    <link ref="stylesheet" href="https://unpkg.com/swiper@8.4.4/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js">
    <link rel="stylesheet" type="text/css" href="css\cart.css">

</head>
<body>
<header class="header">
     <a href="#" class="logo" style="text-decoration: none;"> <i class="fas fa-birthday-cake"></i>Cofetăria Bombo  </a>
    <nav class="navbar">
        <a href="index.php" style="text-decoration: none;">Acasă</a>
        <a href="about.php" style="text-decoration: none;">Despre noi</a>
        <div class="dropdown">
          <a href="categories.php" style="text-decoration: none;">Categorii</a>
            <div class="dropdown-content">
              <a href="prajituri.php">Prajituri</a>
              <a href="torturi.php">Torturi</a>
              <a href="patiserie.php">Patiserie</a>
              <a href="platouri.php">Platouri</a>
              <a href="inghetata.php">Inghețată</a>
             </div>
          </div>
         
        <a href="gallery.php" style="text-decoration: none;">Galerie</a>
        <a href="team.php" style="text-decoration: none;">Echipă</a>
       
   </nav>

   <div class="icons">
    <div id="cart-btn" class="fas fa-shopping-cart" onclick="location.href='cart.php';" ></div>
    <div id="user" class="fas fa-user" onclick="location.href='login.php';"></div> 
    <div id="logout" class="fas fa-sign-out-alt" onclick="location.href='logout.php';"></div>
   </div>
</header> 



<br>


    <h1>Cos de cumparaturi</h1><br><br>
    <?php
$db = mysqli_connect("localhost", "root", "", "cakeshop");


$result = mysqli_query($db, "SELECT * FROM product where name IN ('Stracciatella', 'FURSEC PISCOTEL', 'Tort Josephine') ");
while($data = mysqli_fetch_array($result))
{
?>
     <div class="wrapper">
        <div class="project"></div>
            <div class="shop">
                <div class="box">
                <div class="img_display"><img src="images/<?php echo $data['image']; ?>"width="200" height="200"> </div>
                    <div class="content">
                    <p class="pret">Pret: <?php echo $data['price']; ?>lei</p>
                        <p class="unit"> Cantitate: <input value="1"></p>
                        <p>Gramaj: <?php echo $data['weight']; ?>g</p>
                        <p class="btn-area">
                            <i class="fa fa-trash"></i>
                            <span class="btn2">Sterge</span>
                        </p>
                    </div> 
                </div>   
            </div>  
        </div>
    </div>
<?php
}
?>

<div class="right-bar">
    <p><span>Subtotal</span><span> 188 lei </span></p>
    <hr>
    <p><span>Transport</span><span> 10 lei </span></p>
    <hr>
    <p><span>Total</span><span> 198 lei </span></p>

    <a href="#"><i class="fa fa-shopping-cart"></i>Finalizeaza comanda</a></div>
</body><br><br>
<?php include_once('subsol.php');?>

</html>