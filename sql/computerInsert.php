<?php include_once('../inc/connection.php'); ?>


<?php 

	
	$brand = $_POST['computerbrand'];
	$model = $_POST['computermodel'];
	$condition = $_POST['comcondition'];
	$problem = $_POST['comproble'];
	$other = $_POST['computerother'];
	$technician = $_POST['technician'];

	







	$sql3 = "INSERT INTO problemAll(brand,model,Item_condition,problem,other,category,technician,status) VALUES('$brand', '$model', '$condition','$problem','$other','Computer','$technician','Pending')";


if (!mysqli_query($connection, $sql3)) {
	echo "Cannot Insert";
}
else
{
	echo "Insert Successfully";
}

header("refresh:1; url=../home.php");   //to reload the home in one second


 ?>