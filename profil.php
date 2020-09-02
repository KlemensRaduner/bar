<html>

<?php

include 'db_connection.php';

session_start();
echo $_SESSION['user']['username'];



if (isset($_SESSION['user'])) {
    $result = $conn->query("SELECT * FROM course");

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div>" . $row['name'] . "</div>";
        }
    }
}


?>

</html>