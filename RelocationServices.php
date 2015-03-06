<!DOCTYPE HTML>
<!--
	TXT by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>JPAS - Services</title>
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
        <li class=""><a href="index.html">Home</a></li>
        <li class="current">
            <a href="services.html">Services</a>
            <ul>
                <li><a href="service.php?content=Entertainment">Entertainment / Party</a>

                    <ul>

                        <li><a href="service.php?content=Entertainment&subset=Invitations">Invitations</a></li>
                        <li><a href="service.php?content=Entertainment&subset=RSVP%20Coordination">RSVP Coordination</a></li>
                        <li><a href="service.php?content=Entertainment&subset=Vendor%20Coordination">Vendor Coordination</a></li>
                    </ul>

                </li>
                <li><a href="service.php?content=Relocation%20Services">Relocation Services</a>

                    <ul>
                        <li><a href="service.php?content=Relocation%20Services&subset=Hire%20A%20Moving%20Company">Hire a moving company</a></li>
                        <li><a href="service.php?content=Relocation%20Services&subset=Day%20Of%20Move%20Coordination">Day of move coordination</a></li>
                        <li><a href="service.php?content=Relocation%20Services&subset=Pack%20un-pack%20and%20organize">Pack, un-pack & organize </a></li>
                        <li><a href="service.php?content=Relocation%20Services&subset=Stock%20house%20with%20supplies">Stock house with supplies</a></li>
                    </ul>

                </li>
                <li><a href="service.php?content=Organizational">Organizational</a>
                    <ul>
                        <li><a href="service.php?content=Organizational&subset=Home%20and%20Office%20Organization">Home and Office Organization</a></li>
                        <li><a href="service.php?content=Organizational&subset=Home%20repair">Home repair</a></li>
                        <li><a href="service.php?content=Organizational&subset=Deliveries">Deliveries</a></li>
                        <li><a href="service.php?content=Organizational&subset=Utilities%20Installation">Utilities Installation</a></li>
                        <li><a href="service.php?content=Organizational&subset=House%20Sitting">House Sitting</a></li>
                    </ul>
                </li>
                <li><a href="service.php?content=Personal%20Care">Personal Care</a>
                    <ul>
                        <li><a href="service.php?content=Personal%20Care&subset=Senior%20Care">Senior Care</a></li>
                    </ul>
                </li>
                <li><a href="service.php?content=Scheduling">Scheduling</a>
                    <ul>
                        <li><a href="service.php?content=Scheduling&subset=Laundry%20and%20dry%20cleaning">Laundry and dry cleaning</a></li>
                        <li><a href="service.php?content=Scheduling&subset=Prescription%20drop%20off%20and%20pick%20up">Prescription drop off and pick up</a></li>
                        <li><a href="service.php?content=Scheduling&subset=Post%20offices,%20UPS,%20and%20FedEx%20pickups">Post offices, UPS, and FedEx pickups</a></li>
                        <li><a href="service.php?content=Scheduling&subset=Car%20detail%20and%20service%20appointments">Car detail and service appointments</a> </li>
                        <li><a href="service.php?content=Scheduling&subset=Home%20repair">Home repair</a> </li>
                        <li><a href="service.php?content=Scheduling&subset=Restaurant%20reservations">Restaurant reservations</a></li>
                        <li><a href="service.php?content=Scheduling&subset=Car%20rentals">Car rentals</a></li>
                        <li><a href="service.php?content=Scheduling&subset=Vacation%20planning">Vacation planning</a></li>
                        <li><a href="service.php?content=Scheduling&subset=Hotel%20scheduling">Hotel scheduling</a></li>
                    </ul>
                </li>
                <li><a href="service.php?content=Reminder%20Services">Reminder Services</a></li>
                <li><a href="service.php?content=Shopping%20Services">Shopping Services</a>
                    <ul>
                        <li><a href="service.php?content=Shopping%20Services&subset=Ticket%20Procurement">Ticket Procurement</a></li>
                        <li><a href="service.php?content=Shopping%20Services&subset=Grocery%20Shopping">Grocery Shopping</a></li>
                        <li><a href="service.php?content=Shopping%20Services&subset=Specific%20Gifts">Specific Gifts</a></li>
                        <li><a href="service.php?content=Shopping%20Services&subset=Gift%20Wrapping">Gift Wrapping</a></li>
                        <li><a href="service.php?content=Shopping%20Services&subset=Addressing%20for%20holiday%20cards%20and%20gifts">Addressing for holiday cards and gifts</a></li>
                        <li><a href="service.php?content=Shopping%20Services&subset=Gift%20cards%20and%20certificates">Gift cards and certificates</a></li>
                        <li><a href="service.php?content=Shopping%20Services&subset=Ship%20or%20deliver%20a%20gift">Ship or deliver a gift</a></li>

                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="#AboutUs">About Us</a></li>
        <li><a href="#ScheduleServices">Schedule Services</a></li>
    </ul>
</nav>
<footer id="footer" class="container">
    <div class="row 200%">
        <div class="12u" >

            <!-- About -->
            <section>
                <?php


                if ($subset == null) {

                    echo('
					<section class="box highlight">
									<header>
										<h2>Relocation services</h2>
									</header>


								</section>

					');

                }
                elseif($subset == "Hire a moving company"){

                    echo('

                        <h2 class="major"><span><?php echo($subset); ?></span></h2>

                    ');


                }elseif($subset == "Day of move coordination"){

                    echo('



                    ');

                }elseif($subset == "Pack un-pack and organize "){

                    echo('
                            <h2 class="major"><span><?php echo($subset); ?></span></h2>


                    ');

                }elseif($subset == "Stock house with supplies"){

                    echo('
                        <h2 class="major"><span><?php echo($subset); ?></span></h2>


                    ');

                }else{

                    echo('

                        <script type="text/javascript">location.href = "Error.php?e=404";</script>

                    ');

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