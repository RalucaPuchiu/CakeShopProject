<?php

include 'config.php';

$conn = open_db();
class Register_Model extends Model
{
public function __construct()
{
parent::__construct();
}
public function check_user($email)
{
    $result= $this->db->select("SELECT * FROM `users` WHERE  email = '".$email."'");
    $count = count($result);
    return $count;
}
public function insert_user($data)
{
    $this->db->insert('users', $data);
}

}