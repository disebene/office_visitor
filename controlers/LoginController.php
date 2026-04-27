<?php


require_once "../CONFIGS/database.php";

require_once "../auth.php";

$auth =new Auth();
if($auth->login($_POST['email'],$_POST['password'])){
    header("location:dashboard.php");

}
else{
    echo "invalid login";
}