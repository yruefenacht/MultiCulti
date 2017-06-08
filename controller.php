<?php

$spawn = "Location: /MultiCulti";
 
require_once('db_functions.php');

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    
    if($id == 'login'){
        //Hole die Werte der Inputfelder der form
        $name = $_POST['username'];
        $pass = $_POST['password'];


        log_user_in($name, $pass);
    }
    if($id == 'register'){
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        echo $username;
        
    }
 
    header($spawn);
    exit();
    
}

if(isset($_SESSION['login_failed']))
{
        
    echo "<script>$(document).ready(function(){ show_login_error();});</script>";
    
    unset($_SESSION['login_failed']);
}




?>