<?php
session_start();
?>


<!DOCTYPE html>
<html>

<head>

<title>Powermark.com</title>
<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Fjord+One|Droid+Sans' rel='stylesheet' type='text/css'>

<!-- Stylesheets -->
<link rel="stylesheet" type="text/css" href="styles/style.css" />
<link rel="stylesheet" type="text/css" href="styles/settings.css" />
<!--[if IE 8]>
<link rel="stylesheet" type="text/css" href="styles/ie8.css" />
<![endif]-->

<!-- IE Specific script to enable media queries -->
<!--[if lt IE 9]>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->

<!-- Javascript files -->


<!--Function-->



</head>

<body onload="load()">



          
      <!-- INTRO-->
      <div id="intro">                           
              <!--THE INTRODUCTION-->	      
              
<div id="login">

	<form name="login-form" class="login-form" action="code.php" method="post">
	
		<div class="header">
		<h1>Administrator</h1>
		  <span>
			<?php
			    if(isset($_SESSION['success']) && $_SESSION['success']!="")
			        {
			         echo '<h4 class="bg-danger text-white ">'.$_SESSION['success'].'</h4>';
			         unset($_SESSION['success']);
			        }
            ?>
          </span>
		</div>

	    
	    <!-- hint -->

		<div class="content">
		 <input type="email"name="email" class="input username" placeholder="Enter Email Address...">
		<div class="user-icon"></div>
		<input name="password" type="password" class="input password" placeholder="Password" />
		<div class="pass-icon"></div>		
		</div>

         <!-- submit button -->
		<div class="footer">
		<input type="submit" name="login_btn" value="Login" class="button" />
		</div>

 	 	<!-- hint -->
	   

	</form>
		 
</div>
<div class="gradient"></div>



          </div>
          

     
</div>

<!--*** END WRAPPER ***-->
<script type="text/javascript"> Cufon.now(); </script>
</body>

</html>
