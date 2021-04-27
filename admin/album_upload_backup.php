<?php
include './includes/login.php';
use \includes\Upload;
login();

if (isset($_POST['insert'])) {
    require_once '../includes/connection.php';
    // initialize flag
    $OK = false;
    // initialize prepared statement
    $stmt = $conn->stmt_init();
    // create SQL
    $sql = 'INSERT INTO discography (album_name, year, track_name, track_length) VALUES (?, ?, ?, ?)';
    if ($stmt->prepare($sql)) {
        // bind parameters and execute statement
        $stmt->bind_param(
        'siss',
        $_POST['album_name'],
        $_POST['year'],
        $_POST['track_name'],
        $_POST['track_length']);
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
      $image = $_FILES['image']['name'];
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

  if (isset($_POST['back'])) {
    header('Location: http://localhost/3rdquarterproject/admin/album_list.php');
    exit;
  }
  ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Upload New Album</title>
   </head>
   <body>
     <h1>Upload New Album</h1>
      <h2>Upload Cover</h2>
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
            <input type="file" name="image">
          </p><br>

     <h2>Upload New Tracks</h2>
    <form method="post">
      <label for="title">Album Title:</label><br>
      <input type="text" name="album_name"><br><br>

      <label for="title">Year:</label><br>
      <input type="text" name="year"><br><br>

      <label for="text">Track Info:</label>
     <table>
       <tr>
         <th>Track Title</th>
         <th>Track Length</th>
       </tr>
       <tr>
         <td><input type="text" name="track_name"></td>
         <td><input type="text" name="track_length" class="number" placeholder="0:00"></td>
       </tr>
       <tr>
         <td><input type="text" name="track_name"></td>
         <td><input type="text" name="track_length" class="number" placeholder="0:00"></td>
       </tr>
       <tr>
         <td><input type="text" name="track_name"></td>
         <td><input type="text" name="track_length" class="number" placeholder="0:00"></td>
       </tr>
       <tr>
         <td><input type="text" name="track_name"></td>
         <td><input type="text" name="track_length" class="number" placeholder="0:00"></td>
       </tr>
       <tr>
         <td><input type="text" name="track_name"></td>
         <td><input type="text" name="track_length" class="number" placeholder="0:00"></td>
       </tr>
       <tr>
         <td><input type="text" name="track_name"></td>
         <td><input type="text" name="track_length" class="number" placeholder="0:00"></td>
       </tr>
       <tr>
         <td><input type="text" name="track_name"></td>
         <td><input type="text" name="track_length" class="number" placeholder="0:00"></td>
       </tr>
       <tr>
         <td><input type="text" name="track_name"></td>
         <td><input type="text" name="track_length" class="number" placeholder="0:00"></td>
       </tr>
       <tr>
         <td><input type="text" name="track_name"></td>
         <td><input type="text" name="track_length" class="number" placeholder="0:00"></td>
       </tr>
       <tr>
         <td><input type="text" name="track_name"></td>
         <td><input type="text" name="track_length" class="number" placeholder="0:00"></td>
       </tr>
       <tr>
         <td><input type="text" name="track_name"></td>
         <td><input type="text" name="track_length" class="number" placeholder="0:00"></td>
       </tr>
       <tr>
         <td><input type="text" name="track_name"></td>
         <td><input type="text" name="track_length" class="number" placeholder="0:00"></td>
       </tr>
       <tr>
         <td><input type="text" name="track_name"></td>
         <td><input type="text" name="track_length" class="number" placeholder="0:00"></td>
       </tr>
       <tr>
         <td><input type="text" name="track_name"></td>
         <td><input type="text" name="track_length" class="number" placeholder="0:00"></td>
       </tr>
     </table><br>
      <input type="submit" name="insert" value="Submit Album">
    </form><br>
    <form method="post">
      <input type="submit" name="back" value="Go Back">
    </form>
   </body>
 </html>
