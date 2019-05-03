<?php include_once('../inc/connection.php'); ?>

<?php 

	

	$brand = $_POST['electriclebrand'];
	$model = $_POST['electriclemodel'];
	 $condition = $_POST['elecondition'];
	 $problem = $_POST['eleproble'];
	$other = $_POST['electricleother'];
	$technician = $_POST['technician'];


	$sql4 = "INSERT INTO problemAll(brand,model,Item_condition,problem,other,category,technician,status) VALUES('$brand', '$model', '$condition' ,'$problem','$other', 'Electrical', '$technician','Pending')";


if (!mysqli_query($connection, $sql4)) {
	echo "Cannot Insert";
}
else
{
	echo "Insert Successfully";
}

header("refresh:1; url=../home.php");   //to reload the home in one second

 ?>