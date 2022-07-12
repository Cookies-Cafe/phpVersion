<?php 
########################################
######       CONTACT PAGE           #######
########################################
require_once("includes/constants.php"); 
    require_once("includes/functions.php");
# the variables for this page only
$pageTitle= "Cookies Cafe |Contact Us"; #in head-html.php
$activeContact = "active"; #in navigation-html.php
$heroSubHeadline = "G</span>et in touch &amp;"; #in hero-html.php
$heroHeadline = "contact us"; #in hero-html.php
$heroMoto = "we are here to serve <span id=\"newline\">you.</span>"; #in hero-html.php
$aboutTitle= "ABOUT US";    #in footer-html.php
$aboutContent= "Our casual atmosphere, quality food, friendly staff and attentive service are what we have become known for and keeps our customers coming back and back again. We look forward to serving you!" ;
        #in footer-html.php
# the include file for all head htmls 
   require_once("includes/head-html.php"); 
?>
<!----------------------- style for this page only -----------------------
<link rel="stylesheet" href="./css2/contactUs.css">
-->
<?php
 require_once("includes/styles/contact-style.php");
?>


</head>
<!--main loader page and body page starts here-->
<body id="body">
<?php
 require_once("includes/loader-html.php");
?>

<!--main body page -->
  <div id="everything" onload="loaded()">
<?php 
 require_once("includes/navigation-html.php");
 require_once("includes/hero-html.php");
?>
<!-- distinct home page content-->


