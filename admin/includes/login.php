<?php
function login() {
  //Directory redirect
  if('Location: http://localhost/3rdquarterproject/admin') {
    header('Location: http://localhost/3rdquarterproject/admin/login.php');
  }
  
  //Login redirect
  session_start();
  if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated']
  != 'The Black Keys'){
      header('Location: http://localhost/3rdquarterproject/admin/login.php');
  }

  //Logout redirect
  if (isset($_POST['logout'])) {
    // Empty the session array
    $_SESSION = [];
    // Invalidate the session cookie
    if (isset($_COOKIE[session_name()])) {
        setcookie(session_name(), '', time()-86400, '/');
    }
    // end session and redirect
    session_destroy();
    header('Location: http://localhost/3rdquarterproject/admin/login.php');
    exit;
  }
}


?>
