<?php
use authenticate\CheckPassword;
require_once __DIR__ . '/authenticate/CheckPassword.php';

$usernameMinChars = 5;
$errors = [];
if (strlen($username) < $usernameMinChars) {
    $errors[] = "Username must be at least $usernameMinChars characters.";
}
$checkPwd = new CheckPassword($password, 8);
if (!$checkPwd->check()) {
    $errors = array_merge($errors, $checkPwd->getErrors());
}
if ($password != $retyped) {
    $errors[] = "Your passwords don't match.";
}
if (!$errors) {
    // hash password using default algorithm
    $password = password_hash($password, PASSWORD_DEFAULT);
    // open the file in append mode
    $file = fopen($userfile, 'a+');
    // if filesize is zero, no names yet registered
    // so just write the username and password to file as CSV
    if (filesize($userfile) === 0) {
        fputcsv($file, [$username, $password]);
        $result = "$username registered.";
    } else {
        // if filesize is greater than zero, check username first
        // move internal pointer to beginning of file
        rewind($file);
        // loop through file one line at a time
        while (($data = fgetcsv($file)) !== false) {
            if ($data[0] == $username) {
                $result = "$username taken - choose a different username.";
                break;
            }
        }
        // if $result not set, username is OK
        if (!isset($result)) {
            // insert new CSV record
            fputcsv($file, [$username, $password]);
            $result = "$username registered.";
        }
        // close the file
        fclose($file);
    }
}
