<?php
$error = '';
if (isset($_POST['login'])) {
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $userlist = './password/private/hashed.csv';
    $redirect = '/3rdquarterproject/admin/album_upload.php';
    require_once './password/authenticate/authenticate.php';
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <style>
        label {
            display:inline-block;
            width:125px;
            text-align:right;
            padding-right:2px;
        }
        input[type="submit"] {
            margin-left:135px;
        }
    </style>
  </head>
  <body>
    <h1>Login</h1>
    <?php
    if ($error) {
      echo "<p>$error</p>";
    }
     ?>
      <form class="login" method="post" action="login.php">
        <p>
          <label for="username">Username:
          </label>
          <input type="text" name="username" value=""><br>
        </p>
        <p>
          <label for="password">Password:
          </label>
          <input type="password" name="password" value="">
        </p>
        <p>
          <input name="login" type="submit" id="login" value="Log in">
        </p>
        <p>
          Need an account? <a href="/3rdquarterproject/admin/register.php">Register here.</a>
        </p>
      </form>
  </body>
</html>
