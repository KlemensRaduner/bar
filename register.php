<?php

include 'db_connection.php';

if (isset($_POST)) {

    $query = $conn->prepare("INSERT INTO users (username, password, salt) VALUES (?, ?, ?)");

    $username = trim($_POST["username"]);
    $salt = uniqid(mt_rand(), true);
    $hashedpw = password_hash($_POST["password"] . $salt, PASSWORD_BCRYPT);

    $query->bind_param('sss', $username, $hashedpw, $salt);
    $query->execute();

    header('Location:index.php?registered');
} else {
    header('Location:index.php');
    die();
}
