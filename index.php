<!DOCTYPE html>
<?php session_start(); ?>
<html>
<!-- 
.___  ___.  __    __   __      .___________. __  
|   \/   | |  |  |  | |  |     |           ||  | 
|  \  /  | |  |  |  | |  |     `---|  |----`|  | 
|  |\/|  | |  |  |  | |  |         |  |     |  | 
|  |  |  | |  `--'  | |  `----.    |  |     |  | 
|__|  |__|  \______/  |_______|    |__|     |__| 
                                                 

  ______  __    __   __      .___________. __  
 /      ||  |  |  | |  |     |           ||  | 
|  ,----'|  |  |  | |  |     `---|  |----`|  | 
|  |     |  |  |  | |  |         |  |     |  | 
|  `----.|  `--'  | |  `----.    |  |     |  | 
 \______| \______/  |_______|    |__|     |__| 
                                                                                                                                                                                                                                                     
-->
  <head>
    <!-- META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,300,600,700' rel='stylesheet' type='text/css'>
      
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
      
    <!-- JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/functions.js"></script>
    
    <!-- ICON -->
    <link rel="shortcut icon" href="multiculti_logo.png">
    
    <title>MC | Login</title> 
      
  </head>
    
    <?php require_once('controller.php'); ?>
    
<body>
    
    <?php if(isset($_SESSION['user'])){ ?>
    
    <!-- LOGGED IN CONTENT -->
    
    <div class="cmdWrapper">
    <tc>
        <div class="userField">
            <div class="userTopSection">
                <div class="pp"></div>
                <div class="name"><?php echo $_SESSION['user']; ?></div>
                <a href="logout.php"><img class="turn_off" src="img/turn-off.png" title="Logout"></a>
            </div>    
            <div class="navigator">
            </div>
        
        </div>
    </tc>
    </div>
    
    <!-- ----------------- -->
    <?php } else { ?>
    
    <!-- LOGGED OUT CONTENT -->
    
    <div class="loginContainer">
    <tc>
        <div class="loginFrame">
            <h1>Login</h1>
            
            <form action="?id=login" method="post" name="login">
                
                
            <input type="text" class="l_input" placeholder="username" name="username" autocomplete="off"><br>
            <input type="password" class="l_input" placeholder="password" name="password"><br>
                
            <div class="login_error">Login inkorrekt</div>
                
            <input type="submit" class="login_submit" value="login" name="login">
                
            </form>
            
        </div>
    </tc>
    </div>
        
    <!-- --------------- -->
    <?php } ?>
    
</body>
    

    
</html>