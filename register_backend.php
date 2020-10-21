<?php

include 'db_connection.php';

if (isset($_POST)) {

    registerUser($_POST["username"], $_POST["password"]);

    header('Location:index.php?registered');
} else {
    header('Location:index.php');
    die();
}
