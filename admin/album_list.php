<?php
require_once '../includes/connection.php';
require_once '../includes/utility_funcs.php';
include './includes/login.php';
login();
$sql = 'SELECT DISTINCT album_name FROM discography';
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Album List</title>
  </head>
  <body>
    <h1>Album List</h1>
    <div name="coverupload">
      <a href="album_cover.php">Upload New Cover</a>
    </div>
    <div name="uploadalbum">
      <a href="album_upload.php">Insert New Tracks</a>
    </div><br>
    <table>
      <tr>
        <th>Album</th>
        <th>&nbsp;</th>
      </tr>
      <tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <td><?= $row['album_name'] ?></td>
        <td><a href="album_delete.php?id=<?= $row['album_name']?>">DELETE</a></td>
      </tr>
      <?php } ?>
    </table><br>
    <form method="post">
      <input type="submit" name="logout" value="Log Out">
    </form>
  </body>
</html>
