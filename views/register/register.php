<?php include_once('header.php');?>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
        <title>Pagina</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="css/style.css?version51">
        <link rel="stylesheet" type="text/css" href="css\loginCSS.css">

        <div class="body-content">

<div class="container">
    <div class="logo">
        <img src="images/cakeshopLogo.png " alt="Company Logo" srcset="">
    </div>
    <h2>Inregistrare utilizator</h2>
    <div class="login-form">
        <form method="POST">
            <div class="form-item">
                
                <input type="TEXT" name ="firstName" required placeholder="Nume"/>
                
            </div>
            <div class="form-item">
                
                <input type="TEXT" name ="lastName" required placeholder="Prenume"/>
                
            </div>
          
            <div class="form-item">
                
                <input type="TEXT" name ="email" required placeholder="Email"/>
                
            </div>

            <div class="form-item">
                
                <input type="tel" name ="phone" required placeholder="Telefon"/>
                
            </div>

            <div class="form-item">
                
                <input type="PASSWORD" name ="password" required placeholder="Parola"/>
                
            </div>
            <div class="form-item">
                
                <input type="PASSWORD" name="rpassword" required placeholder="Repeta parola"/>
                
            </div>
            
            
            <div class="form-btns">

               <input type="SUBMIT" name="submit" value="Inregistrare" required />
             


            </div>
        </form>
        <p>Copyright &copy; BomboCakeShop.com</p>
    
    </div>
</div>
</div>



