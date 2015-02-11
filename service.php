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

?>
		<!-- Header -->
			<header id="header">
				<div class="logo container">
					<div>
						<h1><a href="" id="logo">Services - <?php echo($_GET["content"]); ?></a></h1>
					</div>

			</header>

		<!-- Nav -->

<nav id="nav" class="skel-layers-fixed">
	<ul>
		<li><a href="index.html">Home</a></li>
		<li class="current">
			<a href="">Services</a>
			<ul>
				<li><a href="#">Entertainment / Party</a>

					<ul>

						<li><a href="#">Invitations</a></li>
						<li><a href="#">RSVP Coordination</a></li>
						<li><a href="#">Vendor Coordination</a></li>
						<li><a href="#">Grocery Shopping</a></li>
						<li><a href="#">Ticket Procurement</a></li>

					</ul>

				</li>
				<li><a href="#">Relocation Services</a></li>
				<li><a href="#">Organizational</a></li>
				<li><a href="#">Personal Care</a></li>
				<li><a href="#">Scheduling</a></li>
				<li><a href="#">Reminder Services</a></li>
				<li><a href="#">Shopping Services</a></li>
				<li>
					<a href="">Phasellus consequat</a>
					<ul>
						<li><a href="#">Lorem ipsum dolor</a></li>
						<li><a href="#">Phasellus consequat</a></li>
						<li><a href="#">Magna phasellus</a></li>
						<li><a href="#">Etiam dolore nisl</a></li>
					</ul>
				</li>
				<li><a href="#">Veroeros feugiat</a></li>
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
				<h2 class="major"><span><?php echo($content); ?></span></h2>
				<?php

				echo("<p></p>");
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