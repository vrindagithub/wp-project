<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en-US">
<html>
<head>
        <title>WP PROJECT</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="project.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/fontawesome.min.css"/>
</head>
<body>

<header>
<div class="main">
	<div class="logo">
		<img src="logo.png" alt="logo">
	</div>

	<div class="mid">
            <ul class="navbar">
                <li><a href="#" class="active">Transport</a></li>
				<div class="dropdown-content">
                                    <a href="flight.html"> Flight </a>
                                    <a href="train.html">Train</a>
                                    <a href="Bus.html">Bus</a>
				</div>
                <li><a href="Hotels.html">Hotels</a> </li>
                <li><a href="packages.html">Packages</a></li>
                <li><a href="lastpage.html">About Us</a></li>
                <li><a href="Loginpage.html">Login/Sign Up</a></li>
            </ul>
            
        </div>

		<div class="video-container">
			<video src="final5.mp4" id="video-slider" loop autoplay muted></video>
		</div>

	<div class="heading">
		Khush Travels
	</div>
	<div class="typewriter">
		<div class="typewriter-text">Life is short and the world is wide...</div>
		<!-- <div class="typewriter-text-2">Be Khush with Khush Travels</div> -->
	</div>
</header><br><br><br>

<br><br>
<div class="explore">
	<h1>COME, EXPLORE INDIA WITH US !</h1>
</div><br><br>
	

	<div class="a">
		<img src="DELHI 1.jpeg">&nbsp
		<img src="mumbai 1.jpeg">&nbsp
		<img src="kerela 1.jpeg">&nbsp
		<img src="goa 1.jpeg">&nbsp
		<img src="udaipur 1.jpeg">&nbsp
		<img src="jaisalmer 1.jpeg">&nbsp
		<img src="kutch 1.jpeg">&nbsp
		<img src="diu 1.jpeg">&nbsp
	</div>	

	<div class="move">
                <p><b>"Be Khush with Khush Travels"</b></p>
	</div><br><br>
				
	 <div class="contactUs"> 
		<p><b>We’d love to hear from you</b></p>
		<p id="detail">Have questions about our services, features, or pricing? Need a favour?<br>

			Our teams will help you.</p>
	</div> <br><br><br>
<div class="mapouter">
	<div class="gmap_canvas">
		<p><b>We are Here</b></p>
		<iframe width="550" height="620" id="gmap_canvas" src="https://maps.google.com/maps?q=C/o.%20Navbharat%20Holiays-%201-space%20Complex,%2022-%20New%20Jagnath,%20DR.Yagnik%20Road,%20Rajkot-360001,%20India&t=&z=7&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
		</iframe>
			<style>
                        .mapouter
                        {position:relative;
			text-align:right;
			height:730px;
			width:550px;
			margin-left: 100px;
			margin-top: 50px;}
		</style><a href="https://www.embedgooglemap.net">embed google map iframe</a>
		<style>
		</style>
        </div></div>
                
<div class="Touch">
	<p><b>Get in Touch With Us</b></p>
	<div class="container">
		<div id="form-main">
			<div id="form-div">
				<form class="montform" id="reused_form" >
					<p class="name">
						<input name="name" type="text" class="feedback-input" required placeholder="Name" id="name" />
					</p>
					<p class="email">
						<input name="email" type="email" required class="feedback-input" id="email" placeholder="Email" />
					</p>
					<p class="text">
						<textarea name="message" class="feedback-input" id="comment" placeholder="Message"></textarea>
					</p><br><br>
					<div class="submit">
						<button type="submit" class="button-blue">SUBMIT</button>
						<div class="ease"></div>
					</div>
				</form>
				<div id="error_message" style="width:100%; height:100%; display:none; ">
					<h4>
						Error
					</h4>
					Sorry there was an error sending your form. 
				</div>
				<div id="success_message" style="width:100%; height:100%; display:none; "> <h2>Success! Your Message was Sent Successfully.</h2> </div>
			</div>
		</div>
	</div>
</div>

<footer>
	<div class="row">
		<div class="col" style="  margin-left: 123px;">
			<h3>Office</h3>
		<p>C/o. Navbharat Holiays- 1-space Complex</p>
		<p>22- New Jagnath</p>
		<p>DR.Yagnik Road</p>
		<p>Rajkot-360001</p>
		</div>
		
		<div class="col">
			<p>Email & Phone</p><br>
			<p class="email">khushtravels@gmail.com</p>
			<h4>+91 - 0125743638</h4>
		</div>

		<div class="col">
			<p>Payment & Security</p><br><br>
			<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/04/Visa.svg/1200px-Visa.svg.png">&nbsp;
			<img src="https://thebalconehotel.com/wp-content/uploads/mastercard.png"><br><br>
			<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSyZzLSHo8gpGaG_SF_ZaqE_thizeSYdX_XaNtOWbAMIsoXXFIW0-cuEUJCrzvvmtbsLw&usqp=CAU">&nbsp;
			<img src="https://sm.pcmag.com/pcmag_in/review/p/paypal/paypal_mb8k.png">
		</div>

		<div class="col">
			<h3>Follow Us:</h3> 
			<img  src="https://1000logos.net/wp-content/uploads/2021/04/Facebook-logo.png">
			<img src="https://download.logo.wine/logo/Instagram/Instagram-Logo.wine.png">
			<img id="twitter"  src="https://www.freeiconspng.com/thumbs/twitter-icon/twitter-icon-download-18.png">
		</div>
	</div>
</footer>

</body>
</html>
