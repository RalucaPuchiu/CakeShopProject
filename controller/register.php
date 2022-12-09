<?php

class Register extends Controller
{
public function __construct()
{
parent::__construct();
}
function index(){
$this->view->render('register');
}
function signup(){
$last_name=$_POST['last_name'];
$first_name=$_POST['first_name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];

$count=$this->model->check_user($email);
if($count > 0){
    echo 'This User Already Exists';
}
else{
    $data = array(
    'last_name' =>$_POST['last_name'],
    'first_name' =>$_POST['first_name'],
    'email' =>$_POST['email'],
    'password' =>$_POST['password']
    'phone' =>$_POST['phone']
    'is_admin' => '0'
);
$this->model->insert_user($data);
}
header('location:register');
}

}