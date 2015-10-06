<?php
use Leafo\ScssPhp\Server;
use Leafo\ScssPhp\Compiler;
require_once('PHP/vendor/autoload.php');

$scss = new Compiler();
$scss->setImportPaths('sass/');
$scss->setFormatter("scss_formatter_compressed");


?>

<!doctype html>
<html>
<head>
<meta name="designer" content="Designed by: Adam Dragus - adam@hrneurope.com ">
<meta name="developer" content="Developed by: TesseracT - bottyan.tamas@web-developer.hu | Benedek Nagy - trialshock@gmail.com | Balazs Pentek - myrrdhinn@gmail.com">
<meta name="author" content="HRN Europe - The Pan European HR Network">
<meta name="keywords" content="HR Tech, HRN Europe">
<meta charset="utf-8" />
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<title>HRN | About</title>

<!-- Open Graph data 
<meta property="og:site_name" content="HRN"/>
<meta property="og:title" content="HRN | The Pan European HR Network"/>
<meta property="og:description" content="HRN – Unleash Your People!"/>
<meta property="og:url" content="http://hrn.io/about">
<meta property="og:type" content="website"/>
<meta property="og:image" content="http://hrn.io/img/preview-images/preview-image-1.jpg" />
<meta property="og:image" content="http://hrn.io/img/preview-images/preview-image-3.jpg" />
<meta property="og:image" content="http://hrn.io/img/preview-images/preview-image-2.jpg" />

<!-- Favicon 
<link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="img/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
<link rel="manifest" href="img/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<!-- Include jQuery -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<!-- Include Reveal Modal -->
<link rel="stylesheet" href="vendor/reveal/reveal.css">
<script src="vendor/reveal/jquery.min.js" type="text/javascript"></script>
<script src="vendor/reveal/jquery.reveal.js" type="text/javascript"></script>

<!--Include Google fonts -->
<link href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet" type="text/css">

<!--Include Font Awesome -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<!-- General CSS -->
<link rel="stylesheet" href="css/general.css" />

<!-- Menu CSS -->
<link rel="stylesheet" href="css/menu.css" />

<!-- Main Page CSS -->
<link rel="stylesheet" href="css/about.css" />

<!-- Footer CSS -->
<link rel="stylesheet" href="css/footer.css" />

<!-- Scroll to top JS -->
<script src="js/gotopscroll.js"></script>

<!-- Google Analytics Script 
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX']); /* ID */
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
-->
  <style>
  <?php echo $scss->compile('@import "test.scss";'); ?>
  
  </style>

</head>

<body>
<!-- Logo -->
<a href="http://hrn.io" title="Home">
   <div id="HeaderLogoContainer">
          <img class="HRNLogo" src="img/menu/hrn-logo.svg" alt="HRN">
          <img class="HRNLogo" src="img/menu/hrn-logo.svg" alt="HRN">
          <img class="HRNLogo" src="img/menu/hrn-logo.svg" alt="HRN">
   </div>
</a>
<!-- END Logo -->

<!-- Desktop Menu -->
<nav id="DesktopMenu">
    <!-- Desktop Menu List -->
    	<ul id="DesktopMenuList">
        	<li class="DesktopMenuItem MenuItemActiveState" id="MenuItemAbout"><a href="about" title="ABOUT">About</a></li>
            <li class="DesktopMenuItem" id="MenuItemOurShows"><a href="http://dev.hrn.io/#OurShows" title="OUR SHOWS">Our Shows</a></li>
            <li class="DesktopMenuItem" id="MenuItemWhoAttends"><a href="http://dev.hrn.io/#WhoAttends" title="WHO ATTENDS">Who Attends</a></li>
            <li class="DesktopMenuItem" id="MenuItemOurClients"><a href="http://dev.hrn.io/#OurClients" title="OUR CLIENTS">Our Clients</a></li>
            <li class="DesktopMenuItem" id="MenuItemCareers"><a href="careers" title="CAREERS">Careers</a></li>
            <li class="DesktopMenuItem" id="MenuItemContact"><a href="contact" title="CONTACT">Contact</a></li>
        </ul>
    <!-- END Desktop Menu List -->
</nav>    
<!-- END Desktop Menu -->

<!-- Burger Menu -->
<button id="BurgerMenu" class="c-hamburger c-hamburger--htx">
	<span>toggle menu</span>
</button>
<!-- END Burger Menu -->

<!-- Mobile Menu -->
<nav id="MobileMenu">
    <!-- Mobile Menu List -->
	<ul id="MobileMenuList">
    	    <li class="MobileMenuItem MenuItemActiveState" id="MobileMenuItemAbout"><a href="about" title="ABOUT">About</a></li>
            <li class="MobileMenuItem" id="MobileMenuItemOurShows"><a href="http://dev.hrn.io/#OurShows" title="OUR SHOWS">Our Shows</a></li>
            <li class="MobileMenuItem" id="MobileMenuItemWhoAttends"><a href="http://dev.hrn.io/#WhoAttends" title="WHO ATTENDS">Who Attends</a></li>
            <li class="MobileMenuItem" id="MobileMenuItemOurClients"><a href="http://dev.hrn.io/#OurClients" title="OUR CLIENTS">Our Clients</a></li>
            <li class="MobileMenuItem" id="MobileMenuItemCareers"><a href="careers" title="CAREERS">Careers</a></li>
            <li class="MobileMenuItem" id="MobileMenuItemContact"><a href="contact" title="CONTACT">Contact</a></li>
    </ul>
    <!-- END Mobile Menu List -->
</nav>
<!-- END Mobile Menu -->

<!-- Header -->
<header>
	<!-- ABOUT US Text
    
    -->
</header>
<!-- END Header -->

<!-- About Us -->
<section id="AboutUs">
	<!-- h2 + 2 paragraph  -->
</section>
<!-- END About Us -->

<!-- Leadership Team -->
<section id="LeadershipTeam">
	<!-- 
    picture of the 4 leader, inline-blocks, text-al: center
    @tablet: 2-2 pictures
    -->
</section>
<!-- END Leadership Team -->

<!-- Testimonial -->
<section id="Testimonial">
	<!-- a quote sign, a paragraph (testimonial) + a logo -->
</section>
<!-- END Testimonial -->

<!-- Know More -->
<section id="KnowMore">
	<!-- a h2 + buttons. 
    Layout changes: 
    @tablet: 2-2-2
    @mobile: 1-1-1
    -->
</section>
<!-- END Know More -->

<!-- Footer -->
<footer>

</footer>
<!-- END Footer -->

<!-- Go to Top Button --> 
<a href="#" class="GoTopButton">
<div id="GoTopImg"><i class="fa fa-caret-up"></i></div>
</a> 
<!-- END Go to Top Button --> 

<!-- Menu JS -->
<script type="text/javascript" src="js/menu.js"></script>

<!-- Named anchor Hashtag scroll script --> 
<script type="text/javascript">
$('a[href*=#]:not([href=#])').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 1000);
});
</script> 

<!-- Start of Async HubSpot Analytics Code --> 
<script type="text/javascript">
    (function(d,s,i,r) {
      if (d.getElementById(i)){return;}
      var n=d.createElement(s),e=d.getElementsByTagName(s)[0];
      n.id=i;n.src='//js.hs-analytics.net/analytics/'+(Math.ceil(new Date()/r)*r)+'/412210.js';
      e.parentNode.insertBefore(n, e);
    })(document,"script","hs-analytics",300000);
  </script> 
<!-- End of Async HubSpot Analytics Code -->
</body>
</html>
