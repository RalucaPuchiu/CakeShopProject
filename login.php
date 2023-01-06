<?php include_once('header.php');?>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <title>Pagina</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css\loginCSS.css">
    <link rel="stylesheet" href="css/style.css?version51">
    <div class="body-content">

<div class="container">
    <div class="logo">
    <img src="images/cakeshopLogo.png " alt="Company Logo" srcset=""> 
    </div>
    <h2>Autentificare</h2>
    <div class="login-form">
        <form method="POST" action="">
            <div class="form-item">
                
                <input type="TEXT" name="email" required placeholder="Email"/>
            </div>
            <div class="form-item">
               
              <input type="PASSWORD" name="password" required placeholder="Parola">
            </div>
            <div class="remember-box">
                <input type="checkbox" name="remember" id="remember">Retine datele
               

            </div>
            <div class="form-btns">

                <input type="SUBMIT" name="submit" value="Logare" required/></td>
                <div class="options">
                    <a href="register.php">Inregistrare</a>
                </div>


            </div>
        </form>
        <p>Copyright &copy; BomboCakeshop.com</p>
         
    </div>
</div>
</div>





// // Logare /////////////////////////////////////////////////////////////////////////////////////////////////
// if(isset($_POST['submit'])){
//     //Conectare la baza de date
//     $mysqli = NEW MySQLi ('localhost' , 'root' , '' , 'cakeshop');
//     // Preluare date din form
//     $email = $mysqli->real_escape_string($_POST['email']);
//     $password = $mysqli->real_escape_string($_POST['password']);

//     $resultSet = $mysqli->query("SELECT * FROM users WHERE email='$email' AND password = '$password' ");

//     if($resultSet->num_rows != 0 ){
//         // Logare
//         $row = $resultSet->fetch_assoc();
      
        
//             header('Location: index.php');
//         }
//     }
    


 <?php
 
 require 'conn.php';

 if(!empty($_SESSION["user_id"])){
    header("Location: index.php");
}
 if(isset($_POST['submit'])){
     $email =$_POST['email'];
     $password = $_POST['password'];
     $result=mysqli_query($conn, "SELECT * FROM users WHERE email= '$email' ");
     $row= mysqli_fetch_assoc($result);
     if(mysqli_num_rows($result)>0){
         if($password==$row["password"]){
             $_SESSION["login"]= true;
             $_SESSION["user_id"]= $row["user_id"];
             header("Location: index.php");
         }
         else{
             echo
             "<script> alert ('Parola gresita'); <script>";

         }
     }
     else {
        echo
         "<script> alert ('Utilizator neinregistrat'); <script>";
     }

}
    
?>