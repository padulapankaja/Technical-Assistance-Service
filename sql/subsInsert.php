<?php include_once('../inc/connection.php'); ?>

<?php 

	$name = $_POST['newsname'];
	$email = $_POST['newsemail'];
	



$sql5 = "INSERT INTO subscribe_list (name,email) VALUES ('$name', '$email')";  


// $subscribe = $_POST['subscribe'];




//     for ($i = 0; $i <count($subscribe);$i++){
//         if(!empty($subscribe)){


//         $query = "INSERT INTO subscribe_list(checking) VALUES ('".$subscribe[$i]."')";
//        }
//    }











if (!mysqli_query($connection, $sql5)) {
	echo "Cannot Insert";
}
else
{
	echo "Insert Successfully";
}

header("refresh:0.2; url=../home.php");   //to reload the home in one second



 ?>