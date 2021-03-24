<?php
include dirname(__DIR__).'/includes/connection.php';
use \includes\Upload;

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

if (isset($_POST['insert'])) {
    require_once '../includes/connection.php';
    // initialize flag
    $OK = false;
    // initialize prepared statement
    $stmt = $conn->stmt_init();
    // create SQL
    $sql = 'INSERT INTO discography (album_name, track_name, track_length) VALUES(?, ?, ?)';
    if ($stmt->prepare($sql)) {
        // bind parameters and execute statement
        $stmt->bind_param('sss',
        $_POST['title'],
        $_POST['tracktitle'],
        $_POST['tracklength']);
        $stmt->execute();
        if ($stmt->affected_rows > 0) {
            $OK = true;
        }
        // redirect if successful or display error
        if ($OK) {
            header('Location: http://localhost/3rdquarterproject/admin/album_upload.php');
            exit;
        } else {
            $error = $stmt->error;
        }
      }
    }

    $max = 51200;
  if (isset($_POST['upload'])) {
      // define the path to the upload folder
      $destination = '../images/albums';
      require_once './includes/upload.php';
      try {
          $loader = new Upload($destination);
          $loader->upload('image', $max);
          $result = $loader->getMessages();
      } catch (Throwable $t) {
          echo $t->getMessage();
      }
    }

  ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Upload New Album</title>
   </head>
   <body>
     <h1>Upload New Track</h1>
     <label for="title">Album Title:</label><br>
     <input type="text" name="title"><br><br>

     <label for="text">Tracklist:</label>
     <table>
       <tr>
         <th>Track Title</th>
         <th>Track Length</th>
       </tr>
       <tr>
         <td><input type="text" name="tracktitle"></td>
         <td><input type="text" name="tracklength" class="number" placeholder="0:00"></td>
       </tr>
     </table><br>
  <form method="post">
    <input type="submit" name="insert" value="Insert">
  </form>
    <h1>Upload Image</h1>
      <?php
      if (isset($result)) {
        echo '<ul>';
        foreach ($result as $message) {
          echo "<li>$message</li>";
        }
      echo '</ul>';
      }
       ?>
       <form action="album_upload.php" method="post" enctype="multipart/form-data">
           <p>
               <input type="hidden" name="MAX_FILE_SIZE" value="<?= $max ?>">
               <input type="file" name="image" id="image">
           </p>
           <p>
             <input type="submit" name="upload" id="upload" value="Upload">
           </p>
       </form><br>
       <form method="post">
         <input type="submit" name="logout" value="Log Out">
       </form>
   </body>
 </html>
