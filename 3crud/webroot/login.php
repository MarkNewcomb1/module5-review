<?php
  require_once('../lib/db.interface.php');
  require_once('../lib/db.class.php');
  require_once('../models/user.class.php');
  require_once('../models/manager.abstract.php');
  require_once('../models/user_manager.class.php'); 
    // Uncomment the below line (and line in user.php) to enable db session store 
  //require_once('../lib/db_session_store.php'); 

  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>ORM/MVC - Login</title>
    <link rel="stylesheet" type="text/css" href="css/base.css">
  </head>
  <body>
    <h2>Login</h2>
    <?php

      $action = isset($_GET["action"])?$_GET["action"]:'';
      $username = isset($_GET["username"])?$_GET["username"]:'';
      $password = isset($_GET["password"])?$_GET["password"]:'';
      $error_msg = array();
      
      switch ($action) {
        case 'logout':
          session_destroy();
          include('../views/logout.php');
          break;        
          
        case 'login':
          $userManager = new UserManager();
          $user = $userManager->authenticate($username, $password);
          /*
          if($action == 'login' && strlen($username) < 3){
            $error_msg[] = "Username too short";
            include('../views/login.php');
            break;
          }
          */
          if($user){
            include('../views/login_success.php');
            $_SESSION['current_user'] = $user;
          }else{
            $error_msg[] = 'Username or Password incorrect.';
            include('../views/login.php');
          }
          break;                  
            
        default:
          include('../views/login.php');
          break;
      }
    ?>
</body>
</html>


