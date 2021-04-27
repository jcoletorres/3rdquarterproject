<?php
if (!is_readable($userlist)) {
    $error = 'Login unavailable. Please try later.';
} else {
    $file = fopen($userlist, 'r');
    while (!feof($file)) {
        $data = fgetcsv($file);
        // ignore if the first element is empty
        if (empty($data[0])) {
            continue;
        }
        // if username and password match, create session variable,
        // regenerate the session ID, and break out of the loop
        if ($data[0] == $username && password_verify($password, $data[1])) {
            $_SESSION['authenticated'] = 'The Black Keys';
            $_SESSION['start'] = time();
            session_regenerate_id();
            break;
        }
    }
    fclose($file);
    // if the session variable has been set, redirect
    if (isset($_SESSION['authenticated'])) {
        header("Location: $redirect");
        exit;
    } else {
        $error = 'Invalid username or password.';
    }
}
