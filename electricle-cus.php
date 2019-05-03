<!DOCTYPE html>
<html lang="en">
<head>


	<?php include_once('header.php'); ?>
 <?php include_once('inc/connection.php'); ?>


	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/mobilephone.css">
	<title>Electrical</title>
</head>
<body>



<div class ="main" >

<div class="form" style="font-size:20px;" )><br>
<form action="sql/electricleInsert.php" method="POST" >

	<p><B>Brand      :     </B> <input   type="   text" name="electriclebrand" size="25" maxlength="30" required="required"></p><br><br>

	<p><B>Model      :     </B> <input   type="   text" name="electriclemodel" size="25" maxlength="20" required="required"></p><br><br>

	<p><B>Condition :</B> <input type="radio" name="elecondition" value="u1">     1st User   <input type="radio" name="elecondition" value="u2">       2nd User<input type="radio" name="elecondition" value="u3">       3rd User<input type="radio" name="elecondition" value="u4">       3+ User</p><br>
	
	

	<p ><B>Choise Your Problem :</B></p>





	<table class="table01" width="50%" style="font-size:15px" >
	<tr>
		<td><p><input type="radio" name="eleproble" value="p1"><i class="fa fa-cog fa-spin"></i>Light Switches Not Working Properly</p></td><br><br>
		<td><p><input type="radio" name="eleproble" value="p2"><i class="fa fa-cog fa-spin"></i>Circuit Overload</p></td>
		
		
	</tr>
	<tr>
		<td><p><input type="radio" name="eleproble" value="p3"><i class="fa fa-cog fa-spin"></i> High Electrical Bill</p></td>
		<td><p><input type="radio" name="eleproble" value="p4"><i class="fa fa-cog fa-spin"></i>Lights Too Bright or Dim</p></td>		
		
	</tr>
	<tr>
		<td><p><input type="radio" name="eleproble" value="p5"><i class="fa fa-cog fa-spin"></i>Heating Issue</p></td>
		<td><p><input type="radio" name="eleproble" value="p6"><i class="fa fa-cog fa-spin"></i>Battery Issue</p></td>
		
	</tr>
	<tr>
		<td><p><input type="radio" name="eleproble" value="p7"><i class="fa fa-cog fa-spin"></i>Tripping-Breaker Problems</p></td>
		<td><p><input type="radio" name="eleproble" value="p8"><i class="fa fa-cog fa-spin"></i>Common Electrical Problems With Switches</p></td>


	</tr>
	<tr>
		<td><p><input type="radio" name="eleproble" value="p9"><i class="fa fa-cog fa-spin"></i>Lights Flicker When It's Windy </p></td>
		<td><p><input type="radio" name="eleproble" value="p10"><i class="fa fa-cog fa-spin"></i>Too Few Oulets</p></td>
	</tr>
	</table>


	<p><B>Other :</B><br><br><textarea name="electricleother" cols="100" rows="5"></textarea></p>

	<!-- <p style="font-size: 14px;">Upload Your Device Picture In JPG Format</p><I><p style="font-size: 12px;">Not Compulsory</I></p>

	
	<input type="file" name="deviceimg" ><br><br>
	
	<input type="submit" value="Upload"><br><br>
		 -->
	<p><b>Select Technician  : </b></p>
	<select name="technician" id="technician"  required style="width:250px;"><br>
		<option value="">Select</option>
		<option value="1">Mr.Deven</option>
		<option value="2">Ms.Lisa</option>
		<option value="3">Mr.Sinson</option>
		<option value="4">Mr.Richerd</option>
		<option value="5">Ms.Lessna</option>

	</select>

	




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
