<?php

session_start();
require('functions/user.php');

//header('Content-type: application/json');

if (isset($_POST) && isset($_POST['email']) && isset($_POST['password'])) {
    // Attempt login
    if (login($_POST['email'], $_POST['password'])) {
       
    } else {
        // Login has failed
    }
}

function login($email, $password) {

    $user = getUserEmail($email);
    // If user exists
    if ($user != null) {
        if (hashPassword($password) == $user['password']) {
            // Connect successfull
            $_SESSION['id_user'] = $user['id_user'];
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}
?>
