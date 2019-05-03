<!DOCTYPE html>
<html lang="en">
<head>

	<?php include_once('header.php'); ?>
<?php include_once('inc/connection.php'); ?>


	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/mobilephone.css">
	<title>Computer</title>
</head>
<body>



<div class ="main" >

<div class="form" style="font-size:20px;" )><br>
<form action="sql/computerInsert.php" method="POST" >

	<p><B>Brand      :     </B> <input   type="   text" name="computerbrand" size="25" maxlength="30" required="required"></p><br><br>
	<p><B>Model      :     </B> <input   type="   text" name="computermodel" size="25" maxlength="20" required="required"></p><br><br>
	<p><B>Condition :</B> <input type="radio" name="comcondition" value="u1">     1st User   <input type="radio" name="comcondition" value="u2">       2nd User<input type="radio" name="comcondition" value="u3">       3rd User<input type="radio" name="comcondition" value="u4">       3+ User</p><br>
	
	

	<p ><B>Choise Your Problem :</B></p>





	<table class="table01" width="50%" style="font-size:15px" >
	<tr>
		<td><p><input type="radio" name="comproble" value="p1"><i class="fa fa-cog fa-spin"></i>The Blue Screen of Death </p></td><br><br>
		<td><p><input type="radio" name="comproble" value="p2"><i class="fa fa-cog fa-spin"></i>Internet not working </p></td>
		
		
	</tr>
	<tr>
		<td><p><input type="radio" name="comproble" value="p3"><i class="fa fa-cog fa-spin"></i>WI-FI not connecting or working Issue</p></td>
		<td><p><input type="radio" name="comproble" value="p4"><i class="fa fa-cog fa-spin"></i>Applications Running Slowly </p></td>		
		
	</tr>
	<tr>
		<td><p><input type="radio" name="comproble" value="p5"><i class="fa fa-cog fa-spin"></i>Heating Issue</p></td>
		<td><p><input type="radio" name="comproble" value="p6"><i class="fa fa-cog fa-spin"></i>Missing DLL Files</p></td>
		
	</tr>
	<tr>
		<td><p><input type="radio" name="comproble" value="p7"><i class="fa fa-cog fa-spin"></i>Malware</p></td>
		<td><p><input type="radio" name="comproble" value="p8"><i class="fa fa-cog fa-spin"></i>Games not working properly Issue.</p></td>


	</tr>
	<tr>
		<td><p><input type="radio" name=co"mproble" value="p9"><i class="fa fa-cog fa-spin"></i> Hard Drive Failure</p></td>
		<td><p><input type="radio" name="comproble" value="p10"><i class="fa fa-cog fa-spin"></i>Strange Noises</p></td>
	</tr>
	</table>


	<p><B>Other :</B><br><br><textarea name="computerother" cols="100" rows="5"></textarea></p>



		<p><b>Select Technician  : </b></p>
	<select name="technician" id="technician"  required style="width:250px;"><br>
		<option value="">Select</option>
		<option value="1">Mr.Steve</option>
		<option value="2">Mr.Jorhn</option>
		<option value="3">Ms.Sandy</option>
		<option value="4">Mr.Kelan</option>
		<option value="5">Mr.Simmon</option>

	</select>

	

	<!-- <p style="font-size: 14px;">Upload Your Device Picture In JPG Format</p><I><p style="font-size: 12px;">Not Compulsory</I></p> -->

	<!-- 
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
