<?php
include './includes/login.php';
use \includes\Upload;
login();

$max = 51200;
if (isset($_POST['upload'])) {

  //Connections
  require_once '../includes/connection.php';
  require_once './includes/upload.php';

  // Variables for uploading
  $image = $_FILES['image']['name'];
  $destination = '../images/albums';
  $stmt = $conn->stmt_init();
  $sql = 'INSERT INTO albumimage (image) VALUES (?)';

  //Image Upload
  try {
      $loader = new Upload($destination);
      $loader->upload('image', $max);
      $result = $loader->getMessages();
  } catch (Throwable $t) {
      echo $t->getMessage();
  }

  //Prepared SQL Statement
  if ($stmt->prepare($sql)) {
      $stmt->bind_param('s', $image);
      $stmt->execute();
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
    <title>Cover Upload</title>
  </head>
  <body>
    <h1>Upload Album Cover</h1>
    <?php
    if (isset($result)) {
      echo '<ul>';
      foreach ($result as $message) {
        echo "<li>$message</li>";
      }
    echo '</ul>';
    }
     ?>
     <form action="album_cover.php" method="post" enctype="multipart/form-data">
         <p>
             <label for="image">Upload image:</label><br><br>
             <input type="hidden" name="MAX_FILE_SIZE" value="<?= $max ?>">
             <input type="file" name="image">
         </p>
         <p>
             <input type="submit" name="upload" value="Upload">
         </p>
     </form>
     <form action="album_list.php" method="post">
       <input type="submit" name="back" value="Go Back">
     </form>
  </body>
</html>
