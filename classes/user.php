<?php
require_once "../CONFIGS/database.php";
class User{
    private $db;
    public function __construct(){
        $this->db=(new Database())->connect();
    }
    public function create_user($name,$email,$password,$role_id){
        $password=password_hash($password,PASSWORD_DEFAULT);
    }
    
}