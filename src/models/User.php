<?php

include './config/db.php';

if ($_SERVER['REQUEST_METHOD' == "POST"]) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];

    if ($password != $confirm_password) {
        echo "Password does not match";
    } else {
        registerUser($conn, $username, $email, $password);
        echo "Registered user : $username";
    }
}
