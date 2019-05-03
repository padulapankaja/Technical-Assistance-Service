<?php include_once('header.php'); ?>
<?php include_once('inc/connection.php'); ?>


<title>Home</title>
<head>
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<script type="text/javascript" src="js/homenew.js"> </script>
</head>
	<style>

.ceoandothers
{
	padding: 25px;
	border: 2px solid black;
	position: inherit;
	background-color:  white;

}
.ceo{
	
	border: 2px solid black;
	background-color:  green;
}


.services{

	
	border: 2px solid black;
	background-color:  blue;
}








	</style>

<body>
	<div class="all">
	<div class ="main" >
		<br>
		<br>
 <marquee><h3>..Welcome To  Tec Doc..</h3></marquee>
		<br>
		<br>



		<center>
			<div class="slideshow" style="border-radius: 25px">
					<img class="mySlides" src="images/slide/1.jpg" >
					<img class="mySlides" src="images/slide/2.jpg" >
					<img class="mySlides" src="images/slide/3.jpg" >
					<img class="mySlides" src="images/slide/4.jpg" >
					<img class="mySlides" src="images/slide/5.jpg" >
					<img class="mySlides" src="images/slide/6.jpg" >
					<img class="mySlides" src="images/slide/7.jpg" >
					<img class="mySlides" src="images/slide/8.jpg" >
					<img class="mySlides" src="images/slide/9.jpg" >

					</center>
					<script>
				var slideIndex = 0;
				showSlides();

					
					</script>
			</div><!-- slideshow -->

	</div><!-- main -->



<br>
<br>
<br>
<center>

	<img id ="anim"src="images/intro.gif" width="100px" height="100px" >

   <button id="btnEvent">E<br>v<br>e<br>n<br>t<br>s<br></button>



   <button id="btnWhatnew">W<br>h<br>a<br>t<br>s<br> N<br>e<br>w<br></button>






   <button id="btnNews">N<br>e<br>w<br>s<br></button>







<img src="images/intro.gif" width="100px" height="100px">
<div class="eventsnew">
	




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



<script type="text/javascript" src="js/
homePageEvent.js.">
	
</script>







</div><!-- events -->

<div class="whyus">

<h1 style="font-size:30px;">Why Us..</h1><br>

	<table id="whyus" width="100%">
	<tr>
	<th>
		<img  id="img" src="images/agent.jpg" width="200px" height="150px">
		<p id="letter"><B>Increase</B> Agent<br> Engagement</p></th>
 		
	
		<th>
			<img id="img" src="images/band.jpg" width="200px" height="150px">
			<p id="letter"><B>Enhance</B> Brand<br> Loyalty</p></th>
		

	
	<th>
		
			<img  id="img" src="images/goodeffert.png" width="200px" height="150px">
			<p id="letter"><B>Reduce</B> Custmoer<br> Effort</p></th>
		
		
			<th>
			<img  id="img" src="images/costcut.jpg" width="200px" height="150px">
			<p id="letter"><B>Cut</B> Service<br> Delivery<br> Cost</p></th>
		



		</tr>
	</table>


</div><!-- whyus -->
<br> <br>
<div class="ceoandothers">
	<table>
<td>
<div class="ceo">
	<h2> Meesage From CEO</h2>
	<p>“ We are pleased with our Support.com rollout and are seeing real value from Guided Paths for our agents and interaction analytics for our management teams, enabling us to continuously improve the support we provide for our customers. ” </p>
	<img src="images/manager.jpg" alt="" width="100" height="100" style="border-radius: 50px; margin-left: 250px;">
	<br>
</div>

</td>
<td>
<div class="services">
	<h2> Meesage From CEO</h2>
	<p>“ We are pleased with our Support.com rollout and are seeing real value from Guided Paths for our agents and interaction analytics for our management teams, enabling us to continuously improve the support we provide for our customers. ” </p>
	<img src="images/manager.jpg" alt="" width="100" height="100" style="border-radius: 50px; margin-left: 250px;">
	<br>
</div>

</td>

</table>
	

</div><!-- ceoandothers -->














</div><!-- main -->
</div><!-- all -->
</body>
<?php include_once('footer.php'); ?>


<?php mysqli_close($connection); ?>
</html>


























