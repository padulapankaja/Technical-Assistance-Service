$(document).ready(function(){

//loading the content of page
//$('.main').load('ajax/howtoCon.php #title');



//button contect
	

$("button").click(function(){

	$('.content').html('<div class="loading" > <img src="images/load/1.gif" alt="Loading"></div>');
	//active

	

//content loading to page
		var clickButton = $(this).attr('id');

		$('.content').load('ajax/howtoCon.php #' + clickButton );



	});






});