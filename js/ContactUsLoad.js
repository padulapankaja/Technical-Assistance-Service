$(document).ready(function(){

//loading the content of page
//$('.main').load('ajax/howtoCon.php #title');



//button contect
	

$("button").click(function(){

	$('.view').html('<div class="loading" > <img src="images/load/1.gif" alt="Loading" style="text-align:center;"></div>');
	//active

	

//content loading to page
		var clickButton = $(this).attr('id');

		$('.view').load('ajax/AboutUsCon.php #' + clickButton );



	});






});