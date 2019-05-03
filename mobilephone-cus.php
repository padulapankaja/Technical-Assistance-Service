<!DOCTYPE html>
<html lang="en">
<head>

	<?php include_once('header.php'); ?>
<?php include_once('inc/connection.php'); ?>


	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/mobilephone.css">
	<title>Mobile Phones</title>
</head>
<body>



<div class ="main" >

<div class="form" style="font-size:20px;" )><br>


<form action="sql/mobileInsert.php" method="POST">  <!--FORM START HERE-->

	<p><B>Brand      :     </B> <input   type="   text" name="mobilebrand" size="25" maxlength="30" required="required"></p><br><br>
	<p><B>Model      :     </B> <input   type="   text" name="mobilemodel" size="25" maxlength="20" required="required"></p><br><br>
	<p><B>Condition :</B> <input type="radio" name="mcondition" value="u1">     1st User   <input type="radio" name="mcondition" value="u2">       2nd User<input type="radio" name="mcondition" value="u3">       3rd User<input type="radio" name="mcondition" value="u4">       3+ User</p><br>
	
	

	<p ><B>Choise Your Problem :</B></p>





	<table class="table01" width="50%" style="font-size:15px" >
	<tr>
		<td><p><input type="radio" name="mproble" value="p1"><i class="fa fa-cog fa-spin"></i>Poor battery life </p></td><br><br>
		<td><p><input type="radio" name="mproble" value="p2"><i class="fa fa-cog fa-spin"></i>Internet not working </p></td>
		
		
	</tr>
	<tr>
		<td><p><input type="radio" name="mproble" value="p3"><i class="fa fa-cog fa-spin"></i>WI-FI not connecting or working Issue</p></td>
		<td><p><input type="radio" name="mproble" value="p4"><i class="fa fa-cog fa-spin"></i>Device Keyboard not working </p></td>		
		
	</tr>
	<tr>
		<td><p><input type="radio" name="mproble" value="p5"><i class="fa fa-cog fa-spin"></i>Heating Issue</p></td>
		<td><p><input type="radio" name="mproble" value="p6"><i class="fa fa-cog fa-spin"></i>Battery Issue</p></td>
		
	</tr>
	<tr>
		<td><p><input type="radio" name="mproble" value="p7"><i class="fa fa-cog fa-spin"></i>Screen will only get replaced with LCD if Broken Issue</p></td>
		<td><p><input type="radio" name="mproble" value="p8"><i class="fa fa-cog fa-spin"></i>Games not working properly Issue.</p></td>


	</tr>
	<tr>
		<td><p><input type="radio" name="mproble" value="p9"><i class="fa fa-cog fa-spin"></i>Flashlight not working in Camera </p></td>
		<td><p><input type="radio" name="mproble" value="p10"><i class="fa fa-cog fa-spin"></i>Space Not Enough Issue</p></td>
	</tr>
	</table>


	<p><B>Other :</B><br><br><textarea name="mobileother" cols="100" rows="5"></textarea></p>



		<p><b>Select Technician  : </b></p>
	<select name="technician" id="technician"  required="required" style="width:250px;"><br>
		<option value="">Select</option>
		<option value="1">Mr.RayaMs.</option>
		<option value="2">Ms.Shenu</option>
		<option value="3">Mr.Joshep</option>
		<option value="4">Ms.Steffeny</option>
		<option value="5">Mr.Peter</option>

	</select>

	


	<!-- <p style="font-size: 14px;">Upload Your Device Picture In JPG Format</p><I><p style="font-size: 12px;">Not Compulsory</I></p>

	
	<input type="file" name="deviceimg" ><br><br>
	
	<input type="submit" value="Upload"><br><br> -->


	




<div class="information">
		<p><span style="color:black;font-weight:bold">Please fill this information correctly becasuse we are always try to give the  best solution for your problems</span></p>

</div>
</div>

</div><!-- information -->
<input class="btnSubmit"  type="submit" value="Submit">
</form>
</div><!-- form -->









</div><!-- container -->	






</body>
</html>
<?php include_once('footer.php'); ?>


<?php mysqli_close($connection); ?>
