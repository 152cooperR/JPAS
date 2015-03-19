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
        <li class=""><a href="index.html">Home</a></li>
        <li class="current">
            <a href="services.html">Services</a>
            <ul>
                <li><a href="service.php?content=Entertainment">Entertainment / Party</a>

                    <ul>

                        <li><a href="EntertainmentServices.php?subset=Invitations">Invitations</a></li>
                        <li><a href="EntertainmentServices.php?subset=RSVP%20Coordination">RSVP Coordination</a></li>
                        <li><a href="EntertainmentServices.php?subset=Vendor%20Coordination">Vendor Coordination</a></li>
                    </ul>

                </li>
                <li><a href="RelocationServices.php">Relocation Services</a>

                    <ul>
                        <li><a href="RelocationServices.php?subset=Hire%20A%20Moving%20Company">Hire a moving company</a></li>
                        <li><a href="RelocationServices.php?subset=Day%20Of%20Move%20Coordination">Day of move coordination</a></li>
                        <li><a href="RelocationServices.php?subset=Pack%20un-pack%20and%20organize">Pack, un-pack & organize </a></li>
                        <li><a href="RelocationServices.php?subset=Stock%20house%20with%20supplies">Stock house with supplies</a></li>
                    </ul>

                </li>
                <li><a href="OrganizationalServices.php">Organizational</a>
                    <ul>
                        <li><a href="OrganizationalServices.php?subset=Home%20and%20Office%20Organization">Home and Office Organization</a></li>
                        <li><a href="OrganizationalServices.php?subset=Home%20repair">Home repair</a></li>
                        <li><a href="OrganizationalServices.php?subset=Deliveries">Deliveries</a></li>
                        <li><a href="OrganizationalServices.php?subset=Utilities%20Installation">Utilities Installation</a></li>
                        <li><a href="OrganizationalServices.php?subset=House%20Sitting">House Sitting</a></li>
                    </ul>
                </li>
                <li><a href="PersonalCareServices.php">Personal Care</a>
                    <ul>
                        <li><a href="?subset=Personal%20Care">Senior Care</a></li>
                    </ul>
                </li>
                <li><a href="SchedulingServices.php">Scheduling</a>
                    <ul>
                        <li><a href="SchedulingServices.php?subset=Laundry%20and%20dry%20cleaning">Laundry and dry cleaning</a></li>
                        <li><a href="SchedulingServices.php?subset=Prescription%20drop%20off%20and%20pick%20up">Prescription drop off and pick up</a></li>
                        <li><a href="SchedulingServices.php?subset=Post%20offices%20UPS%20and%20FedEx%20pickups">Post offices, UPS, and FedEx pickups</a></li>
                        <li><a href="SchedulingServices.php?subset=Car%20detail%20and%20service%20appointments">Car detail and service appointments</a> </li>
                        <li><a href="SchedulingServices.php?subset=Home%20repair">Home repair</a> </li>
                        <li><a href="SchedulingServices.php?subset=Restaurant%20reservations">Restaurant reservations</a></li>
                        <li><a href="SchedulingServices.php?subset=Car%20rentals">Car rentals</a></li>
                        <li><a href="SchedulingServices.php?subset=Vacation%20planning">Vacation planning</a></li>
                        <li><a href="SchedulingServices.php?subset=Hotel%20scheduling">Hotel scheduling</a></li>
                    </ul>
                </li>
                <li><a href="ReminderServices.php">Reminder Services</a></li>
                <li><a href="ShoppingServices.php">Shopping Services</a>
                    <ul>
                        <li><a href="ShoppingServices.php?subset=Ticket%20Procurement">Ticket Procurement</a></li>
                        <li><a href="ShoppingServices.php?subset=Grocery%20Shopping">Grocery Shopping</a></li>
                        <li><a href="ShoppingServices.php?subset=Specific%20Gifts">Specific Gifts</a></li>
                        <li><a href="ShoppingServices.php?subset=Gift%20Wrapping">Gift Wrapping</a></li>
                        <li><a href="ShoppingServices.php?subset=Addressing%20for%20holiday%20cards%20and%20gifts">Addressing for holiday cards and gifts</a></li>
                        <li><a href="ShoppingServices.php?subset=Gift%20cards%20and%20certificates">Gift cards and certificates</a></li>
                        <li><a href="ShoppingServices.php?subset=Ship%20or%20deliver%20a%20gift">Ship or deliver a gift</a></li>

                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="#AboutUs">About Us</a></li>
        <li><a href="#ScheduleServices">Schedule Services</a></li>
    </ul>
</nav>
</body>
</html>