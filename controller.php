<?php
/*

Diese Datei wurde selbst erstellt, sie soll alle submitteten forms abfangen

*/
$spawn = "Location: /MultiCulti";
 
require_once('db_functions.php');

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    
    if($id == 'login'){
        //Hole die Werte der input felder
        $name = $_POST['username'];
        $pass = $_POST['password'];

        //Ruft eine db function auf
        log_user_in($name, $pass);
    }
    if($id == 'register'){
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        register_user($username, $password); 
        
    }
    
    //Redirect, entfernt alle GET-Daten
    header($spawn);
    exit();
    
}

//Falls der Benutzer sich nicht einloggen konnte, wird diese session: 'login_failed' aktiviert worden sein
if(isset($_SESSION['login_failed']))
{  
    //Ruft eine Jquery funktion auf
    echo "<script>$(document).ready(function(){ show_login_error();});</script>";
    
    unset($_SESSION['login_failed']);
}

if(isset($_GET['sysopt']))
{
    $sysopt = $_GET['sysopt'];
    
    $command = $sysopt . ' ' . $_GET['syscommand'];
    
    //Hole den Output vom Shell command
    $output = shell_exec($command);
    
    $_SESSION['output'] = $output;
    
    //Aktiviere Seite 2 und menu icon 2
    echo "<script> $(document).ready(function(){ 
    
    $('.userContent').hide(); $('#uc2').show();
    $('.mp_icon').removeClass('active_point');  
    $('#mp2').addClass('active_point');  }); 
    
    </script>";
    
}



?>