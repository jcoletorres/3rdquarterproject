<?php
include '../includes/connection.php';
//Include from admin folder
include './includes/login.php';
login();

// initialize flags
$OK = false;
$deleted = false;
$stmt = $conn->stmt_init();

if (isset($_GET['id']) && !$_POST) {
    // prepare SQL query
    $sql = 'SELECT album_name, track_name, track_length FROM discography WHERE album_name = ?';
    if ($stmt->prepare($sql)) {
        // bind the query parameters
        $stmt->bind_param('s',
        $_GET['id']);
        // execute the query, and fetch the result
        $OK = $stmt->execute();
        // bind the result to variables
        $stmt->bind_result($albumname, $trackname, $tracklength);
        $stmt->fetch();
  }
}

if (isset($_POST['delete'])) {
    $sql = 'DELETE FROM discography WHERE album_name = ?';
    if ($stmt->prepare($sql)) {
        $stmt->bind_param('s', $_POST['album_name']);
        $stmt->execute();
        // if there's an error affected_rows is -1
        if ($stmt->affected_rows > 0) {
            $deleted = true;
        } else {
            $error = 'There was a problem deleting the record.';
        }
    }
}

if ($deleted || isset($_POST['cancel']) || !isset($_GET['id']))  {
    header('Location: http://localhost/3rdquarterproject/admin/album_list.php');
    exit;
}

// if any SQL query fails, get the error message
if (isset($stmt) && !$OK && !$deleted) {
    $error .= $stmt->error;
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Delete Album</title>
  </head>
  <body>
    <h1>Delete Album</h1>
    <?php
    if (isset($error) && !empty($error)) {
        echo "<p>Error: $error</p>";
    }
    if($_GET['id'] == '') { ?>
        <p>Invalid request: record does not exist.</p>
    <?php } else { ?>
        <p>Please confirm that you want to delete the following album. This action cannot be undone.</p>
        <p><?php echo $albumname; } ?></p>
    <form method="post" action="album_delete.php">
        <p>
            <?php if(isset($albumname)) { ?>
                <input type="submit" name="delete" value="Confirm Deletion">
            <?php } ?>
            <input name="cancel" type="submit" value="Cancel">
            <?php if(isset($albumname)) { ?>
                <input name="album_name" type="hidden" value="<?= $albumname; ?>">
            <?php } ?>
        </p>
    </form>
  </body>
</html>
