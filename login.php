<?php include_once('header.php');?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="css\loginCSS.css">

<div class="container">
    <div class="logo">
    <img src="images/cakeshopLogo.png " alt="Company Logo" srcset=""> 
    </div>
    <h2>Autentificare</h2>
    <!-- <div class="login-form"> -->
        <form method="POST" action="">
            <div class="form-valori">
                <input type="text" name="email" required placeholder="Email"/>
            </div>
            <div class="form-valori"> 
              <input type="password" name="password" required placeholder="Parola">
            </div>
            <div class="form-butoane">
                <input type="submit" name="submit" value="Logare" required/>
                <br><br>
                <p>Nu ai un cont? Creeaza-ti unul</p><br>
                <div class="options">
                    <a href="register.php">Inregistrare</a>
                </div>
            </div>
            <br><br><br>
        </form>
    </div>
</div>
</div>

<?php

if(isset($_POST['submit'])){
//Conectare la baza de date
    $mysqli = NEW MySQLi ('localhost' , 'root' , '' , 'cakeshop');
// imi preia date din form-ul de login
    $email = $mysqli->real_escape_string($_POST['email']);
    $password = $mysqli->real_escape_string($_POST['password']);
    $result = $mysqli->query("SELECT * FROM users WHERE email='$email' AND password = '$password' ");

    if($result->num_rows != 0 ){
        $row = $result->fetch_assoc();
        $_SESSION['loggedin'] = TRUE;
        header('Location: index.php');
    }
    else {
        die('Email sau parola gresita');
    }
        
}
?>