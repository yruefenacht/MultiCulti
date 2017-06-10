<?php

/*Diese Datei wurde selbst erstellt*/

require_once('ConnectionHandler.php');


function log_user_in($username, $password)
{
    $query = "SELECT username, password, salt FROM user";

    $statement = ConnectionHandler::getConnection()->prepare($query);
    $statement->execute();
        
    $result = $statement->get_result();
    if (!$result) {
        throw new Exception($statement->error);
    }
    
    $logged_in = false;
    
    while($row = $result->fetch_object()){
        if($row->username == $username && $row->password == crypt($password, $row->salt)){
            $logged_in = true;
        }
    }
    
    
    if($logged_in){
        
        $_SESSION['user'] = $username;
        
        
    }else{
        $_SESSION['login_failed'] = true;
        
    } 
}


function register_user($username, $password)
{
    $salt = uniqid(mt_rand(), true);
    
    $password = crypt($password, $salt);
    
    $query = "insert into user (username, password, salt) values (?,?,?);";
    
    $statement = ConnectionHandler::getConnection()->prepare($query);
    $statement->bind_param("sss", $username, $password, $salt);
    
    if (!$statement->execute()) {
        throw new Exception($statement->error);
    }

}



?>