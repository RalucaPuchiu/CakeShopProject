<?php



class Register 
{
public function __construct()
{
    parent::__construct();
}
function index(){
    $this->view->render('register/register');
}
function signup(){
    die("Salshry");
    $last_name=$_POST['last_name'];
    $first_name=$_POST['first_name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    // $count=$this->model->check_user($email);

    // if($count > 0){
    //     echo 'This User Already Exists';
    // }
    // else{
        $data = array(
        'last_name' =>$_POST['last_name'],
        'first_name' =>$_POST['first_name'],
        'phone' =>$_POST['phone'],
        'email' =>$_POST['email'],
        'password' =>$_POST['password'],
        'is_admin' => '0'
    );
    $this->model->insert_user($data);
    // }
header('location:register');
}

}