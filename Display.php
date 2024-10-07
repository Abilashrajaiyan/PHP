<?php 
include "connect.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="User.php" class="text-light">Add User</a>
        
            </button>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">person</th>
      <th scope="col">email</th>
      <th scope="col">mobile</th>
      <th scope="col">password</th>
    </tr>
  </thead>
  <tbody>

   <?php
   $sql  = "select * from `crud`";
   $result = mysqli_query($con,$sql);
   
   while( $row = mysqli_fetch_assoc($result)
   ){
    $Person = $row['Person'];
    $email = $row['email'];
    $mobile = $row['mobile'];
    $password = $row['password'];
    echo ' <tr>
      <th scope="row">'.$Person.'</th>
      <td>'.$email.'</td>
      <td>'.$mobile.'</td>
      <td>'.$password.'</td>
    </tr>';
}
   ?>
    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table>
    </div>
    
</body>
</html>