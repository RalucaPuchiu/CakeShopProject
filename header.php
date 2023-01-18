<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Bombo CakeShop</title>
    <!-- <link ref="stylesheet" href="https://unpkg.com/swiper@8.4.4/swiper-bundle.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js">
    <link rel="stylesheet" type="text/css" href="css\style.css">
    
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