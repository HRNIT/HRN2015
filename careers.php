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
<title>HRN | Careers</title>

<!-- Open Graph data 
<meta property="og:site_name" content="HRN"/>
<meta property="og:title" content="HRN | The Pan European HR Network"/>
<meta property="og:description" content="HRN – Unleash Your People!"/>
<meta property="og:url" content="http://hrn.io/careers">
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
<link rel="stylesheet" href="css/careers.css" />

<!-- Footer CSS -->
<link rel="stylesheet" href="css/footer.css" />

<!-- Scroll to top JS -->
<script src="js/gotopscroll.js"></script>

<!-- Job Opportunity Modal Hashtag Open -->
<script type="text/javascript">
$(document).ready(function() {
	var jobModal = window.location.hash.substr(1);
	$("#" + jobModal + "Modal").addClass("JobOpportunityModalActive");
});
</script>
<!-- END Job Opportunity Modal Hashtag Open -->

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
        	<li class="DesktopMenuItem" id="MenuItemAbout"><a href="about" title="ABOUT">About</a></li>
            <li class="DesktopMenuItem" id="MenuItemOurShows"><a href="http://dev.hrn.io/#OurShows" title="OUR SHOWS">Our Shows</a></li>
            <li class="DesktopMenuItem" id="MenuItemWhoAttends"><a href="http://dev.hrn.io/#WhoAttends" title="WHO ATTENDS">Who Attends</a></li>
            <li class="DesktopMenuItem" id="MenuItemOurClients"><a href="http://dev.hrn.io/#OurClients" title="OUR CLIENTS">Our Clients</a></li>
            <li class="DesktopMenuItem MenuItemActiveState" id="MenuItemCareers"><a href="careers" title="CAREERS">Careers</a></li>
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
<div id="MobileMenuBar"></div>
<nav id="MobileMenu">
    <!-- Mobile Menu List -->
	<ul id="MobileMenuList">
    	    <li class="MobileMenuItem" id="MobileMenuItemAbout"><a href="about" title="ABOUT">About</a></li>
            <li class="MobileMenuItem" id="MobileMenuItemOurShows"><a href="http://dev.hrn.io/#OurShows" title="OUR SHOWS">Our Shows</a></li>
            <li class="MobileMenuItem" id="MobileMenuItemWhoAttends"><a href="http://dev.hrn.io/#WhoAttends" title="WHO ATTENDS">Who Attends</a></li>
            <li class="MobileMenuItem" id="MobileMenuItemOurClients"><a href="http://dev.hrn.io/#OurClients" title="OUR CLIENTS">Our Clients</a></li>
            <li class="MobileMenuItem MenuItemActiveState" id="MobileMenuItemCareers"><a href="careers" title="CAREERS">Careers</a></li>
            <li class="MobileMenuItem" id="MobileMenuItemContact"><a href="#Contact" title="CONTACT">Contact</a></li>
    </ul>
    <!-- END Mobile Menu List -->
</nav>
<!-- END Mobile Menu -->

<!-- Meet the Team -->
<section id="MeetTheTeam">
	<h2 class="Headline">Meet The Team</h2>
    <p>Meet some of our growing team below from 
<span>United Kingdom, Hungary, Poland, Russia, Azerbaijan, Philippines, India, Iran, Vietnam, Venezuela and Ireland.</span></p>
    <!-- HRN Grid -->
   	<div id="HRNGrid">
        	<!-- Brigi Bősz -->
            <div class="HRNMember" id="HRNBoszB">
                   <div class="Overlay">
                       <h3 class="OverlayName">Brigi Bősz</h3>
                       <h4 class="OverlayTitle">Chief Success Manager</h4>
                   </div>
                   <img alt="Brigi Bősz" src="img/HRN-Team-Photos/brigi_bosz.jpg">
            </div>
            <!-- END Brigi Bősz -->

        	<!-- Hari Bandi -->
            <div class="HRNMember" id="HRNBandiH">
                   <div class="Overlay">
                       <h3 class="OverlayName">Hari Bandi</h3>
                       <h4 class="OverlayTitle">Manager - Delegate Acquisition</h4>
                   </div>
                   <img alt="Viki McCann" src="img/HRN-Team-Photos/hari_bandi.jpg">
            </div>
            <!-- END Hari Bandi -->
            
        	<!-- Claire Quito -->
            <div class="HRNMember" id="HRNQuitoC">
                   <div class="Overlay">
                       <h3 class="OverlayName">Claire Quito</h3>
                       <h4 class="OverlayTitle">Sales Director</h4>
                   </div>
                   <img alt="Claire Quito" src="img/HRN-Team-Photos/claire_quito.jpg">
            </div>
            <!-- END Claire Quito -->
            
        	<!-- Roman Veyshtagin -->
            <div class="HRNMember" id="HRNVeyshtaginR">
                   <div class="Overlay">
                       <h3 class="OverlayName">Roman Veyshtagin</h3>
                       <h4 class="OverlayTitle">Sales Manager</h4>
                   </div>
                   <img alt="Roman Veyshtagin" src="img/HRN-Team-Photos/roman_veyshtagin.jpg">
            </div>
            <!-- END Roman Veyshtagin -->                                    
	
        	<!-- Judit Szender -->
            <div class="HRNMember" id="HRNSzenderJ">
                   <div class="Overlay">
                       <h3 class="OverlayName">Judit Szender</h3>
                       <h4 class="OverlayTitle">Sales Manager</h4>
                   </div>
                   <img alt="Judit Szender" src="img/HRN-Team-Photos/judit_szender.jpg">
            </div>
            <!-- END Judit Szender -->                                    
    
        	<!-- Virág Barbély -->
            <div class="HRNMember" id="HRNBarbelyV">
                   <div class="Overlay">
                       <h3 class="OverlayName">Virág Barbély</h3>
                       <h4 class="OverlayTitle">Graphic Designer</h4>
                   </div>
                   <img alt="Judit Szender" src="img/HRN-Team-Photos/virag_barbely.jpg">
            </div>
            <!-- END Virág Barbély -->                                    

        	<!-- Antonio Lilon -->
            <div class="HRNMember" id="HRNLilonA">
                   <div class="Overlay">
                       <h3 class="OverlayName">Antonio Lilon</h3>
                       <h4 class="OverlayTitle">Sales Executive</h4>
                   </div>
                   <img alt="Antonio Lilon" src="img/HRN-Team-Photos/antonio_lilon.jpg">
            </div>
            <!-- END Antonio Lilon -->                                    

        	<!-- Kriszti Szabo -->
            <div class="HRNMember" id="HRNSzaboK">
                   <div class="Overlay">
                       <h3 class="OverlayName">Kriszti Szabo</h3>
                       <h4 class="OverlayTitle">Project Manager</h4>
                   </div>
                   <img alt="Kriszti Szabo" src="img/HRN-Team-Photos/kriszti_szabo.jpg">
            </div>
            <!-- END Kriszti Szabo -->                                    

        	<!-- Paweł Kaczmarczyk -->
            <div class="HRNMember" id="HRNKaczmarczykP">
                   <div class="Overlay">
                       <h3 class="OverlayName">Paweł Kaczmarczyk</h3>
                       <h4 class="OverlayTitle">Design Director</h4>
                   </div>
                   <img alt="Paweł Kaczmarczyk" src="img/HRN-Team-Photos/pawel_kaczmarczyk.jpg">
            </div>
            <!-- END Paweł Kaczmarczyk -->
            
        	<!-- Tomas Bottyan -->
            <div class="HRNMember" id="HRNBottyanT">
                   <div class="Overlay">
                       <h3 class="OverlayName">Tomas Bottyan</h3>
                       <h4 class="OverlayTitle">Chief Technology Officer</h4>
                   </div>
                   <img alt="Tomas Bottyan" src="img/HRN-Team-Photos/tomas_bottyan.jpg">
            </div>
            <!-- END Tomas Bottyan -->            
            
        	<!-- Alejandra Yepez -->
            <div class="HRNMember" id="HRNYepezA">
                   <div class="Overlay">
                       <h3 class="OverlayName">Alejandra Yepez</h3>
                       <h4 class="OverlayTitle">Sales Executive</h4>
                   </div>
                   <img alt="Alejandra Yepez" src="img/HRN-Team-Photos/alejandra_yepez.jpg">
            </div>
            <!-- END Alejandra Yepez -->            

        	<!-- Benedek Nagy -->
            <div class="HRNMember" id="HRNNagyB">
                   <div class="Overlay">
                       <h3 class="OverlayName">Benedek Nagy</h3>
                       <h4 class="OverlayTitle">Web Developer</h4>
                   </div>
                   <img alt="Benedek Nagy" src="img/HRN-Team-Photos/benedek_nagy.jpg">
            </div>
            <!-- END Benedek Nagy --> 
    
         	<!-- Sanjay Bawa -->
            <div class="HRNMember" id="HRNBawaS">
                   <div class="Overlay">
                       <h3 class="OverlayName">Sanjay Bawa</h3>
                       <h4 class="OverlayTitle">Sponsorship Manager</h4>
                   </div>
                   <img alt="Sanjay Bawa" src="img/HRN-Team-Photos/sanjay_bawa.jpg">
            </div>
            <!-- END Sanjay Bawa --> 

         	<!-- Adam Dragus -->
            <div class="HRNMember" id="HRNDragusA">
                   <div class="Overlay">
                       <h3 class="OverlayName">Adam Dragus</h3>
                       <h4 class="OverlayTitle">Graphic Designer</h4>
                   </div>
                   <img alt="Adam Dragus" src="img/HRN-Team-Photos/adam_dragus.jpg">
            </div>
            <!-- END Adam Dragus --> 

          	<!-- Judit Olah -->
            <div class="HRNMember" id="HRNOlahJ">
                   <div class="Overlay">
                       <h3 class="OverlayName">Judit Olah</h3>
                       <h4 class="OverlayTitle">Sponsorship Manager</h4>
                   </div>
                   <img alt="Judit Olah" src="img/HRN-Team-Photos/judit_olah.jpg">
            </div>
            <!-- END Judit Olah --> 
    </div>
    <!-- END HRN Grid -->
</section>
<!-- END Meet the Team -->

<!-- Careers -->
<section id="Careers">
	<h2 class="Headline">Careers</h2>
    <h3>If you value a workplace that promotes an entrepreneurial environment & accountability, exemplifies loyalty, offers the chaos that is growth, never compromises integrity and has a strong social conscience then start your career with us by applying now.</h3>
    <!-- Jobs Grid -->
    <div id="JobsGrid">
    	
        <div class="Job" id="ProjectManager">
        	<h4 class="JobName">Project Manager</h4>
            <h5 class="JobLocation">Budapest</h5>
            <p class="JobText">We are looking for a project manager.</p>
        </div>
 
         <div class="Job" id="RandomOfficeManager">
        	<h4 class="JobName">Random Office Manager</h4>
            <h5 class="JobLocation">Budapest</h5>
            <p class="JobText">dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
        </div>

        <div class="Job">
        	<h4 class="JobName">Project Manager</h4>
            <h5 class="JobLocation">Budapest</h5>
            <p class="JobText">dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
        </div>


        <div class="Job">
        	<h4 class="JobName">Project Manager</h4>
            <h5 class="JobLocation">Budapest</h5>
            <p class="JobText">dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
        </div>

        <div class="Job">
        	<h4 class="JobName">Project Manager</h4>
            <h5 class="JobLocation">Budapest</h5>
            <p class="JobText">dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
        </div>
        
        <div class="Job">
        	<h4 class="JobName">Project Manager</h4>
            <h5 class="JobLocation">Budapest</h5>
            <p class="JobText">dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
        </div>
        
        <div class="Job">
        	<h4 class="JobName">Project Manager</h4>
            <h5 class="JobLocation">Budapest</h5>
            <p class="JobText">dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
        </div>
        
        <div class="Job">
        	<h4 class="JobName">Project Manager</h4>
            <h5 class="JobLocation">Budapest</h5>
            <p class="JobText">dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
        </div>
        
        <div class="Job">
        	<h4 class="JobName">Project Manager</h4>
            <h5 class="JobLocation">Budapest</h5>
            <p class="JobText">dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
        </div>                                
    
    </div>
    <!-- Jobs Grid -->
</section>
<!-- END Careers -->

<!-- Testimonial -->
<section id="Testimonial">
	<h2 class="InvisibleHeadline">Testimonial</h2>
	<img id="QuoteSign" src="img/quote-sign-black.svg" alt="Quote">
    <p>“I Thoroughly enjoyed ...inspiring!”</p>
    <img id="TestimonialLogo" src="img/careers/linklaters-logo.svg" alt="TATA">
</section>
<!-- END Testimonial -->

<!-- Want to Know More -->
<section id="WantToKnowMore">
	<h2>Want to know more?</h2>
    <div id="ButtonsContainer">
    	<button class="HRNButton BlackButton" onClick="window.open('about', '_parent');">About</button>
        <button class="HRNButton BlackButton" onClick="window.open('index#OurShows', '_parent');">Our Shows</button>
        <button class="HRNButton BlackButton" onClick="window.open('index#WhoAttends', '_parent');">Who Attends</button>
        <button class="HRNButton BlackButton" onClick="window.open('index#OurClients', '_parent');">Our Clients</button>
        <button class="HRNButton BlackButton" id="ActiveHRNButton" onClick="window.open('careers', '_parent');">Careers</button>
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

<!-- Job Opportunity Modals -->
<!-- Project Manager -->
<div class="JobOpportunityModalContainer" id="ProjectManagerModal">
    <div class="JobOpportunityModal">
    	<img class="JobModalHRNLogo" alt="HRN" src="img/menu/hrn-logo-black.svg">
    	<h2 class="ModalJobName">Project Manager<span class="JobOpportunityModalClose">×</span></h2>
        <p class="ModalJobIntro">HRN is looking for a skilled full-time Front-End Developer to join our agency. You’ll be working alongside visual designers, interactive designers and software engineers under the direction of our Technical Leads.</p>
        <h3 class="HeadlineRequired">Required:</h3>
        <ul class="ListRequired">
            <li>4-5 years experience developing standards-based, semantic and well-formatted HTML and CSS</li>
            <li>3+ years experience working with Javascript and Javascript frameworks (jQuery & Prototype Preferred)</li>
            <li>Experience translating PSD comps and annotated wireframes into flexible, well thought out HTML templates</li>
            <li>Solid understanding of cross-browser/platform issues, from IE7 and Firefox 3.5 to all modern browsers</li>
            <li>Familiarity with usability guidelines and W3C AAA accessibility standards</li>
            <li>Familiarity with basic PHP structure / syntax</li>
            <li>Very comfortable with version control concepts and software (specifically SVN)</li>
            <li>Strong knowledge of WordPress</li>
            <li>Comfortable working closely with a UX/IA team</li>
            <li>Knowledge of SEO best practices</li>
            <li>Effective verbal and written communication skills</li>
            <li>Must be available to work on site</li>
        </ul>
      
        <h3 class="HeadlinePreferred">Preferred:</h3>
        <ul class="ListPreferred">
            <li>Solid experience with the Magento Platform</li>
            <li>Right at home working within MVC frameworks and CMS platforms</li>
            <li>Comfortable (and maybe a little uncomfortable!) working with Flash</li>
            <li>Hands-on experience with server-side scripting (PHP, Python, etc)</li>
            <li>Familiarity with the Google Maps API</li>
            <li>Interactive web agency experience </li>
        </ul>
        <p class="Compensations">Compensation will be commensurate with qualifications.</p>
        <h3 class="HeadlineShareOpportunity">ARE YOU THE ONE UP FOR THIS POSITION?</h3>
        <!-- Buttons Container -->
        <div class="ModalButtonsContainer">
            <button class="HRNButton BlackButton ModalApplyButton" onClick="window.open('#', '_blank');">Apply!</button>
            <button class="HRNButton BlueButton ModalShareButton">Share the Opportunity!</button>
            <div class="ModalShareIconsContainer">   
                <div class='ModalShareIcons'>
                    <a title='Share on Twitter' target='_blank' href='https://twitter.com/home?status=HRN is looking for a skilled Project Manager!%0Ahttp://bit.ly/1jSlf59%0A%23hrtechworld %23hrtech %23HRN' data-text="HRN is looking for a skilled Project Manager!" class="twittershare twitter"><div class='ModalShareIcon ModalTwitterIcon'><i class='fa fa-twitter'></i></div></a>
                    <a title='Share on Facebook' target='_blank' href='http://hrefshare.com/fc27'><div class='ModalShareIcon ModalFacebookIcon'><i class='fa fa-facebook'></i></div></a>
                    <a title='Share on Google+' target='_blank' href='http://hrefshare.com/41dc9'><div class='ModalShareIcon ModalGooglePlusIcon'><i class='fa fa-google-plus'></i></div></a>
                    <a title='Share on LinkedIn' target='_blank' href='http://hrefshare.com/2910a'><div class='ModalShareIcon ModalLinkedInIcon'><i class='fa fa-linkedin'></i></div></a>
                </div>
            </div>
        </div>
        <!-- END Buttons Container -->
    </div>
</div>
<!-- END Project Manager -->
<!-- Random Office Manager -->
<div class="JobOpportunityModalContainer" id="RandomOfficeManagerModal">
    <div class="JobOpportunityModal">
    	<img class="JobModalHRNLogo" alt="HRN" src="img/menu/hrn-logo-black.svg">
        <h2 class="ModalJobName">Random Office Manager<span class="JobOpportunityModalClose">×</span></h2>
        <p class="ModalJobIntro">HRN is looking for a skilled full-time Front-End Developer to join our agency. You’ll be working alongside visual designers, interactive designers and software engineers under the direction of our Technical Leads.</p>
        <h3 class="HeadlineRequired">Required:</h3>
        <ul class="ListRequired">
            <li>4-5 years experience developing standards-based, semantic and well-formatted HTML and CSS</li>
            <li>3+ years experience working with Javascript and Javascript frameworks (jQuery & Prototype Preferred)</li>
            <li>Experience translating PSD comps and annotated wireframes into flexible, well thought out HTML templates</li>
            <li>Solid understanding of cross-browser/platform issues, from IE7 and Firefox 3.5 to all modern browsers</li>
            <li>Familiarity with usability guidelines and W3C AAA accessibility standards</li>
            <li>Familiarity with basic PHP structure / syntax</li>
            <li>Very comfortable with version control concepts and software (specifically SVN)</li>
            <li>Strong knowledge of WordPress</li>
            <li>Comfortable working closely with a UX/IA team</li>
            <li>Knowledge of SEO best practices</li>
            <li>Effective verbal and written communication skills</li>
            <li>Must be available to work on site</li>
        </ul>
      
        <h3 class="HeadlinePreferred">Preferred:</h3>
        <ul class="ListPreferred">
            <li>Solid experience with the Magento Platform</li>
            <li>Right at home working within MVC frameworks and CMS platforms</li>
            <li>Comfortable (and maybe a little uncomfortable!) working with Flash</li>
            <li>Hands-on experience with server-side scripting (PHP, Python, etc)</li>
            <li>Familiarity with the Google Maps API</li>
            <li>Interactive web agency experience </li>
        </ul>
        <p class="Compensations">Compensation will be commensurate with qualifications.</p>
        <h3 class="HeadlineShareOpportunity">ARE YOU THE ONE UP FOR THIS POSITION?</h3>
        <!-- Buttons Container -->
        <div class="ModalButtonsContainer">
            <button class="HRNButton BlackButton ModalApplyButton" onClick="window.open('#', '_blank');">Apply!</button>
            <button class="HRNButton BlueButton ModalShareButton">Share the Opportunity!</button>
            <div class="ModalShareIconsContainer">   
                <div class='ModalShareIcons'>
                    <a title='Share on Twitter' target='_blank' href='#'><div class='ModalShareIcon ModalTwitterIcon'><i class='fa fa-twitter'></i></div></a>
                    <a title='Share on Facebook' target='_blank' href='#'><div class='ModalShareIcon ModalFacebookIcon'><i class='fa fa-facebook'></i></div></a>
                    <a title='Share on Google+' target='_blank' href='#'><div class='ModalShareIcon ModalGooglePlusIcon'><i class='fa fa-google-plus'></i></div></a>
                    <a title='Share on LinkedIn' target='_blank' href='#'><div class='ModalShareIcon ModalLinkedInIcon'><i class='fa fa-linkedin'></i></div></a>
                </div>
            </div>
        </div>
        <!-- END Buttons Container -->
    </div>
</div>
<!-- END Random Office Manager -->
<!-- END Job Opportunity Modals -->

<!-- Go to Top Button --> 
<a href="#" class="GoTopButton">
<div id="GoTopImg"><i class="fa fa-caret-up"></i></div>
</a> 
<!-- END Go to Top Button --> 

<!-- Menu JS -->
<script type="text/javascript" src="js/menu.js"></script>

<!-- Menu balck/white transitions -->
<script src="js/menu/careers_menu.js"></script>

<!-- Job Opportunity modal script -->
<script type="text/javascript">
$(document).ready(function() {
	$(".Job").click(function() {
		$("#" + this.id + "Modal").addClass("JobOpportunityModalActive");
	});
	// Close ALL panel
	$(".JobOpportunityModalClose").click(function() {
		$(".JobOpportunityModalContainer").removeClass("JobOpportunityModalActive");
	});
});
</script>
<!-- END Job Opportunity modal script -->

<script type="text/javascript" src="js/glitch.js"></script>

<script>
(function() {
	GlitchIntervall = setInterval(function(){ 
	   var id = Math.floor((Math.random() * 2) + 1);

	  glitch_handler (id, 2, 0);
	}, 10000);
	

})();
</script>  

<script>
(function() {
//HOVER EVENTS
$('body').on('mouseenter', '#HeaderLogoContainer, #FooterLogoContainer', function(event) {
	   var id = $(this).data('elemid');
	   glitch_handler (id, 0, 1);
	   
	   var ElemId = $(this).attr('id');
	   Glitch.activeId = ElemId;
	   clearInterval(GlitchIntervall);
	});	


$('body').on('mouseleave', '#HeaderLogoContainer, #FooterLogoContainer', function(event) {

       $('#'+Glitch.activeId).removeClass(Glitch.activeClass);
	    Glitch.activeId = '';
		
	//SET INTERVAL	
	GlitchIntervall = setInterval(function(){ 
	   var id = Math.floor((Math.random() * 2) + 1);

	  glitch_handler (id, 2, 0);
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
