<?php

include 'db_connection.php';

if (isset($_POST)) {

    $query = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");

    $username = trim($_POST["username"]);
    $hashedpw = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $query->bind_param('ss', $username, $hashedpw);
    $query->execute();

    header('Location:index.php?registered');
} else {
    header('Location:index.php');
    die();
}
