<?php

require 'inc/config.php';


if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<?php

$firstname = $_POST['first'];
$lastname = $_POST['last'];
$emailAddr =$_POST['email'];
$birday = $_POST['bday'];
$password = $_POST['password'];
$con_pass  = $_POST['con_pass'];

$sql = "INSERT INTO customer_acc(first_name,last_name,email_add,date_birth,pass,con_password) VALUES ('$firstname','$lastname','$emailAddr','$birday','$password','$con_pass')";

if (mysqli_query($con, $sql))
{
	echo "inserted successfully";
    header("refresh:0.5; url=home.php");
}
else
{
   echo "Error: " . $sql . "<br>" . mysqli_error($con);
}


mysqli_close($con);

?>