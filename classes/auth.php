<?php
session_start();
class Auth{
    private $db;
    public function __construct()
    {
      return $this->db=(new Database)->connect();  
    }
    public function login($email,$password){
$sql="SELECT * FROM users where email= $email";
$result=$this->db->query($sql);
$user=$this->$result->fetch_assoc();
if($user && password_verify($password,$user['password'])){
    $_SESSION['user_id']=$user['id'];
    $SESSION['role']=$user['role_id'];
    return true;
}
return false;



    }

    public function logout(){
        session_destroy();
    }
    
}