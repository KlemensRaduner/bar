<?php
$servername = "localhost";
$username = "bar";
$password = "VPJmQbuNARboL2F4";
$database = "bar";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8");


function getCourses()
{
    global $conn;
    $courses = array();
    $courses_result = $conn->query("SELECT * FROM course WHERE open=true ORDER BY date");
    if ($courses_result->num_rows > 0) {
        while ($courses_row = $courses_result->fetch_assoc()) {
            array_push($courses, $courses_row);
        }
    }
    return $courses;
}

function getUsersInCourse($courseId)
{
    global $conn;
    $users = array();
    $users_result = $conn->query("SELECT * FROM course_users WHERE course_id = " . $courseId);
    while ($users_row = $users_result->fetch_assoc()) {
        array_push($users, $users_row);
    }
    return $users;
}

function isUserInList($users)
{
    $found = false;
    foreach ($users as $user) {
        if ($user['users_id'] == $_SESSION['user']['id']) {
            $found = true;
            break;
        }
    }
    return $found;
}

function getUserByName($name)
{
    global $conn;
    $query = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $query->bind_param('s', trim($_POST['username']));
    $query->execute();
    return $query->get_result()->fetch_assoc();
}

function getCoursesForUser($userId)
{
    global $conn;
    $query = $conn->prepare("SELECT c.id FROM course c JOIN course_users cu on cu.course_id=c.id JOIN users u on u.id=cu.users_id  WHERE u.id= ? ");
    $query->bind_param('s', $userId);
    $query->execute();

    $courses = array();
    $result = $query->get_result();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            array_push($courses, $row['id']);
        }
    }
    return $courses;
}

function registerUser($username, $password)
{
    global $conn;
    $query = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");

    $username = trim($username);
    $hashedpw = password_hash($password, PASSWORD_DEFAULT);

    $query->bind_param('ss', $username, $hashedpw);
    $query->execute();
}

function testLogin($username, $password)
{
    $user = getUserByName($username);
    $correct_password = $user['password'];
    return password_verify($password, $correct_password);
}
