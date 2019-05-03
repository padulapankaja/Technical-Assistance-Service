<?php include_once('../inc/connection.php'); ?>

<?php 

	$brand =  $_POST['mobilebrand'];
	$model =  $_POST['mobilemodel'];
	$other =  $_POST['mobileother'];
		 $problem = $_POST['mobileother'];

	$other = $_POST['mobileother'];
	
	$technician = $_POST['technician'];
$condition = $_POST['mcondition'];
	
	
	
	
// $sql2 = "INSERT INTO mobile (brand,model,condition,problem,other) VALUES ('$brand', '$model','$condition', '$problem','$other')";  //image not include 
		
$sql2 = "INSERT INTO problemAll(brand,model,Item_condition,problem,other,category,technician,status) VALUES('$brand', '$model', '$condition','$problem','$other','Mobile Phone','$technician','Pending')";
  //image not include 


if (!mysqli_query($connection, $sql2)) {
	echo "Cannot Insert";
}
else
{
	echo "Insert Successfully";
}

header("refresh:1; url=../home.php");   //to reload the home in one second

 ?>















<?php mysqli_close($connection); ?>