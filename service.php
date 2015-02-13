<!DOCTYPE HTML>
<!--
	TXT by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Julies Personal Assisstant</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body class="homepage">
<?php

	$content = $_GET["content"];
	$subset = $_GET["subset"];


?>
		<!-- Header -->
			<header id="header">
				<div class="logo container">
					<div>
						<h1><a href="" id="logo">Services - <?php echo($content); ?></a></h1>
					</div>

			</header>

		<!-- Nav -->

<nav id="nav" class="skel-layers-fixed">
	<ul>
		<li><a href="index.html">Home</a></li>
		<li class="current">
			<a href="">Services</a>
			<ul>
				<li><a href="service.php?content=Entertainment">Entertainment / Party</a>

					<ul>

						<li><a href="#">Invitations</a></li>
						<li><a href="#">RSVP Coordination</a></li>
						<li><a href="#">Vendor Coordination</a></li>
						<li><a href="#">Grocery Shopping</a></li>
						<li><a href="#">Ticket Procurement</a></li>

					</ul>

				</li>
				<li><a href="service.php?content=Relocation Services">Relocation Services</a></li>
				<li><a href="service.php?content=Organizational">Organizational</a></li>
				<li><a href="service.php?content=Personal Care">Personal Care</a></li>
				<li><a href="service.php?content=Scheduling">Scheduling</a></li>
				<li><a href="service.php?content=Reminder Services">Reminder Services</a></li>
				<li><a href="service.php?content=Shopping Services">Shopping Services</a></li>
			</ul>
		</li>
		<li><a href="#AboutUs">About Us</a></li>
		<li><a href="#ScheduleServices">Schedule Services</a></li>
	</ul>
</nav>
		<!-- Footer -->
<footer id="footer" class="container">
	<div class="row 200%">
		<div class="12u" >

			<!-- About -->
			<section>
				<h2 class="major"><span><?php echo($subset); ?></span></h2>
				<?php

				if($content == "Entertainment" and $subset == null) {

					echo('
					<section class="box highlight">
									<header>
										<h2>Entertainment services</h2>
									</header>
									<ul class="special">
										<li><a href="#" class="icon fa-ticket"><span class="label"></span></a></li>
										<p>Invitations</p>
										<li><a href="#" class="icon fa-bookmark"><span class="label"></span></a></li>
										<p>RSVP</p>
										<li><a href="#" class="icon fa-male"><span class="label"></span></a></li>
										<p>Vendor Coordination</p>

									</ul>

								</section>

					');
				}elseif($content == "Relocation Services" and $subset == null){
					echo('
					<section class="box highlight">
									<header>
										<h2>Relocation services</h2>
									</header>
									<ul class="special">
										<li><a href="#" class="icon fa-truck"><span class="label"></span></a></li>
										<p>Hire A Moving Company</p>
										<li><a href="#" class="icon fa-male"><span class="label"></span></a></li>
										<p>Day Of Move Coordination</p>
										<li><a href="#" class="icon fa-folder-open"><span class="label"></span></a></li>
										<p>Pack, Un-pack & Organize</p>
										<li><a href="#" class="icon fa-shopping-cart"><span class="label"></span></a></li>
										<p>Stock House With Groceries</p>

									</ul>

								</section>

					');

				}elseif($content == "Shopping Services" and $subset == "Ticket Procurement"){

					echo('
					<p>If you need tickets for a concert or live event please fill out the forum bellow<br/>
					With you information so we can reserve them for you.</p>
					<div class="container">
					<form method="post" action="confirm.php?service=Ticket%20Procurement">
						<input type="text" class="" placeholder="Name" name="Name" required="true"><br>
						<input type="email" placeholder="Email" name="Email" required="true"><br>
						<input type="text" placeholder="Type of event" name="TOE" required="true"><br>
						<input type="text" placeholder="Phone Number" name="phone" required="true"><br>
						<p>Date of event</p>
						<input type="date" class="" placeholder="Date of event" name="Date" required="true"> <br><br>
						<input type="submit" placeholder="Place request" value="Place request">
					</form>
				</div>
				');

				}elseif($content == "Shopping Services" and $subset == "Grocery Shopping"){

					header('Error.php');
echo('<p>TEST</p>');

				}else{


				}

				?>



			</section>

		</div>
	</div>
	<div class="row 200%">
		<div class="12u">

			<!-- Contact -->
			<section>
				<h2 class="major"><span>Social Media</span></h2>
				<ul class="contact">
					<li><a class="icon fa-facebook" href="#"><span class="label">Facebook</span></a></li>
					<li><a class="icon fa-twitter" href="#"><span class="label">Twitter</span></a></li>
				</ul>
			</section>

		</div>
	</div>

	<!-- Copyright -->
	<div id="copyright">
		<ul class="menu">
			<li>&copy; Julies Personal Assisstant. All rights reserved</li><li>Style by: <a href="http://html5up.net">HTML5 UP</a></li>
		</ul>
	</div>

</footer>

	</body>
</html>