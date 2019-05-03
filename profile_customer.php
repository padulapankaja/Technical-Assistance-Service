<? php

    //session_start();
    //$a =$_SESSION['email_add'];

    ?>

<!DOCTYPE html>
<html>
<head>


    <title>Profile (User) </title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="js/homenew.js"></script>
    <!--script type = "text/javascript"src="createAccCutomer.js"> </script-->
    <link rel="stylesheet" type="text/css" href="style/profile_customer.css">
    <!--script type="text/javascript" src="createAccCustomer.js"></script-->

</head>

<body >

<div class="container" >

    <div class="navigationbar">
        <a href="#home">Home</a>
        <div class="dropdown">
            <button class="dropbtn">Services
                <i class="fa fa-caret-down"></i>

            </button>
            <div class="dropdown-content">
                <a href="#">Computer</a>
                <a href="#">Mobile Phones</a>
                <a href="#">Electricle</a>

            </div><!-- dropdown-content -->

        </div>
        <a href="#myproblem">My Problem</a>
        <a href="#technician">Technician</a>
        <a href="#howto">How To</a>
        <div class="dropdown">
            <button class="dropbtn">Contact Us
                <i class="fa fa-caret-down"></i>

            </button>
            <div class="dropdown-content">
                <a href="#">Overview</a>
                <a href="#">FAQ</a>
                <a href="#">Career</a>

            </div><!-- dropdown-content -->


        </div>
        <a href="#login"><i class="fa fa-user-circle-o" style="font-size:20px"></i>     Login</a>

        <div class="search">
            <form action="/actionpage.php">
                <input type ="text" placeholder="Search" name="search" style="border-radius:5px;">
                <button type="submit" style="border-radius:5px;"><i class="fa fa-search" style="color:white"></i></button>

            </form>

        </div>

        <img src="images/logo.png" width="200" height="80" poss>
    </div><!-- dropdown -->


</div><!-- navigationbar -->



<!-- header -->

<div>

    <form  method="POST" action="editprof_cust.php">
        <div class="acc" >
            <div id = "top">
                <h1>Profile(User)</h1><br/>
                <hr>
            </div>
            <br/>

            <?php

            require 'config.php';

            // Check connection
            if (!$con) {
                die("Connection failed: " . mysqli_connect_error());
            }
            $sql = "SELECT first_name,last_name,email_add,date_birth from  customer_acc where id = 1";

            $result = $con->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) { ?>


            <label><h3>First Name</h3></label>
            <input type="text" class="cre" id="first" name = "first" value="<?php echo $row["first_name"];?> "/>



            <label><h3>Last Name</h3></label>
            <input type="text" class="cre" id="last" name = "last" value="<?php echo $row["last_name"];?> "/>



            <label><h3>E-Mail</h3></label>
            <input type="email" class="cre" id="email"  name = "email" value="<?php echo $row["email_add"];?>" />


            <label><h3>Birthday</h3></label>
            <input type="text" class="cre" name = "bday" id="bday"  value="<?php echo $row["date_birth"];?> "/>

			
            <pre>    <input type="submit" id="update" name="update" value="update" class="update"/>    <input type="reset" id="reset" name="reset" value="Reset" class="update"/>   
                 <input type="submit" id="delete" name="delete" value="Delete Account" class="update"/></pre>

        </div>
			
			
		     <?php
        }
        } else {
            echo "0 results";
        }
        $con->close();
        ?>
		</form>





</div><!-- container -->










<div class="main">
</div> <!--home-content-->


<div class="footer">

    <div class="footer-col1">
        <h4>Stay Connected</h4>
        <table id="table01" style="width:50%">
            <tr>
                <th><img src="images/fb.png" width="25px" height="25px" ></th>
                <th><img src="images/insta.png" width="25px" height="25px" ></th>

            </tr>
            <tr>
                <th> <img src="images/g+.png" width="25px" height="25px" ></th>
                <th><img src="images/twit.png" width="25px" height="25px" ></i>  </th>


            </tr>


        </table>




        <div class="tweet">

        </div><!-- tweet -->




    </div><!-- footer-col -->


    <div class="footer-col2">
        <h4>Quick Links</h4>

        <div class="quick-links">

            <ul class="fa-ul">
                <li><a href="#"><i class="fa fa-cog fa-spin"></i>      Tec Gadets</a></li>
                <li><a href="#"><i class="fa fa-cog fa-spin"></i>      Review Videos</a></li>
                <li><a href="#"><i class="fa fa-cog fa-spin"></i>      This is a link</a></li>
                <li><a href="#"><i class="fa fa-cog fa-spin"></i>      This is a link</a></li>


            </ul>

        </div><!-- quick-links -->



    </div><!-- footer-col -->


    <div class="footer-col4">
        <h4>We Are Here</h4><br>
        <div class="location">
            <img src="images/mapic.png" width="20px" height="35px" >

        </div><!-- location -->
        <p>Tec Development,<br>
            Pittugala Junction,<br>
            Malabe,<br>
            Srilanka.</p>

    </div><!-- blog-title -->



    <div class="footer-col3">

        <h4>We Accept</h4><br>
        <center>
            <table id="table02" style="width:50%">
                <tr>
                    <th> <img src="images/visa.png" width="35px" height="35px" ></th>
                    <th><img src="images/master.png" width="45px" height="35px" ></th>
                </tr>
                <tr>
                    <td><img src="images/paypal.png" width="35px" height="35px" ></td>
                    <td><img src="images/amex.png" width="35px" height="35px" ></td>

                </tr>

            </table></center>
        <!-- <i class="fab fa-cc-visa" style="font-size:25px;"></i><br>
        <i class="fab fa-cc-mastercard"  style="font-size:25px;"></i><br>
        <i class="fal fa-money-check-alt" style="font-size:25px;"></i><br>
        <i class="fab fa-cc-paypal" style="font-size:25px;"></i><br>
        <i class="fab fa-cc-amex" style="font-size:25px;"></i><br>

 -->




    </div><!-- blog-description-->




</div><!-- footer-col -->





</div><!-- footer -->

<div class="copyrights">


    <div class="year">

        <h5>Copyrights &copy; 2018 | All Rights Reserved.</h5>

    </div><!-- year -->

    <div class="footerlog">

        <img src="images/logo.png" width="25" height="10">

    </div><!-- footerlog -->

    <div class="developper">
        <h3><marquee>Designed by : <B>TecDoc Development</B></I></marquee></h3>
        <div class="hlogo"> </div>

    </div><!-- hlogo -->
</div><!-- developper -->


</div><!-- copyrights -->

</div><!-- main -->


</body>
</html>



