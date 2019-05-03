




<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once('header.php'); ?>
<?php include_once('inc/connection.php'); ?>

	<meta charset="UTF-8">
	<link rel="stylesheet"  type="text/css"href="css/fb.css">
	
	<title>About Us</title>


</head>
<style>.view .loading{
	text-align: center;
	/*margin-left: 325px;*/
	margin-top: 5px;
}
.feedBackForm{
	border: 1px solid black;
	
}
.feedBackForm{
	margin-left: 250px;
	margin-right: 350px;
}
</style>
<body>

<div class="main">

	<br>
	

<div class="feedback">
	


<form action="sql/insertFeedback.php" method="POST" class="feedBackForm" onSubmit= "show_alert();" >
	<h2>Feedback</h2>
	<label id="labelid"> First Name</label> <br>
	<input type="text"  name="fname" id="fname" placeholder="Your name" required="required"><br>

	<label id="labelid"> Last Name</label><br>
	<input type="text" name="lname" id="lname" placeholder="Your last name"  required="required"><br>

	<label id="labelid"> Country</label><br>
	<select name="country" id="country"  required><br>
		<option value="">Select</option>
		<option value="sl">Sri Lanka</option>
		<option value="india">India</option>
		<option value="japan">Japan</option>
		<option value="uk">UK</option>
		<option value="other">Other</option>

	</select>
<br>

	<label id="labelid">Feedback</label><br>
	<textarea name="feedback" placeholder="Your feedback...." cols="30" rows="10"  required="required"></textarea><br>
	<input type="submit" value="Submit"><br>

</form>

<script>

function show_alert() {
  alert ("Thank You");
    
 
}



</script>


</div> 

<!-- feedback -->

<button id="Overview">Overview</button>
<button id="ContactUs">Contact Us</button>





<!-- Overview and Contact Us  -->


</div> <!-- main -->
<div class="view">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



<script type="text/javascript" src="js/ContactUsLoad.js">
	
</script>



</div><!-- view -->





</body>



</html>
<?php include_once('footer.php'); ?>


<?php mysqli_close($connection); ?>



