		<?php include_once('header.php'); ?>
<?php include_once('inc/connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" type="text/css" href="css/hwt.css">

	<meta charset="UTF-8">
	<title>How To</title>
</head>
<style>


</style>
<body>
	
	<div class="main">

		<div id="title">
			<br><br><br>
		<h2>We Help You</h2>

	<table class="intoTable">
		<th>
			<td>
				<button id="Bvideos">Videos  <i class="fa fa-youtube-play" style="font-size:18px; color:red"></i></button>
		<h3>There are some Videos for you...<br>They are help you to solve some simple probles</h3>
			</td>
			<td>
				<button id="Bpictures">Pictures  <i class="fa fa-file-picture-o" style="font-size:18px;color:red"></i></button>
		<h3>There are some Pictures for you...<br>They are help you to solve some simple probles</h3>
	
			</td>
			<td>
				<button id="Bpdf">PDF  <i class="fa fa-file-pdf-o" style="font-size:18px;color:red"></i></button>
		<h3>There are some PDF for you...<br>They are help you to solve some simple probles</h3>

			</td>
		</th>

	</table>




		
		
		</div><!-- titile -->


			<div class="content">
	


	



			</div>


		</div><!-- content -->





</div><!-- main -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



<script type="text/javascript" src="js/howtoLoad.js">
	
</script>


</body>
<?php include_once('footer.php'); ?>
<?php mysqli_close($connection); ?>
</html>