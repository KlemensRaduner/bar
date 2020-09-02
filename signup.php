<?php
include 'db_connection.php';
session_start();

if (isset($_SESSION['user']) and isset($_GET['id'])) {
    $result = $conn->query("INSERT INTO course_users VALUES (" . $_SESSION['user']['id'] . "," . $_GET['id'] . ")");
    var_dump($result);
}


//header("location:javascript://history.go(-1)");
