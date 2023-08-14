<!-- connection.php -->
<?php

$db_host="localhost";
$db_user="root";
$db_password="";
$database = "tasks"; // You need to provide the actual database name

// Create connection
$conn = new mysqli($db_host , $db_user, $db_password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
