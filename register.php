
<?PHP
require 'conn.php';
if(!empty($_SESSION["user_id"])){
    header("Location: index.php");
}

if(isset($_POST['submit'])) {

$last_name = $_POST['last_name'];
$first_name = $_POST['first_name'];
$phone = $_POST['phone'];
$email =$_POST['email'];
$password =$_POST['password'];
$confirmpassword= $_POST['confirmpassword'];
$duplicate= mysqli_query($conn, "SELECT * FROM users WHERE email= '$email' ");
if (mysqli_num_rows($duplicate)>0){
    echo
    "<script> alert('Emailul este deja utilizat'); </script>";
}

else{
    if($password==$confirmpassword){
        $query="INSERT INTO users VALUES('$last_name', '$first_name', '$phone', '$email', '$password')";
        mysqli_query($conn, $query);
        echo
        "<script> alert('Inregistrare efectuata cu succes'); </script>";
        header('location: index.php');
    }
    else{
        echo 
        "<script> alert('Parolele difera'); </script>";
    }
}

}
?>

<?php include_once('header.php');?>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
        <title>Pagina</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="css/style.css?version51">
        <link rel="stylesheet" type="text/css" href="css\loginCSS.css">

        <!-- <div class="body-content"> -->

<div class="container">
    <div class="logo">
        <img src="images/cakeshopLogo.png " alt="Company Logo" srcset="">
    </div>
    <h2>Inregistrare utilizator</h2>
    <div class="login-form">
        <form method="POST" >
            
            <div class="form-item">
                
                <input type="TEXT" name ="last_name" required placeholder="Nume"/>
                
            </div>

            <div class="form-item">
                
                <input type="TEXT" name ="first_name" required placeholder="Prenume"/>
                
            </div>

            <div class="form-item">
                
                <input type="tel" name ="phone" required placeholder="Telefon"/>
                
            </div>

            <div class="form-item">
                
                <input type="TEXT" name ="email" required placeholder="Email"/>
                
            </div>

           

            <div class="form-item">
                
                <input type="PASSWORD" name ="password" required placeholder="Parola"/>
                
            </div>

            <div class="form-item">
                        
                        <input type="PASSWORD" name="confirmpassword" required placeholder="Repeta parola"/>
						
                    </div>

            
            
            <div class="form-btns">

               <input type="submit" name="submit" value="Inregistrare" required />
             


            </div>
        </form>
        <p>Copyright &copy; BomboCakeShop.com</p>
    
    </div>
</div>

