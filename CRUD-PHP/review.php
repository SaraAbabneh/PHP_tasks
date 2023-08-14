
<!-- review.php -->

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <a href="form.html"><button class="btn btn-primary ml-5 mt-5"> ADD Taske </button></a>
  <table class="table mt-2 ml-5" style="width:80%">
  <thead>
    <tr>
      <th scope="col">Task -ID</th>
      <th scope="col">Task-Name</th>
      <th scope="col">Task-Description</th>
      <th scope="col">Task-Date</th>
    </tr>
  </thead>
  <tbody>
        <?php
            include 'connection.php';
            $select = "SELECT * FROM task";  // Corrected the variable name

            $result = mysqli_query($conn, $select);

        

            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . $row['task_id'] . '</td>';  // Replace with actual column names from your task table
                echo '<td>' . $row['task_name'] . '</td>';
                echo '<td>' . $row['description'] . '</td>';
                echo '<td>' . $row['task_date'] . '</td>';
                echo '<td>' . $row['status'] . '</td>';
                echo "<td><button type='button' class='btn btn-success'><a style='color:white;' href='update.php?id=". $row["task_id"]. "' >Update</a></button></td>";
                echo "<td><button type='button' class='btn btn-danger'><a style='color:white;' href='delete.php?id=" . $row["task_id"] . "'>Delete</a></button></td>";
                
                echo '</tr>';

            }

           
        ?>
     </tbody>
    </table>



      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>