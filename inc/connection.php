<?php 

	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$dbname = 'tecdoc';

	$connection = mysqli_connect('localhost' ,'root' ,'', 'tecdoc');

	//check connection  
	if (mysqli_connect_errno()) 
	{
		die('Database Connection Failed' . mysqli_connect_error());

	}
?>