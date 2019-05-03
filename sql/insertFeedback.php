<?php include_once('../inc/connection.php'); ?>

<?php 
	
	$firstName = $_POST['fname'];
	$lastName = $_POST['lname'];
	$country   = $_POST['country'];
	$feedback =  $_POST['feedback'];


$sql = "INSERT INTO feedback (fname, lname, country, feedback) VALUES ('$firstName', '$lastName','$country', '$feedback' )";


if (!mysqli_query($connection, $sql)) {
	echo "Cannot Insert";
}
else
{
	echo "Insert Successfully";
}

header("refresh:1; url=../feedback.php");   //to reload the feedback page in one second

 ?>









<?php mysqli_close($connection); ?>