<?php

include 'db_connection.php';


if (isset($_POST)) {

    $query = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $query->bind_param('s', trim($_POST['username']));
    $query->execute();

    $user = $query->get_result()->fetch_assoc();

    $password  = $user['password'];


    if (password_verify($_POST['password'], $password)) {

        $query = $conn->prepare("SELECT c.id FROM course c JOIN course_users cu on cu.course_id=c.id JOIN users u on u.id=cu.users_id  WHERE u.id= ? ");
        $query->bind_param('s', $user['id']);
        $query->execute();

        $courses = array();
        $result = $query->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                array_push($courses, $row['id']);
            }
        }

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
