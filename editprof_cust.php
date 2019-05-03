<?php
require 'config.php';

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST["update"])){
    $first = $_POST["first"];
    $last = $_POST["last"];
    $email = $_POST["email"];
    $bday = $_POST["bday"];



if(empty($first) || empty($last) || empty($email) || empty($bday)) {
    if(empty($first)) {
        echo "<font color='red'> First name field is empty.</font><br/>";
    }

    if(empty($last)) {
        echo "<font color='red'> Last name field is empty.</font><br/>";
    }

    if(empty($email)) {
        echo "<font color='red'>Email field is empty.</font><br/>";
    }

    if(empty($bday)) {
        echo "<font color='red'>Birthday field is empty.</font><br/>";
    }

}
else {
    $sql = "UPDATE customer_acc SET first_name = '$first', last_name = '$last' , email_add = '$email' , date_birth = '$bday' ";


    if ($con->query($sql) === TRUE) {
        echo "Updated successfully";
    }
    else {
        echo "Error updating record: " . $con->error;
    }
}}
if(isset($_POST["delete"])){
    $delete_sql = "Delete from customer_acc where id = 2";
    if ($con->query($delete_sql) === TRUE) {
        echo "Deleted successfully";
    }
    else {
        echo "Error deleting record: " . $con->error;
    }

}


$con->close();

?>