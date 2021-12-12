<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php

session_start();
$email = $_POST['email'];
$subject = "PopcornTV Registration";
$message = "You're Registered with PopcornTV! Enjoy";
?>
<!DOCTYPE HTML>
<html>
<head>
<title>PopCornTv Register</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Movie_store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />

<script type="application/x-javascript"> 
	addEventListener("load", function() 
	{ 
		setTimeout(hideURLbar, 0); 
	}, false); 

	function hideURLbar()
	{ 
		window.scrollTo(0,1); 
	} 
</script>

<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
</head>






<body>
<div class="container">
	<div class="container_wrap">
		<div class="header_top">
		    <div class="col-sm-3 logo"><a href="index.html"><img src="images/logo.png" alt="" width="82" height="82" /></a></div>
		    <div class="col-sm-6 nav">
			  <ul>
				 <!--<li> <span class="simptip-position-bottom simptip-movable" data-tooltip="comic"><a href="movie.html"> </a></span></li>-->
				 <li><span class="simptip-position-bottom simptip-movable" data-tooltip="movie"><a href="movie.html"> </a> </span></li>
				 <!--<li><span class="simptip-position-bottom simptip-movable" data-tooltip="video"><a href="movie.html"> </a></span></li>
				 <li><span class="simptip-position-bottom simptip-movable" data-tooltip="game"><a href="movie.html"> </a></span></li>-->
				 <li><span class="simptip-position-bottom simptip-movable" data-tooltip="tv"><a href="movie.html"> </a></span></li>
				 <!--<li><span class="simptip-position-bottom simptip-movable" data-tooltip="more"><a href="movie.html"> </a></span></li>-->
			 </ul>
			</div>
			<div class="col-sm-3 header_right">
               <ul class="header_right_box">
                 <li><img width = '40' height = '40' src='images/newuser1.png' alt=''/></li>
                 <li><p><a href="login.php">Login</a></p></li>
                 <li class="last"><i class="edit"> </i></li>
                 <div class="clearfix"> </div>
               </ul>
            </div>

			<div class="clearfix"> </div>
	      </div>
	      <div class="content">
      	     <div class="register">

      	    
		  	  <form name = "register" action = "reg.php" method = "POST"> 
				 <div class="register-top-grid">
					<h3>Personal Information</h3>
					 <div>
						<span>User Name<label>*</label></span>
						<input type="text" name = "user" required autocomplete = "username"> 
					 </div>
					 <div>
						 <span>Email Address<label>*</label></span>
						 <input type="text" name = "email" required autocomplete="Email-address"> 
					 </div>
					 <div class="clearfix"> </div>
					   <a class="news-letter" href="#">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
					   </a>
					 </div>
				     <div class="register-bottom-grid">
						    <h3>Login Information</h3>
							 <div>
								<span>Password<label>*</label></span>
								<input type="password" name = "password" required>
							 </div>
							 <div>
								<span>Confirm Password<label>*</label></span>
								<input type="password" name = "confirmpassword" required>
							 </div>
							 <div class="clearfix"> </div>
					 </div>
					 <!--<label>Select your avatar: </label><input type="file" name="avatar" accept="image/*" required />-->
				
				<div class="clearfix"> </div>
				<div class="register-but">
				
					   <input type="submit" value="submit">
					   <div class="clearfix"> </div>
				   </form>


				</div>
		   </div>
           </div>
    </div>
</div>
<div class="container"> 
  <footer id="footer">
 	<div id="footer-3d">
		<div class="gp-container">
			<span class="first-widget-bend"> </span>
		</div>		
	</div>
    <div id="footer-widgets" class="gp-footer-larger-first-col">
		<div class="gp-container">
            <div class="footer-widget footer-1">
            	<div class="wpb_wrapper">
					<img src="images/logo2.jpg" alt="PopcornTV"/>
				</div> 
	          <br>
	          <p>The most popular place to get your favourite movies and series, We have now </p>
			  <p class="text">added movies and TV series from regional languages too!! What are you waiting for ? <br>Get your account in PopcornTV now!</p>
			 </div>
			 <div class="footer_box">
			  <div class="col_1_of_3 span_1_of_3">
					<h3>Categories</h3>
					<ul class="first">
						<li><a href="#">Movies</a></li>
						<li><a href="#">TV Series</a></li>
					</ul>
			  </div>
			  <div class="col_1_of_3 span_1_of_3">
					<h3>About Us</h3>
					<ul class="first">
						<li><a href="aboutus.html">Developer</a></li>
					</ul>
		     </div>
		    <div class="clearfix"> </div>
	        </div>
	        <div class="clearfix"> </div>
		</div>
	</div>
  </footer>
</div>		
</body>
</html>
