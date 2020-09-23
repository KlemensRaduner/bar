<?php
include 'db_connection.php';
session_start();

if (isset($_SESSION['user']) and isset($_GET['course_id'])) {
    $result = $conn->query("INSERT INTO course_users VALUES (" . $_SESSION['user']['id'] . "," . $_GET['course_id'] . ")");
    $result = $conn->query("SELECT * FROM course_users WHERE course_id = " . $_GET['course_id']);
    echo $result->num_rows;
}

header('Location: index.php#mixology_events');
