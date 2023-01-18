<?php include_once('header.php');?>
<?php include('server.php'); ?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="css\loginCSS.css">
</head>
<body>
<div class="container">
    <div class="logo">
    <img src="images/cakeshopLogo.png " alt="Company Logo" srcset=""> 
    </div>
    <h2>Autentificare</h2>
        <form method="POST" action="">
            <div class="form-valori">
                <input type="text" name="email" required placeholder="Email"/>
            </div>
            <div class="form-valori"> 
              <input type="password" name="password" required placeholder="Parola">
            </div>
            <div class="form-butoane">
                <input type="submit" name="login_user" value="Logare" required/>
                <br><br>
                <p>Nu ai un cont? Creeaza-ti unul</p><br>
                <div class="optiuni">
                    <a href="register.php">Inregistrare</a>
                </div>
            </div>
            <br><br><br>
        </form>
    </div>
</div>
</div>
<?php
  ?>
</body>
</html>