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
<meta name="author" content="HRN - Human Resources Network">
<meta name="keywords" content="HR Tech, HRN">
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
-->

<!-- Favicon -->
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
  <div id="HeaderFixedContainer">
   <div id="HeaderLogoContainer" data-elemid="1">
          <img class="HRNLogo" src="img/menu/hrn-logo.svg" alt="HRN">
          <img class="HRNLogo" src="img/menu/hrn-logo.svg" alt="HRN">
          <img class="HRNLogo" src="img/menu/hrn-logo.svg" alt="HRN">
   </div>
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
            <li class="DesktopMenuItem" id="MenuItemContact"><a href="#Contact" title="CONTACT">Contact</a></li>
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
            <li class="MobileMenuItem" id="MobileMenuItemContact"><a href="#Contact" title="CONTACT">Contact</a></li>
    </ul>
    <!-- END Mobile Menu List -->
</nav>
<!-- END Mobile Menu -->

<!-- Header -->
<header>
	<h1 class="InvisibleHeadline">About Us</h1>
	<div id="AboutUsGlitchContainer" data-elemid="3" class="GlitchContainer">
            <img class="AboutUsGlitch GlitchImage" src="img/about/about-us-text.svg" alt="ABOUT US">
            <img class="AboutUsGlitch GlitchImage" src="img/about/about-us-text.svg" alt="ABOUT US">
            <img class="AboutUsGlitch GlitchImage" src="img/about/about-us-text.svg" alt="ABOUT US">
     </div>
</header>
<!-- END Header -->

<!-- About Us -->
<section id="AboutUs">
	<div id="AboutUsInnerContainer">
        <h2>HRN are a new breed of networkers, researchers and event managers. We build sales, marketing, and customer service solutions with our clients - creating exceptional customer experiences.</h2>
        <p>We are a growth company, expanding organically. Our growth has earned us the reputation of producing the fastest growing HR Events in the World that have helped change the market.  Our HR Tech World events combined mean HRN is ranked as the largest global HR Network focused on the Future or Work and Technology. Global research confirms that technology is the foundation for Strategic HR and our current network comes from over 80 countries enabling HRN to influence over 30 million employees worldwide.</p>
     
    	<p>We share a vision that by 2017 HRN will be the HR network of choice across the globe. Our clients include the biggest and most exciting brands in the world, and we are expanding our operations and ideas together with them. We have set our sights on the future and how to help change the Future of Work, blazing the trail for others to follow.</p>
	</div>
</section>
<!-- END About Us -->

<!-- Leadership Team -->
<section id="LeadershipTeam">
	<h2 class="Headline">Leadership Team</h2>
    <!-- HRN Grid -->
   	<div id="HRNGrid">
        	<!-- Marc Coleman -->
            <div class="HRNMember" id="HRNColemanM">
                   <div class="Overlay">
                       <h3 class="OverlayName">Marc Coleman</h3>
                       <h4 class="OverlayTitle">Founder & CEO</h4>
                   </div>
                   <img alt="Marc Coleman" src="img/HRN-Team-Photos/marc_coleman.jpg">
            </div>
            <!-- END Marc Coleman -->

        	<!-- Viki McCann -->
            <div class="HRNMember" id="HRNVikiMcCann">
                   <div class="Overlay">
                       <h3 class="OverlayName">Viki McCann</h3>
                       <h4 class="OverlayTitle">Director of Operations </h4>
                   </div>
                   <img alt="Viki McCann" src="img/HRN-Team-Photos/viktoria_mccann.jpg">
            </div>
            <!-- END Viki McCann -->
            
        	<!-- Tomas Bottyan -->
            <div class="HRNMember" id="HRNBottyanT">
                   <div class="Overlay">
                       <h3 class="OverlayName">Tomas Bottyan</h3>
                       <h4 class="OverlayTitle">Chief Technology Officer</h4>
                   </div>
                   <img alt="Tomas Bottyan" src="img/HRN-Team-Photos/tomas_bottyan_2.jpg">
            </div>
            <!-- END Tomas Bottyan -->
            
        	<!-- Peter Russell -->
            <div class="HRNMember" id="HRNRussellP">
                   <div class="Overlay">
                       <h3 class="OverlayName">Peter Russell</h3>
                       <h4 class="OverlayTitle">Chief Production Officer</h4>
                   </div>
                   <img alt="Peter Russell" src="img/HRN-Team-Photos/peter_russell.jpg">
            </div>
            <!-- END Peter Russell -->                                    
	</div>
    <!-- END HRN Grid -->
</section>
<!-- END Leadership Team -->

<!-- Testimonial -->
<section id="Testimonial">
	<h2 class="InvisibleHeadline">Testimonial</h2>
	<img id="QuoteSign" src="img/quote-sign-black.svg" alt="Quote">
    <p>“Perhaps the best part was the overall energy at the event and of course the closing keynote was most inspirational!”</p>
    <img id="TestimonialLogo" src="img/about/tata-logo.svg" alt="TATA">
	<!-- a quote sign, a paragraph (testimonial) + a logo -->
</section>
<!-- END Testimonial -->

<!-- Want to Know More -->
<section id="WantToKnowMore">
	<h2>Want to know more?</h2>
    <div id="ButtonsContainer">
    	<button class="HRNButton BlackButton" id="ActiveHRNButton" onClick="window.open('about', '_parent');">About</button>
        <button class="HRNButton BlackButton" onClick="window.open('index#OurShows', '_parent');">Our Shows</button>
        <button class="HRNButton BlackButton" onClick="window.open('index#WhoAttends', '_parent');">Who Attends</button>
        <button class="HRNButton BlackButton" onClick="window.open('index#OurClients', '_parent');">Our Clients</button>
        <button class="HRNButton BlackButton" onClick="window.open('careers', '_parent');">Careers</button>
        <button class="HRNButton BlackButton" onClick="$(document.body).animate({'scrollTop':$('#Contact').offset().top}, 2000);">Contact</button>
    </div>
</section>
<!-- END Want to Know More -->

<!-- Footer -->
<a id="Contact"></a>
<footer>
	<div id="FooterLogoContainer" data-elemid="3" class="GlitchContainer">
		<img class="HRNLogoFooter GlitchImage" src="img/footer/logo-footer.svg" alt="HRN Contact">
        <img class="HRNLogoFooter GlitchImage" src="img/footer/logo-footer.svg" alt="HRN Contact">
        <img class="HRNLogoFooter GlitchImage" src="img/footer/logo-footer.svg" alt="HRN Contact">
    </div>
    <div id="FooterInnerContainer">
    	<div class="ContactBlock" id="UsefulLinks">
        	<h3>Useful Links</h3>
            <p><a href="http://hrtechcongress.com" title="HR Tech World">HR Tech World</a></p>
			<p><a href="http://london.hrtechcongress.com" title="HR Tech World Spring">HR Tech World Spring</a></p>
        </div>
        <div class="ContactBlock" id="Office">
        	<h3>Office</h3>
            <p>ALKOTAS POINT<br>
            Alkotas utca 50,<br>
            1123 Budapest, Hungary</p>
        </div>
        <div class="ContactBlock" id="SocialMedia">
        	<h3>Social Media</h3>
            <p><a href="https://twitter.com/hrneurope" title="Twitter" target="_blank"><img class="FooterSocialIcon" src="img/twitter-icon.svg" alt="Twitter "> Twitter</a></p>
            <p><a href="https://www.facebook.com/worldhrtech?ref=hl" title="Facebook" target="_blank"><img class="FooterSocialIcon" src="img/facebook-icon.svg" alt="Facebook "> Facebook</a></p>
            <p><a href="https://www.linkedin.com/company/hrn-europe---pan-european-hr-network?trk=tyah&amp;trkInfo=tarId%3A1420453121204%2Ctas%3Apan+europe%2Cidx%3A2-1-6" title="Linkedin" target="_blank"><img class="FooterSocialIcon" src="img/linkedin-icon.svg" alt="Facebook "> LinkedIn</a></p>
            <p><a href="http://www.slideshare.net/hrtecheurope" title="Slideshare" target="_blank"><img class="FooterSocialIcon" src="img/slideshare-icon.svg" alt="Slideshare "> Slideshare</a></p>
            <p><a href="#" title="Instagram" target="_blank"><img class="FooterSocialIcon" src="img/instagram-icon.svg" alt="Instagram "> Instagram</a></p>
        </div>
        <div class="ContactBlock" id="GeneralInquiries">
        	<h3>General Inquiries</h3>
            <p><a href="mailto:hrn@hrneurope.com" title="hrn@hrneurope.com">hrn@hrneurope.com</a></p>
            <p><a href="tel:003612011469" title="+36 1 201 1469">+36 1 201 1469</a></p>
            <p><a href="tel:00442034689689" title="+44 20 34 689 689">UK & IE: +44 20 34 689 689</a></p>
        </div>
    </div>
    <div id="CopyrightInfo">
    	<p>Copyright &copy; 2015 HRN.</p>
        <p>All Rights Reserved.</p>
        <p id="PrivacyPolicy">Privacy Policy I Terms and Conditions</p>
    </div>
</footer>
<!-- END Footer -->

<!-- Go to Top Button --> 
<a href="#" class="GoTopButton">
<div id="GoTopImg"><i class="fa fa-caret-up"></i></div>
</a> 
<!-- END Go to Top Button --> 

<!-- Menu JS -->
<script type="text/javascript" src="js/menu.js"></script>

<!-- Menu balck/white transitions -->
<script src="js/menu/about_menu.js"></script>

<script type="text/javascript" src="js/glitch.js"></script>

<script>
(function() {
	GlitchIntervall = setInterval(function(){ 
	   var id = Math.floor((Math.random() * 3) + 1);

	  glitch_handler (id, 1, 0);
	}, 10000);
	

})();
</script>  


<script>
(function() {
//HOVER EVENTS
$('body').on('mouseenter', '#HeaderLogoContainer, #AboutUsGlitchContainer, #FooterLogoContainer', function(event) {
	   var id = $(this).data('elemid');
	   glitch_handler (id, 1, 1);
	   
	   var ElemId = $(this).attr('id');
	   Glitch.activeId = ElemId;
	   clearInterval(GlitchIntervall);
	});	


$('body').on('mouseleave', '#HeaderLogoContainer, #AboutUsGlitchContainer, #FooterLogoContainer', function(event) {

       $('#'+Glitch.activeId).removeClass(Glitch.activeClass);
	    Glitch.activeId = '';
		
	//SET INTERVAL	
	GlitchIntervall = setInterval(function(){ 
	   var id = Math.floor((Math.random() * 3) + 1);

	  glitch_handler (id, 1, 0);
	}, 10000);
	//---------------
			
	});	

})();

</script>  

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
