<?php 

session_start();

// initializing variables
$first_name = "";
$last_name="";
$phone= "";
$email= "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'cakeshop');

// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $last_name = mysqli_real_escape_string($db, $_POST['last_name']);
  $first_name = mysqli_real_escape_string($db, $_POST['first_name']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($last_name)) { array_push($errors, "Last name is required"); }
  if (empty($first_name)) { array_push($errors, "First name is required"); }
  if (empty($phone)) { array_push($errors, "Phone is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE last_name='$last_name' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  

  
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    
    $password = md5($password_1);//encrypt the password before saving in the database

    $query = "INSERT INTO users (user_id, last_name, first_name, phone, email, password) 
              VALUES(null, '$last_name', '$first_name', '$phone', '$email', '$password')";
    mysqli_query($db, $query);
    $_SESSION['email'] = $email;
    // $_SESSION['success'] = "Autentificare reusita";
    header('location: index.php');
}
}
///LOGIN
if (isset($_POST['login_user'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['email'] = $email;
        //   $_SESSION['success'] = "Autentificare reusita";
          header('location: index.php');
    }
  }
}
?>

