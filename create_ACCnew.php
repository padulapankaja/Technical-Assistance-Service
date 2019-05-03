
<?php include_once('header.php'); ?>
<!DOCTYPE html>
<html>
<head>


	<title>Create Account (User) </title>


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="js/homenew.js"></script>
	<!--script type = "text/javascript"src="createAccCutomer.js"> </script-->
	<link rel="stylesheet" type="text/css" href="style/caccount.css">


<div>
	<form  method="POST" action="createAcc.php" onsubmit = "validatePassword()">
	<div class="acc" >
	<div id = "top">
	<h1>Create Account</h1><br/>
	<hr>
	</div>
	<br/>
	
		
		<label><h3>First Name</h3></label>		
		<input type="text" class="cre" id="first" name = "first"required  pattern="[a-zA-Z\s]+" />
		
		
		
		<label><h3>Last Name</h3></label>
		<input type="text" class="cre" id="last" name = "last" />
		
		
		
		<label><h3>E-Mail</h3><h6>(will be used as the username)</h6></label>
		<input type="email" class="cre" id="email" name = "email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" />
		
		
		<label><h3>Birthday</h3></label>
		<input type="date" class="cre" name = "bday" id="bday" required />
	
		<label><h3>Password</h3><h6>(atleast 8 characters)</h6></label>
 		<input type="password" name ="password" id= "password" class="cre" required  />
	
		<label><h3>Confirm password</h3></label>
		<input type="password" name ="con_pass" class="cre" id="con_pass" required />
		
		

			<script type="text/javascript">

            var password= document.getElementById("password"), con_pass = document.getElementById("con_pass");

            function validatePassword(){
                var exp = /^(?=.*\d)(?=.[A-Z])(?!.*[^a-zA-Z0-9@#$^+=])(.{8,})$/;
                if(password.value !== con_pass.value){
                    con_pass.setCustomValidity("Password does not match the confirm password. Please re-enter the confirm password.");
                }
                else{
                    con_pass.setCustomValidity('');
                }
            }

            password.onchange = validatePassword;
            con_pass.onkeyup = validatePassword;

		</script>


	
		
		<br/>
		<input type="submit" id="submit" name="submit" value="Submit"/>
		
	
	</div>
	</form>
	
	



</div><!-- container -->










<div class="main">
  </div> <!--home-content-->


</html>

<?php include_once('footer.php'); ?>