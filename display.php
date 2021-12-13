<?php
include 'connect.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<form method="post" action="user.php">
        <h1>SEARCH FOR RECORD</h1>
        <input type="text" name = "search"/>
        <input type="submit" name ="submit" value="Search"/>
    </form>
<div class="container">
<button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add user</a>

</button>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">S1 No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>

    </tr>
  </thead>
  <tbody>



  <?php

$sql="Select * from `crud`";
$result=mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $mobile=$row['mobile'];
        $password=$row['password'];
        echo'<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        <td>'.$password.'</td>
        <td>
    <button class="btn btn-primary"><a href="update.php?
    updateid='.$id.'"class="text-light">Update</a></button>
    <button class="btn btn-danger"><a href="delete.php?
    deleteid='.$id.'"class="text-light">Delete</a></button>
    </td>
      </tr>';
    }
    
}


?>
<a href = "oe6.html">Logout</a>


    
  </tbody>
</table>
</div>


</body>
</html>