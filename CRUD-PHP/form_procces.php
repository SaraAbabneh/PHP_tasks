<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $task_name = $_POST['task_name'];
    $task_desc = $_POST['description'];
    $task_status = $_POST['status'];

    $taske_date = new \DateTime();
    $formatted_date = $taske_date->format('Y-m-d H:i:s');

    // Use prepared statements to prevent SQL injection
    $sql = "INSERT INTO task (task_name, description, task_date, status) VALUES ('$task_name', '$task_desc','$formatted_date','$task_status')";
    $stmt = $conn->prepare($sql);

    if ($stmt->execute()) {
        echo "Data inserted successfully" . "<br>";
        header('location:review.php');
        exit();
    } else {
        echo "Error | Reason: " . $stmt->error . "<br>";
    }

    $stmt->close();
    $conn->close();
}
?>
