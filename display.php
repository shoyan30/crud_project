<?php

include 'connect.php';

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    

    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

  </head>
  <body>
        <div class="container">
            <button class="btn btn-primary my-5"><a href="user.php"class="text-light fs-2">Add Student</a>

            </button>
            <table class="table caption-top border border-primary">
  
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Department</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>

        <?php
        
        $sql="select * from `crud`";
        $result=mysqli_query($con,$sql);
        if ($result){
            while( $row=mysqli_fetch_assoc($result)){
                $ID=$row['ID'];
                $name=$row['Name'];
                $department=$row['Department'];
                $email=$row['Email'];
                $mobile=$row['Mobile'];

                echo '
                <tr>
                <th scope="row">'.$ID.'</th>
                <td>'.$name.'</td>
                <td>'.$department.'</td>
                <td>'.$email.'</td>
                <td>'.$mobile.'</td>

                <td>
                    <button class="btn btn-primary"><a class="text-light"href="update.php?updateid='.$ID.'">Update</a></button>

                    <button class="btn btn-primary"><a class="text-light"href="delete.php?deleteid='.$ID.'">Delete</a></button>
                </td>
                
              </tr>
                
                ';
            }
        }
        
        
        ?>

            
  </tbody>
</table>
        </div>  
  </body>
</html>