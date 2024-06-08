

<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Realtime Chat App</title>
  <!-- <link rel="stylesheet" href="style.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

<?php

    require('php\config.php');
   
    $sql = "SELECT `user_id`, `unique_id`, `fname`, `lname`, `email` FROM `users`";
    $result = mysqli_query($conn, $sql);


?>
<div class="wrapper">
    <section class="users">
      <header style="font-size: 16px;">Welcome to Admin Panel</header>
        <div class="content"> 
    <!-- <div class="admin_container">
        <h1>Welcome to Admin Page</h1>
    </div>-->
    

    <!-- <div class="tab"> -->
        <table style="width:100%">
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Action</th>
            </tr>

            <?php while($row = mysqli_fetch_assoc($result)) { ?>
                <tr style="margin:5px">
                    <td><?php echo $row['user_id']; ?></td>
                    <td><?php echo $row['fname']; ?></td>
                    <td><?php echo $row['lname']; ?></td>
                    <td>
                        <form method="post" action="admin.php">
                            <input type="hidden" name="id" value="<?php echo $row['user_id']; ?>">
                            <input type="submit" name="submit" value="Remove" class="btn btn-outline-danger btn-sm">
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </table>
    <!-- </div> -->

</div>
    </section>
  </div>

    
</body>

<?php
mysqli_close($conn);
?>

<?php
// session_start();

require('php\config.php');

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    // echo $id;

    // Delete user from database
    $sql = "DELETE FROM `users` WHERE user_id=$id";
    mysqli_query($conn, $sql);
    // header("location: admin.php");  
    mysqli_close($conn);
   

    // Close connection
}


?>