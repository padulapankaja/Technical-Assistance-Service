<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "iwt_project";

$con = mysqli_connect($server,$username,$password,$database);

if($con->connect_error){
    die("connection failed:".$con->connect_error);
}


?>
