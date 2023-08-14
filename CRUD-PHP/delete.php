<?php

include 'connection.php';
 if (isset($_GET['id'])){
 $id = $_GET['id'];

 $query = "DELETE FROM `task` WHERE `task_id`=$id";
 $result = mysqli_query($conn, $query);
 if ($result){
    header("Location: review.php");
}else{
    echo("not deleted");
}
 }

?>
