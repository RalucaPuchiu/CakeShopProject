<?php include_once('header.php');?>

<?php include('server.php'); ?>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css\loginCSS.css">

<div class="container">
    <div class="logo">
        <img src="images/cakeshopLogo.png " alt="Company Logo" srcset="">
    </div>
    <h2>Inregistrare</h2>
    <!-- <div class="login-form"> -->
        <form method="POST" action="register.php" >
            <div class="form-valori"> 
                <input type="TEXT" name ="last_name" required placeholder="Nume"/>  
            </div>
            <div class="form-valori">
                <input type="TEXT" name ="first_name" required placeholder="Prenume"/>
            </div>
            <div class="form-valori">
                <input type="TEXT" name ="phone" required placeholder="Telefon"/>
            </div>
            <div class="form-valori">
                <input type="TEXT" name ="email" required placeholder="Email"/>
            </div>
            <div class="form-valori">
                <input type="PASSWORD" name ="password_1" required placeholder="Parola"/>
            </div>
            <div class="form-butoane">
               <input type="submit" name="submit" value="Inregistrare" required />
            </div>
        </form>
    </div>
</div>


