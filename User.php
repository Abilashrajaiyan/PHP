<?php
include "connect.php";
if(isset($_POST['submit'])){
    $Person=$_POST["Person"];
    $email=$_POST["email"];
    $mobile=$_POST["mobile"];
    $password=$_POST["password"];

    $sql = "insert into `crud` (Person,email,mobile,password)
    values ('$Person', '$email', '$mobile', '$password')";

    $result = mysqli_query($con, $sql);
    if($result){
        echo "data inserted successfully";
    }else{
        die(mysqli_error($con));

    }
}
?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Crud operation</title>
</head>

<body>
    <div class="Container my-5">
        <form method="post">
            <div class="form-group">
                <label>Person</label>
                <input type="text" class="form-control" placeholder="Enter Your name" name="Person" autocomplete ="off">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="Email" class="form-control" placeholder="Enter Your Email" name="email" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Mobile</label>
                <input type="number" class="form-control" placeholder="Enter Your Number" name="mobile" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Enter Your password" name="password">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>


</body>

</html>