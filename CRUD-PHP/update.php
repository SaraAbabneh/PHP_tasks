<?php 
include_once 'connection.php';

$id = $_GET['id'];

if (isset($_POST['submit'])) {
    $task_name = mysqli_real_escape_string($conn, $_POST['task_name']);
    $task_desc = mysqli_real_escape_string($conn, $_POST['description']);
    $task_status = mysqli_real_escape_string($conn, $_POST['status']);
    $formatted_date = mysqli_real_escape_string($conn, $_POST['task_date']);

    $query = "UPDATE task SET task_name='$task_name', description='$task_desc', status='$task_status', task_date='$formatted_date' WHERE task_id='$id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: review.php");
    } else {
        echo "Not Updated";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <title>Update Task</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  
<div class="container mt-5">
    <div class="row justify-content-center">
        <h2>UPDATE</h2>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form method="post">
                <div class="form-group">
                    <label for="task_name">Task Name</label>
                    <input type="text" name="task_name" id="task_name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="task_desc">Task Description</label>
                    <input type="text" name="description" id="task_desc" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="task_status">Task Status</label>
                    <input type="text" name="status" id="task_status" class="form-control" required>
                </div>
                <!-- Add a submit button to submit the form -->
                <button type="submit" name="submit" class="btn btn-primary">Submit UPDATE</button>
            </form>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
