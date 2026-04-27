<?php
class Database{
    private $host='localhost';
    private $db_name='office_visitor_task_management';
    private $password='';
    private $user='root';
    public $conn;
    public function connect(){
      $this->conn=new mysqli($this->host,$this->db_name,$this->password,$this->user);
      if($this->conn->connect_error){
        die('connection failed');
        }
      return $this->conn; 
    }
    
    
}