<?php
  include 'connect.php';
  $ID=$_GET['updateid'];

  $sql="select * from crud where id=$ID";
  $result=mysqli_query($con,$sql);
  $row=mysqli_fetch_assoc($result);
  $name=$row['Name'];
  $department=$row['Department'];
  $email=$row['Email'];
  $mobile=$row['Mobile'];

  if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $department=$_POST['department'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];

    $sql="update `crud` set id=$ID,name='$name',department='$department',email='$email',mobile='$mobile'

    where id=$ID";

    $result=mysqli_query($con,$sql);
    if ($result){
      header('location:display.php');
    }else{
      die(mysqli_errno($con));
    }
  }


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Crud Operation</title>
  </head>
  <body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <level>Name</level>
                <input type="text" class="form-control" placeholder="Enter Your Name" name="name" autocomplete="off" value=<?php echo $name; ?>>
            </div>
            <div class="form-group py-3">
                <level>Department</level>
                <input type="text" class="form-control" placeholder="Enter Your Department" name="department" autocomplete="off" value=<?php echo $department; ?>>
            </div>
            <div class="form-group">
                <level>Email</level>
                <input type="text" class="form-control" placeholder="Enter Your Email" name="email" autocomplete="off" value=<?php echo $email; ?>>
            </div>
            <div class="form-group py-3">
                <level>Phone Number</level>
                <input type="text" class="form-control" placeholder="Enter Your Phone Number" name="mobile" autocomplete="off" value=<?php echo $mobile; ?>>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  </body>
</html>