<?php
include 'db_connection.php';
session_start();

if (isset($_SESSION['user']) and isset($_GET['course_id'])) {
    $result = $conn->query("DELETE FROM course_users WHERE users_id=" . $_SESSION['user']['id']);
    $result = $conn->query("SELECT * FROM course_users WHERE course_id = " . $_GET['course_id']);
    echo $result->num_rows;
}
