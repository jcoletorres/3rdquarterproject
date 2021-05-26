<?php
include './includes/login.php';
login();

if (isset($_POST['upload'])) {
    require_once '../includes/connection.php';
    // initialize flag
    $OK = false;
    // initialize prepared statement
    $stmt = $conn->stmt_init();
    // create SQL
    $sql = 'INSERT INTO album_list (title, year, image) VALUES (?, ?, ?)';
    if ($stmt->prepare($sql)) {
        // bind parameters and execute statement
        $stmt->bind_param(
        'sss',
        $_POST['title'],
        $_POST['year'],
        $_POST['image']);
        $stmt->execute();
        $stmt->fetch();
        //Free resources for a second query
        $stmt->free_result();
        if ($stmt->affected_rows > 0) {
          $OK = true;
        }
      }
      // redirect if successful or display error
      if ($OK) {
        header('Location: http://localhost/3rdquarterproject/admin/album_upload.php');
        exit;
        } else {
         $error = $stmt->error;
      }
    }
  if (isset($_POST['insert'])) {
      require_once '../includes/connection.php';
      $sql2 = 'INSERT INTO track_list (track_name, track_length, album_id) VALUES (?, ?, ?)';
      $stmt = $conn->stmt_init();
      //2nd Prepared Statement
      if ($stmt->prepare($sql2)) {
        // bind parameters and execute statement
        $stmt->bind_param(
        'ssi',
        $_POST['track_name'],
        $_POST['track_length'],
        $_POST['album_id']);
        $stmt->execute();
        $stmt->fetch();
        //Free resources for a second query
        $stmt->free_result();
      if ($stmt->affected_rows > 0) {
        $OK2 = true;
      }
    }
      // redirect if successful or display error
      if ($OK2) {
          header('Location: http://localhost/3rdquarterproject/admin/album_upload.php');
          exit;
      } else {
          $error = $stmt->error;
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
     <h1>Upload New Track</h1>
    <form method="post">
      <label for="album_name">Album Name:</label><br>
      <input type="text" name="title"><br><br>

      <label for="title">Year:</label><br>
      <input type="text" name="year"><br><br>
      
      <label for="image">Image:</label><br>
      <select name='image' id='image'>
             <option value="">Select image</option>
             <?php
             require_once '../includes/connection.php';
             // Getting the the listed images
             $getImages = 'SELECT id, image FROM albumimage ORDER BY id';
             $images =  $conn->query($getImages);
             while ($row = $images->fetch_assoc()) { ?>
               <option value="<?= $row['image'] ?>"
                  <?php
                    if ($row['image']) {
                      echo 'selected';
                    }
                  ?>><?= $row['image'] ?></option>
            <?php } ?>
           </select><br><br>
        <input type="submit" name="upload" value="Upload Album"><br><br>
        </form>
    <form method="post">
      <label for="text">Track Info:</label>
     <table>
       <tr>
         <th>Track Title</th>
         <th>Track Length</th>
         <th>Album ID</th>
       </tr>
       <tr>
         <td><input type="text" name="track_name"></td>
         <td><input type="text" name="track_length" class="number" placeholder="0:00"></td>
         <td><select name='album_id' id='album_id'>
             <option value="">Select image</option>
             <?php
             require_once '../includes/connection.php';
             // Getting the the listed images
             $getImages = 'SELECT album_id, title FROM album_list ORDER BY album_id';
             $images =  $conn->query($getImages);
             while ($row = $images->fetch_assoc()) { ?>
               <option value="<?= $row['album_id'] ?>"
                  <?php
                    if ($row['album_id']) {
                      echo 'selected';
                      echo ' - ';
                      echo $row['title'];
                    }
                  ?>><?= $row['album_id'] ?></option>
            <?php } ?>
           </select></td>
       </tr>       
     </table><br>
      <input type="submit" name="insert" value="Submit Track">
    </form><br>
    <form method="post">
      <input type="submit" name="back" value="Go Back">
    </form>
   </body>
 </html>
