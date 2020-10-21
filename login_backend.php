<?php

include 'db_connection.php';


if (isset($_POST)) {

    if (testLogin($_POST['username'], $_POST['password'])) {
        $user = getUserByName($username);
        $courses = getCoursesForUser($user['id']);
        session_start();
        $_SESSION['user'] = $user;
        $_SESSION['courses'] = $courses;
        header('Location:index.php#mixology_events');
        die();
    } else {
        header('Location:login.php?loginfailed');
        die();
    }
}
