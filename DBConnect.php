<?php
$server = "localhost";
$username = "root";
$password = "Samsungabilash04";
$dbname = "abidb";
$res = mysqli_connect($server, $username,$password, $dbname);
if(mysqli_connect_errno()){
    echo"failed to connect";
    exit();
}else{
    echo"Your connection is sucessfull!!";
}
?>