<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/footer.css">




</head>


<style>
.footer-col4{
  margin-left: 10px;
}  
.footer-col3{
  margin-left: 10px;
}
.table02{
  margin-left: 20px;
  margin-top: -20px;

}

</style>





<footer>
  
  <div class="footer">

    <div class="footer-col1">
      <h4>Stay Connected</h4>
      <table id="table01" style="width:50%">
          <tr>
            <th><a href="https://www.facebook.com"><img src="images/fb.png" width="25px" height="25px" ></a></th>
            <th><a href="https://www.instagram.com"><img src="images/insta.png" width="25px" height="25px" ></a></th>
            
         </tr>
          <tr>
            <th> <a href="https://plus.google.com"><img src="images/g+.png" width="25px" height="25px" ></a></th>
            <th><a href="https://twitter.com"><img src="images/twit.png" width="25px" height="25px" ></a></i>  </th>
              
            
          </tr>


      </table>



      <div class="tweet">
       
        </div><!-- tweet -->




    </div><!-- footer-col -->


    <div class="footer-col2">
      <h4>Newsletter</h4>
      
        

        <div class="newsletter">

 
          <form action="sql/subsInsert.php" method="POST"  onSubmit= "show_alert();" >
          <input type="text" placeholder="Enter Your Name" name="newsname" required><br><br>
          <input type="email" placeholder="Enter Email" name="newsemail" required><br>
          <label style="color:black; text-decoration: none; text-transform:none;">
           <br>

        <input type="submit" value="Subscribe">

  </form>
        </div><!-- newsletter -->


    


            
        
          <script>

function show_alert() {
  alert ("Thank You");
    
 
}



</script>


        



    </div><!-- footer-col -->


    <div class="footer-col4">
       <h4>We Are Here</h4><br>
      <div class="location"><a href="https://www.google.com/maps/">  
      <img src="images/mapic.png" width="20px" height="35px"  style="margin-left: 20px; margin-top: -10px;"></a>
 
     </div><!-- location -->
     <p>Tec Development,<br>
     Pittugala Junction,<br>
     Malabe,<br>
     Srilanka.</p>

      </div><!-- blog-title -->


      
         <div class="footer-col3">
     
            <h4>We Accept</h4><br>
      <center>
      <table class ="table02" style="width:50%">
        <tr>
          <th> <img src="images/visa.png" width="35px" height="35px" ></th>
          <th><img src="images/master.png" width="45px" height="35px" ></th>
        </tr>
        <tr>
            <td><img src="images/paypal.png" width="35px" height="35px" ></td>
            <td><img src="images/amex.png" width="35px" height="35px" ></td>

        </tr>
        
      </table></center>


    </div><!-- footer-col -->
  <div class="companyLogo">

    <img src="images/logoTecdoc.jpg" width="100" height="100" style="margin-top: 30px;">
  </div>

  </div><!-- footer -->
<div class="company"><p>Tec Doc   |<?php  echo "Today is " . date("Y-m-d") ?>  | <?php
echo "The time is " . date("h:i:sa");
?>

  



</div>





</footer>