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
<title>HRN | Human Resources Network</title>

<!-- Open Graph data 
<meta property="og:site_name" content="HRN"/>
<meta property="og:title" content="HRN | The Pan European HR Network"/>
<meta property="og:description" content="HRN – Unleash Your People!"/>
<meta property="og:url" content="http://hrn.io/">
<meta property="og:type" content="website"/>
<meta property="og:image" content="http://hrn.io/img/preview-images/preview-image-1.jpg" />
<meta property="og:image" content="http://hrn.io/img/preview-images/preview-image-3.jpg" />
<meta property="og:image" content="http://hrn.io/img/preview-images/preview-image-2.jpg" />-->

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

<!-- Include Reveal Modal -->
<link rel="stylesheet" href="vendor/reveal/reveal.css">
<script src="vendor/reveal/jquery.min.js" type="text/javascript"></script>
<script src="vendor/reveal/jquery.reveal.js" type="text/javascript"></script>

<!--Include Google fonts -->
<link href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" rel="stylesheet" type="text/css">

<!--Include Proxima Nova Font (Adobe Typekit) -->
<script src="//use.typekit.net/gku8ogo.js"></script>
<script>try{Typekit.load();}catch(e){}</script>

<!--Google Maps-->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>


<!--Include Font Awesome -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<!-- General CSS -->
<link rel="stylesheet" href="css/general.css" />

<!-- Menu CSS -->
<link rel="stylesheet" href="css/menu.css" />

<!-- Main Page CSS -->
<link rel="stylesheet" href="css/mainpage.css" />

<!-- Footer CSS -->
<link rel="stylesheet" href="css/footer.css" />

<!-- Scroll to top JS -->
<script src="js/gotopscroll.js"></script>

<!-- Keyframes -->
<script src="vendor/keyframes/jquery.keyframes.min.js" type="text/javascript"></script>

<!-- Thank you modal -->
<script type="text/javascript">
$(document).ready(function() {
	if(window.location.href.indexOf('#ThankYouForEnquiryModal') != -1) {
	   jQuery("#ThankYouForEnquiryModal").reveal();
	}   
});
</script>
<!-- END Thank you modal  -->

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
            <li class="DesktopMenuItem" id="MenuItemOurShows"><a href="#OurShows" title="OUR SHOWS">Our Shows</a></li>
            <li class="DesktopMenuItem" id="MenuItemWhoAttends"><a href="#WhoAttends" title="WHO ATTENDS">Who Attends</a></li>
            <li class="DesktopMenuItem" id="MenuItemOurClients"><a href="#OurClients" title="OUR CLIENTS">Our Clients</a></li>
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
    	    <li class="MobileMenuItem" id="MobileMenuItemAbout"><a href="about" title="ABOUT">About</a></li>
            <li class="MobileMenuItem" id="MobileMenuItemOurShows"><a href="#OurShows" title="OUR SHOWS">Our Shows</a></li>
            <li class="MobileMenuItem" id="MobileMenuItemWhoAttends"><a href="#WhoAttends" title="WHO ATTENDS">Who Attends</a></li>
            <li class="MobileMenuItem" id="MobileMenuItemOurClients"><a href="#OurClients" title="OUR CLIENTS">Our Clients</a></li>
            <li class="MobileMenuItem" id="MobileMenuItemCareers"><a href="careers" title="CAREERS">Careers</a></li>
            <li class="MobileMenuItem" id="MobileMenuItemContact"><a href="#Contact" title="CONTACT">Contact</a></li>
    </ul>
    <!-- END Mobile Menu List -->
</nav>
<!-- END Mobile Menu -->

<!-- Header -->
<header>
	<!-- Header Inner Container -->
    <h1 class="InvisibleHeadline">Unleash Your People!</h1>
    <div id="HeaderInnerContainer">
    	<div id="UnleashYourPeopleGlitchContainer" data-elemid="2" class="GlitchContainer">
            <img class="UnleashYourPeopleGlitch GlitchImage" src="img/mainpage/header/unleash-your-people.svg" alt="UNLEASH YOUR PEOPLE!">
            <img class="UnleashYourPeopleGlitch GlitchImage" src="img/mainpage/header/unleash-your-people.svg" alt="UNLEASH YOUR PEOPLE!">
            <img class="UnleashYourPeopleGlitch GlitchImage" src="img/mainpage/header/unleash-your-people.svg" alt="UNLEASH YOUR PEOPLE!">
        </div>
        <h2><span>Inventing the future of HR!</span> <button class="HRNButton WhiteButton" onClick="window.open('about', '_parent');">MORE!</button></h2>
        
        <div id="HeaderTestimonial">
        	<img id="QuoteSign" src="img/quote-sign.svg" alt="Quote">
            <p id="HeaderQuote">“HRN brings together the Bold Thinkers, the Disrupters and the Radical Doers who are 
Inventing the Future of HR!” </p>
			<p id="QuoteAuthor">GARY HAMEL<br>
Professor, Author & Founder – The Management Lab<br>
			<img id="WSJLogo" src="img/mainpage/header/wsj-logo.svg" alt="WSJ"><span>Ranked #1 Thinker in the World</span></p>
        </div>
    </div>	
    <!-- END Header Inner Container -->
	<i class="fa fa-angle-down"></i>
</header>
<!-- END Header -->

<!-- Events -->
<a id="OurShows"></a>
<section id="Events">
	<h2 class="InvisibleHeadline">Events</h2>
    <!-- Paris -->
    <div id="ParisEvent">
    	<div class="EventInnerContainer">
        	<div class="EventLogoContainer">
            	<img id="ParisLogo" src="img/mainpage/events/paris-event-logo.svg" alt="HR Tech World Congress">
                <h3>27-28 OCTOBER 2015</h3>
                <div id="ParisTextGlitch" data-elemid="4" class="GlitchContainer">
                	<img class="ParisText GlitchImage" src="img/mainpage/events/paris-text.svg" alt="Paris">
                    <img class="ParisText GlitchImage" src="img/mainpage/events/paris-text.svg" alt="Paris">
                    <img class="ParisText GlitchImage" src="img/mainpage/events/paris-text.svg" alt="Paris">
                </div>
                <button class="HRNButton WhiteButton" onClick="window.open('http://hrtechcongress.com', '_blank');">MORE!</button>
            </div>
        	<div id="EiffelTower">
               <div id="EiffelPartOne" class="EiffelClass" data-correctdata="5.5px"><img class="EiffelPart" data-broken_margin="-5px 0 0 -4px" data-fulldata="0" src="img/mainpage/events/eiffel/eiffel_part_one.png" alt="Eiffel Tower"></div>
               <div id="EiffelPartTwo" class="EiffelClass" data-correctdata="5.8px"><img class="EiffelPart" data-broken_margin="3px 0 0 -25px" data-fulldata="0px 0 -1px 0px" src="img/mainpage/events/eiffel/eiffel_part_two.png" alt="Eiffel Tower"></div>
               <div id="EiffelPartThree" class="EiffelClass" data-correctdata="7.1px"><img class="EiffelPart" data-broken_margin="4px 0 0 10px" data-fulldata="0" src="img/mainpage/events/eiffel/eiffel_part_three.png" alt="Eiffel Tower"></div>
               <div id="EiffelPartFour" class="EiffelClass" data-correctdata="9.3px"><img class="EiffelPart" data-broken_margin="0 0 0 -30px" data-fulldata="-2px 0 0 0" src="img/mainpage/events/eiffel/eiffel_part_four.png" alt="Eiffel Tower"></div>
               <div id="EiffelPartFive" class="EiffelClass" data-correctdata="16.2px"><img class="EiffelPart" data-broken_margin="6px 0 0 2px" data-fulldata="0" src="img/mainpage/events/eiffel/eiffel_part_five.png" alt="Eiffel Tower"></div>
               <div id="EiffelPartSix" class="EiffelClass" data-correctdata="28px"><img class="EiffelPart" data-broken_margin="-2px 0 0 -20px" data-fulldata="0" src="img/mainpage/events/eiffel/eiffel_part_six.png" alt="Eiffel Tower"></div>
               <div id="EiffelPartSeven" class="EiffelClass" data-correctdata="28px"><img class="EiffelPart" data-broken_margin="2px 0 0 8px" data-fulldata="0" src="img/mainpage/events/eiffel/eiffel_part_seven.png" alt="Eiffel Tower"></div>
               <div id="EiffelPartEight" class="EiffelClass" data-correctdata="39px"><img class="EiffelPart" data-broken_margin="-3px 0 0 -10px" data-fulldata="0" src="img/mainpage/events/eiffel/eiffel_part_eight.png" alt="Eiffel Tower"></div>
            
            </div>
        </div>
    </div>
    <!-- END Paris -->
    <!-- London -->
    <div id="LondonEvent">
        <div class="EventInnerContainer">
            <div class="EventLogoContainer">
            	<img id="LondonLogo" src="img/mainpage/events/london-event-logo.svg" alt="HR Tech World Congress Spring">
                <h3>15-16 MARCH 2016</h3>
                 <div id="LondonTextGlitch" data-elemid="5" class="GlitchContainer">
                	<img class="LondonText GlitchImage" src="img/mainpage/events/london-text.svg" alt="London">
                    <img class="LondonText GlitchImage" src="img/mainpage/events/london-text.svg" alt="London">
                    <img class="LondonText GlitchImage" src="img/mainpage/events/london-text.svg" alt="London">
                </div>
                <button class="HRNButton WhiteButton" onClick="window.open('http://london.hrtechcongress.com', '_blank');">MORE!</button>
            </div>
            <div id="BigBen">
               <div id="BigBenPartOne" data-correctdata="10.3px" class="BigBenClass"><img class="BigBenPart" data-broken_margin="-5px 0 0 10px" data-fulldata="0 -1px" src="img/mainpage/events/bigben/big_ben_part_one.png" alt="Big Ben"></div>
               <div id="BigBenPartTwo" data-correctdata="10.3px" class="BigBenClass"><img class="BigBenPart" data-broken_margin="2px 0 0 25px" data-fulldata="0" src="img/mainpage/events/bigben/big_ben_part_two.png" alt="Big Ben"></div>
               <div id="BigBenPartThree" data-correctdata="20.6px" class="BigBenClass"><img class="BigBenPart" data-broken_margin="2px 0 0 5px" data-fulldata="0" src="img/mainpage/events/bigben/big_ben_part_three.png" alt="Big Ben"></div>
               <div id="BigBenPartFour" data-correctdata="24.7px" class="BigBenClass"><img class="BigBenPart" data-broken_margin="2px 0 0 -25px" data-fulldata="0" src="img/mainpage/events/bigben/big_ben_part_four.png" alt="Big Ben"></div>
               <div id="BigBenPartFive" data-correctdata="20.5px" class="BigBenClass"><img class="BigBenPart" data-broken_margin="2px 0 0 30px" data-fulldata="0" src="img/mainpage/events/bigben/big_ben_part_five.png" alt="Big Ben"></div>
               <div id="BigBenPartSix" data-correctdata="21px" class="BigBenClass"><img class="BigBenPart" data-broken_margin="2px 0 0 -6px" data-fulldata="-2px -1px" src="img/mainpage/events/bigben/big_ben_part_six.png" alt="Big Ben"></div>
            
            </div>
        </div>
    </div>
    <!-- END London -->
</section>
<!-- END Events -->

<!-- Speakers -->
<a id="WhoAttends"></a>
<section id="Speakers">
	<h2 class="Headline">WHO ATTENDS OUR EVENTS</h2>
	
    <!-- Speakers Container -->
    <div id="SpeakersContainer"> 
    	<ul id="SpeakersGrid">
        	<!-- Sir Richard Branson -->
            <li class="Speaker SliphoverContainer" id="SpeakersRichardS" data-sliphover-caption="
                   		<h3 class='SpeakerName'>Sir Richard Branson</h3>
                        <p class='SpeakerJobtitle'>Founder</p>
                        <p class='SpeakerCompany'>Virgin Group</p>
                        <p class='SpeakerInfo'>Virgin Group holds +200 companies, including the recent  Virgin Galactic. Sir Richard Branson is one of the world’s greatest  entrepreneurs known for his adventurous spirit, irresistible charm &amp; charisma and sporting achievements.</p>
                        <div class='SpeakerSocialIconContainer'>
                        	<a title='Twitter' target='_blank' href='https://twitter.com/richardbranson'><div class='SpeakerSocialIcon SpeakerTwitterIcon'><i class='fa fa-twitter'></i></div></a>
                            <a title='Facebook' target='_blank' href='https://www.facebook.com/RichardBranson'><div class='SpeakerSocialIcon SpeakerFacebookIcon'><i class='fa fa-facebook'></i></div></a>
                            <a title='Google+' target='_blank' href='#'><div class='SpeakerSocialIcon SpeakerGooglePlusIcon'><i class='fa fa-google-plus'></i></div></a>
                            <a title='LinkedIn' target='_blank' href='https://www.linkedin.com/in/rbranson'><div class='SpeakerSocialIcon SpeakerLinkedInIcon'><i class='fa fa-linkedin'></i></div></a>
                        </div>">
                    <div class="SpeakersImageContainer">
                          <div class="SpeakerOverlay">
                            <h3 class="SpeakerOverlayName">Sir Richard Branson</h3>
                            <h4 class="SpeakerOverlayTitle">Founder</h4>
                            <h4 class="SpeakerOverlayCompany">Virgin Group</h4>
                         </div>
                   <img alt="Sir Richard Branson" src="img/mainpage/speakers/SpeakerPhotos/sir_richard_branson.jpg">
                   </div>
            </li>
            <!-- END Sir Richard Branson -->

        	<!-- Rachel Botsman -->
            <li class="Speaker SliphoverContainer" id="SpeakersBotsmanR" data-sliphover-caption="
            			<h3 class='SpeakerName'>Rachel Botsman</h3>
                        <p class='SpeakerJobtitle'>Founder</p>
                        <p class='SpeakerCompany'>Collaborative Lab</p>
                        <p class='SpeakerInfo'>Rachel Botsman is a global thought leader on the power of collaboration through technology to transform the way we live, work and consume. She has inspired a new economy with her influential book What's Mine is Yours: How Collaborative Consumption Is Changing The Way We Live. TIME Magazine recently called Collaborative Consumption one of the '10 Ideas That Will Change The World'. </p>
                        <div class='SpeakerSocialIconContainer'>
                        	<a title='Twitter' target='_blank' href='https://twitter.com/rachelbotsman'><div class='SpeakerSocialIcon SpeakerTwitterIcon'><i class='fa fa-twitter'></i></div></a>
                            <a title='LinkedIn' target='_blank' href='https://www.linkedin.com/pub/rachel-botsman/b/696/798'><div class='SpeakerSocialIcon SpeakerLinkedInIcon'><i class='fa fa-linkedin'></i></div></a>
                        </div>">
                    <div class="SpeakersImageContainer">
                          <div class="SpeakerOverlay">
                            <h3 class="SpeakerOverlayName">Rachel Botsman</h3>
                            <h4 class="SpeakerOverlayTitle">Founder</h4>
                            <h4 class="SpeakerOverlayCompany">Collaborative Lab</h4>
                         </div>
                   <img alt="Rachel Botsman" src="img/mainpage/speakers/SpeakerPhotos/rachel_botsman.jpg">
                   </div>
            </li>
            <!-- END Rachel Botsman -->            

        	<!-- David Shing -->
            <li class="Speaker SliphoverContainer" id="SpeakerShingD" data-sliphover-caption="
                   		<h3 class='SpeakerName'>David Shing</h3>
                        <p class='SpeakerJobtitle'>Digital Prophet</p>
                        <p class='SpeakerCompany'>AOL</p>
                        <p class='SpeakerInfo'>David Shing is AOL’s Digital Prophet. He spends most of his time watching the future take shape across the vast online landscape. The rest he spends talking to people about where things are headed and how to get the most out of it. He identifies opportunities for AOL and works with marketing teams to develop creative brand engagement.</p>
                        <div class='SpeakerSocialIconContainer'>
                        	<a title='Twitter' target='_blank' href='https://twitter.com/shingy'><div class='SpeakerSocialIcon SpeakerTwitterIcon'><i class='fa fa-twitter'></i></div></a>
                            <a title='LinkedIn' target='_blank' href='https://www.linkedin.com/in/davidshing'><div class='SpeakerSocialIcon SpeakerLinkedInIcon'><i class='fa fa-linkedin'></i></div></a>
                        </div>">
                    <div class="SpeakersImageContainer">
                          <div class="SpeakerOverlay">
                            <h3 class="SpeakerOverlayName">David Shing</h3>
                            <h4 class="SpeakerOverlayTitle">Digital Prophet</h4>
                            <h4 class="SpeakerOverlayCompany">AOL</h4>
                         </div>
                   <img alt="David Shing" src="img/mainpage/speakers/SpeakerPhotos/david_shing.jpg">
                   </div>
            </li>
            <!-- END David Shing --> 

        	<!-- Leighanne Levensaler -->
            <li class="Speaker SliphoverContainer" id="SpeakerLevensalerL" data-sliphover-caption="
                   		<h3 class='SpeakerName'>Leighanne Levensaler</h3>
                        <p class='SpeakerJobtitle'>Senior Vice President</p>
                        <p class='SpeakerCompany'>Workday</p>
                        <p class='SpeakerInfo'>Leighanne Levensaler is senior vice president at Workday and is responsible for the direction and strategy of Workday's applications. Prior to joining Workday in 2009, Leighanne was principal analyst and director of talent management research at Bersin & Associates. Before that, Leighanne spent more than a decade working with large companies to develop HR strategies and integrated talent development solutions. </p>
                        <div class='SpeakerSocialIconContainer'>
                        	<a title='Twitter' target='_blank' href='https://twitter.com/LeighLevensaler'><div class='SpeakerSocialIcon SpeakerTwitterIcon'><i class='fa fa-twitter'></i></div></a>
                            <a title='LinkedIn' target='_blank' href='https://www.linkedin.com/in/leighannelevensaler'><div class='SpeakerSocialIcon SpeakerLinkedInIcon'><i class='fa fa-linkedin'></i></div></a>
                        </div>">
                    <div class="SpeakersImageContainer">
                          <div class="SpeakerOverlay">
                            <h3 class="SpeakerOverlayName">Leighanne Levensaler</h3>
                            <h4 class="SpeakerOverlayTitle">Senior Vice President</h4>
                            <h4 class="SpeakerOverlayCompany">Workday</h4>
                         </div>
                   <img alt="Leighanne Levensaler" src="img/mainpage/speakers/SpeakerPhotos/leighanne_levensaler.jpg">
                   </div>
            </li>
            <!-- END Leighanne Levensaler -->

        	<!-- Peter Hinssen -->
            <li class="Speaker SliphoverContainer" id="SpeakerHinssenP" data-sliphover-caption="
                   		<h3 class='SpeakerName'>Peter Hinssen</h3>
                        <p class='SpeakerJobtitle'>Chairman & Co-Founder</p>
                        <p class='SpeakerCompany'>Nexxworks</p>
                        <p class='SpeakerInfo'>Peter is one of Europe’s thought leaders on disruptive innovation. He is obsessed with networks as the most fundamental driver of progress. He wrote about them in ‘The Networks Always Wins’. </p>
                        <div class='SpeakerSocialIconContainer'>
                        	<a title='Twitter' target='_blank' href='https://twitter.com/hinssen'><div class='SpeakerSocialIcon SpeakerTwitterIcon'><i class='fa fa-twitter'></i></div></a>
                            <a title='LinkedIn' target='_blank' href='https://www.linkedin.com/in/phinssen'><div class='SpeakerSocialIcon SpeakerLinkedInIcon'><i class='fa fa-linkedin'></i></div></a>
                        </div>">
                    <div class="SpeakersImageContainer">
                          <div class="SpeakerOverlay">
                            <h3 class="SpeakerOverlayName">Peter Hinssen</h3>
                            <h4 class="SpeakerOverlayTitle">Chairman & Co-Founder</h4>
                            <h4 class="SpeakerOverlayCompany">Nexxworks</h4>
                         </div>
                   <img alt="Peter Hinssen" src="img/mainpage/speakers/SpeakerPhotos/peter_hinssen.jpg">
                   </div>
            </li>
            <!-- END Peter Hinssen -->

        	<!-- Yvonne Agyei -->
            <li class="Speaker SliphoverContainer" id="SpeakerAgyeiY" data-sliphover-caption="
                   		<h3 class='SpeakerName'>Yvonne Agyei</h3>
                        <p class='SpeakerJobtitle'>Vice President of Global Benefits</p>
                        <p class='SpeakerCompany'>Google</p>
                        <p class='SpeakerInfo'></p>
                        <div class='SpeakerSocialIconContainer'>
                        	<a title='Twitter' target='_blank' href='#'><div class='SpeakerSocialIcon SpeakerTwitterIcon'><i class='fa fa-twitter'></i></div></a>
                            <a title='Facebook' target='_blank' href='#'><div class='SpeakerSocialIcon SpeakerFacebookIcon'><i class='fa fa-facebook'></i></div></a>
                            <a title='Google+' target='_blank' href='#'><div class='SpeakerSocialIcon SpeakerGooglePlusIcon'><i class='fa fa-google-plus'></i></div></a>
                            <a title='LinkedIn' target='_blank' href='#'><div class='SpeakerSocialIcon SpeakerLinkedInIcon'><i class='fa fa-linkedin'></i></div></a>
                        </div>">
                    <div class="SpeakersImageContainer">
                          <div class="SpeakerOverlay">
                            <h3 class="SpeakerOverlayName">Yvonne Agyei</h3>
                            <h4 class="SpeakerOverlayTitle">Vice President of Global Benefits</h4>
                            <h4 class="SpeakerOverlayCompany">Google</h4>
                         </div>
                   <img alt="Yvonne Agyei" src="img/mainpage/speakers/SpeakerPhotos/yvonne_agyei.jpg">
                   </div>
            </li>
            <!-- END Yvonne Agyei -->     
            
        	<!-- Gary Hamel -->
            <li class="Speaker SliphoverContainer" id="SpeakerHamelG" data-sliphover-caption="
                   		<h3 class='SpeakerName'>Gary Hamel</h3>
                        <p class='SpeakerJobtitle'>Professor, Author & Founder</p>
                        <p class='SpeakerCompany'>The Management Lab</p>
                        <p class='SpeakerInfo'>The Wall Street Journal ranked Harvard Gary Hamel #1 as the World’s Most Influential Business Thinker and Fortune Magazine has called him the World’s leading expert on business strategy.</p>
                        <div class='SpeakerSocialIconContainer'>
                            <a title='LinkedIn' target='_blank' href='http://www.linkedin.com/pub/gary-hamel/6/b09/791'><div class='SpeakerSocialIcon SpeakerLinkedInIcon'><i class='fa fa-linkedin'></i></div></a>
                        </div>">
                    <div class="SpeakersImageContainer">
                          <div class="SpeakerOverlay">
                            <h3 class="SpeakerOverlayName">Gary Hamel</h3>
                            <h4 class="SpeakerOverlayTitle">Professor, Author & Founder</h4>
                            <h4 class="SpeakerOverlayCompany">The Management Lab</h4>
                         </div>
                   <img alt="Gary Hamel" src="img/mainpage/speakers/SpeakerPhotos/gary_hamel.jpg">
                   </div>
            </li>
            <!-- END Gary Hamel -->  
            
        	<!-- Gretchen Alarcon -->
            <li class="Speaker SliphoverContainer" id="SpeakerAlarconG" data-sliphover-caption="
                   		<h3 class='SpeakerName'>Gretchen Alarcon</h3>
                        <p class='SpeakerJobtitle'>Vice President</p>
                        <p class='SpeakerCompany'>Oracle</p>
                        <p class='SpeakerInfo'>Gretchen Alarcon is Vice President, Human Capital Management (HCM) Strategy at Oracle, where she leads the strategy team responsible for Oracle HCM Cloud applications. Ms. Alarcon has spent most of her career in HCM. She was an HR practitioner at National Semicondicutor, Ford and Silicon Graphics. While at Icarian, she transitioned to product strategy. </p>
                        <div class='SpeakerSocialIconContainer'>
                        	<a title='Twitter' target='_blank' href='https://twitter.com/GretchenA'><div class='SpeakerSocialIcon SpeakerTwitterIcon'><i class='fa fa-twitter'></i></div></a>
                            <a title='LinkedIn' target='_blank' href='https://www.linkedin.com/in/gretchenalarcon'><div class='SpeakerSocialIcon SpeakerLinkedInIcon'><i class='fa fa-linkedin'></i></div></a>
                        </div>">
                    <div class="SpeakersImageContainer">
                          <div class="SpeakerOverlay">
                            <h3 class="SpeakerOverlayName">Gretchen Alarcon</h3>
                            <h4 class="SpeakerOverlayTitle">Vice President</h4>
                            <h4 class="SpeakerOverlayCompany">Oracle</h4>
                         </div>
                   <img alt="Gretchen Alarcon" src="img/mainpage/speakers/SpeakerPhotos/gretchen_alarcon.jpg">
                   </div>
            </li>
            <!-- END Gretchen Alarcon -->                              

        	<!-- Dan Pink -->
            <li class="Speaker SliphoverContainer" id="SpeakerPinkD" data-sliphover-caption="
                   		<h3 class='SpeakerName'>Dan Pink</h3>
                        <p class='SpeakerJobtitle'>Author</p>
                        <p class='SpeakerCompany'>www.danpink.com</p>
                        <p class='SpeakerInfo'></p>
                        <div class='SpeakerSocialIconContainer'>
                        	<a title='Twitter' target='_blank' href='#'><div class='SpeakerSocialIcon SpeakerTwitterIcon'><i class='fa fa-twitter'></i></div></a>
                            <a title='Facebook' target='_blank' href='#'><div class='SpeakerSocialIcon SpeakerFacebookIcon'><i class='fa fa-facebook'></i></div></a>
                            <a title='Google+' target='_blank' href='#'><div class='SpeakerSocialIcon SpeakerGooglePlusIcon'><i class='fa fa-google-plus'></i></div></a>
                            <a title='LinkedIn' target='_blank' href='#'><div class='SpeakerSocialIcon SpeakerLinkedInIcon'><i class='fa fa-linkedin'></i></div></a>
                        </div>">
                    <div class="SpeakersImageContainer">
                          <div class="SpeakerOverlay">
                            <h3 class="SpeakerOverlayName">Dan Pink</h3>
                            <h4 class="SpeakerOverlayTitle">Author</h4>
                            <h4 class="SpeakerOverlayCompany">www.danpink.com</h4>
                         </div>
                   <img alt="Dan Pink" src="img/mainpage/speakers/SpeakerPhotos/dan_pink.jpg">
                   </div>
            </li>
            <!-- END Dan Pink --> 

        	<!-- Katherine Yip -->
            <li class="Speaker SliphoverContainer" id="SpeakerYipK" data-sliphover-caption="
                   		<h3 class='SpeakerName'>Katherine Yip</h3>
                        <p class='SpeakerJobtitle'>Co-Founder</p>
                        <p class='SpeakerCompany'>VinaCapital Foundation</p>
                        <p class='SpeakerInfo'></p>
                        <div class='SpeakerSocialIconContainer'>
                        	<a title='Twitter' target='_blank' href='#'><div class='SpeakerSocialIcon SpeakerTwitterIcon'><i class='fa fa-twitter'></i></div></a>
                            <a title='Facebook' target='_blank' href='#'><div class='SpeakerSocialIcon SpeakerFacebookIcon'><i class='fa fa-facebook'></i></div></a>
                            <a title='Google+' target='_blank' href='#'><div class='SpeakerSocialIcon SpeakerGooglePlusIcon'><i class='fa fa-google-plus'></i></div></a>
                            <a title='LinkedIn' target='_blank' href='#'><div class='SpeakerSocialIcon SpeakerLinkedInIcon'><i class='fa fa-linkedin'></i></div></a>
                        </div>">
                    <div class="SpeakersImageContainer">
                          <div class="SpeakerOverlay">
                            <h3 class="SpeakerOverlayName">Katherine Yip</h3>
                            <h4 class="SpeakerOverlayTitle">Co-Founder</h4>
                            <h4 class="SpeakerOverlayCompany">VinaCapital Foundation</h4>
                         </div>
                   <img alt="Katherine Yip" src="img/mainpage/speakers/SpeakerPhotos/katherine_yip.jpg">
                   </div>
            </li>
            <!-- END Katherine Yip -->
            
        	<!-- Yves Morieux -->
            <li class="Speaker SliphoverContainer" id="SpeakerMorieuxY" data-sliphover-caption="
                   		<h3 class='SpeakerName'>Yves Morieux</h3>
                        <p class='SpeakerJobtitle'>Managing Director</p>
                        <p class='SpeakerCompany'>Boston Consulting Group</p>
                        <p class='SpeakerInfo'>Yves Morieux intervenes on a worldwide basis as an expert in corporate transformation and leads the firm's global development of approaches to help corporations create the structural and behavioral conditions for competitive advantage. </p>
                        <div class='SpeakerSocialIconContainer'>
                            <a title='LinkedIn' target='_blank' href='https://www.linkedin.com/pub/yves-morieux/0/969/395'><div class='SpeakerSocialIcon SpeakerLinkedInIcon'><i class='fa fa-linkedin'></i></div></a>
                        </div>">
                    <div class="SpeakersImageContainer">
                          <div class="SpeakerOverlay">
                            <h3 class="SpeakerOverlayName">Yves Morieux</h3>
                            <h4 class="SpeakerOverlayTitle">Managing Director</h4>
                            <h4 class="SpeakerOverlayCompany">Boston Consulting Group</h4>
                         </div>
                   <img alt="Yves Morieux" src="img/mainpage/speakers/SpeakerPhotos/yves_morieux.jpg">
                   </div>
            </li>
            <!-- END Yves Morieux -->   
            
        	<!-- Naomi Bloom -->
            <li class="Speaker SliphoverContainer" id="SpeakerBloomN" data-sliphover-caption="
                   		<h3 class='SpeakerName'>Naomi Bloom</h3>
                        <p class='SpeakerJobtitle'>Managing Partner</p>
                        <p class='SpeakerCompany'>Bloom & Wallace</p>
                        <p class='SpeakerInfo'>The leading independent voice, business and platform strategy consultant, and thought leader in the HR technology/HR outsourcing industry. </p>
                        <div class='SpeakerSocialIconContainer'>
                        	<a title='Twitter' target='_blank' href='https://twitter.com/InFullBloomUS'><div class='SpeakerSocialIcon SpeakerTwitterIcon'><i class='fa fa-twitter'></i></div></a>
                            <a title='LinkedIn' target='_blank' href='https://www.linkedin.com/profile/view?id=33854558&authType=NAME_SEARCH&authToken=c1v-&locale=en_US&srchid=913159041432127603118&srchindex=1&srchtotal=6&trk=vsrp_people_res_name&trkInfo=VSRPsearchId%3A913159041432127603118%2CVSRPtargetId%3A33854558%2CVSRPcmpt%3Aprimary%2CVSRPnm%3Atrue'><div class='SpeakerSocialIcon SpeakerLinkedInIcon'><i class='fa fa-linkedin'></i></div></a>
                        </div>">
                    <div class="SpeakersImageContainer">
                          <div class="SpeakerOverlay">
                            <h3 class="SpeakerOverlayName">Naomi Bloom</h3>
                            <h4 class="SpeakerOverlayTitle">Managing Partner</h4>
                            <h4 class="SpeakerOverlayCompany">Bloom & Wallace</h4>
                         </div>
                   <img alt="Naomi Bloom" src="img/mainpage/speakers/SpeakerPhotos/naomi_bloom.jpg">
                   </div>
            </li>
            <!-- END Naomi Bloom -->                     

        	<!-- Thomas Otter -->
            <li class="Speaker SliphoverContainer" id="SpeakerOtterT" data-sliphover-caption="
                   		<h3 class='SpeakerName'>Thomas Otter</h3>
                        <p class='SpeakerJobtitle'>Vice President Product Management</p>
                        <p class='SpeakerCompany'>SAP</p>
                        <p class='SpeakerInfo'>Thomas Otter is the Vice President of Product Management for Employee Central at SuccessFactors, an SAP Company.</p>
                        <div class='SpeakerSocialIconContainer'>
                            <a title='LinkedIn' target='_blank' href='https://www.linkedin.com/in/thomasotter'><div class='SpeakerSocialIcon SpeakerLinkedInIcon'><i class='fa fa-linkedin'></i></div></a>
                        </div>">
                    <div class="SpeakersImageContainer">
                          <div class="SpeakerOverlay">
                            <h3 class="SpeakerOverlayName">Thomas Otter</h3>
                            <h4 class="SpeakerOverlayTitle">Vice President Product Management</h4>
                            <h4 class="SpeakerOverlayCompany">SAP</h4>
                         </div>
                   <img alt="Thomas Otter" src="img/mainpage/speakers/SpeakerPhotos/thomas_otter.jpg">
                   </div>
            </li>
            <!-- END Thomas Otter --> 

        	<!-- Debbie Landers -->
            <li class="Speaker SliphoverContainer" id="SpeakerLandersD" data-sliphover-caption="
                   		<h3 class='SpeakerName'>Debbie Landers</h3>
                        <p class='SpeakerJobtitle'>General Manager</p>
                        <p class='SpeakerCompany'>IBM</p>
                        <p class='SpeakerInfo'>Debbie is responsible for orchestrating all aspects of enabling Kenexa/IBM Smarter Workforce successful performance. She is accountable for driving growth through initiatives that take advantage of IBM reach and coverage and build on the strength of IBM’s position in Social Business, Analytics and HR Services. </p>
                        <div class='SpeakerSocialIconContainer'>
                            <a title='LinkedIn' target='_blank' href='http://ca.linkedin.com/pub/debbie-landers/6/66/a53'><div class='SpeakerSocialIcon SpeakerLinkedInIcon'><i class='fa fa-linkedin'></i></div></a>
                        </div>">
                    <div class="SpeakersImageContainer">
                          <div class="SpeakerOverlay">
                            <h3 class="SpeakerOverlayName">Debbie Landers</h3>
                            <h4 class="SpeakerOverlayTitle">General Manager</h4>
                            <h4 class="SpeakerOverlayCompany">IBM</h4>
                         </div>
                   <img alt="Debbie Landers" src="img/mainpage/speakers/SpeakerPhotos/debbie_landers.jpg">
                   </div>
            </li>
            <!-- END Debbie Landers -->

        	<!-- Mark Hurd -->
            <li class="Speaker SliphoverContainer" id="SpeakerHurdM" data-sliphover-caption="
                   		<h3 class='SpeakerName'>Mark Hurd</h3>
                        <p class='SpeakerJobtitle'>Chief Executive Officer</p>
                        <p class='SpeakerCompany'>Oracle Corporation</p>
                        <p class='SpeakerInfo'></p>
                        <div class='SpeakerSocialIconContainer'>
                        	<a title='Twitter' target='_blank' href='#'><div class='SpeakerSocialIcon SpeakerTwitterIcon'><i class='fa fa-twitter'></i></div></a>
                            <a title='Facebook' target='_blank' href='#'><div class='SpeakerSocialIcon SpeakerFacebookIcon'><i class='fa fa-facebook'></i></div></a>
                            <a title='Google+' target='_blank' href='#'><div class='SpeakerSocialIcon SpeakerGooglePlusIcon'><i class='fa fa-google-plus'></i></div></a>
                            <a title='LinkedIn' target='_blank' href='#'><div class='SpeakerSocialIcon SpeakerLinkedInIcon'><i class='fa fa-linkedin'></i></div></a>
                        </div>">
                    <div class="SpeakersImageContainer">
                          <div class="SpeakerOverlay">
                            <h3 class="SpeakerOverlayName">Mark Hurd</h3>
                            <h4 class="SpeakerOverlayTitle">Chief Executive Officer</h4>
                            <h4 class="SpeakerOverlayCompany">Oracle Corporation</h4>
                         </div>
                   <img alt="Mark Hurd" src="img/mainpage/speakers/SpeakerPhotos/mark_hurd.jpg">
                   </div>
            </li>
            <!-- END Mark Hurd -->
            
        	<!-- Euan Semple -->
            <li class="Speaker SliphoverContainer" id="SpeakerSempleE" data-sliphover-caption="
                   		<h3 class='SpeakerName'>Euan Semple</h3>
                        <p class='SpeakerJobtitle'>Author & World of Work Evangelist</p>
                        <p class='SpeakerCompany'>Euansemple.com</p>
                        <p class='SpeakerInfo'>Euan Semple is a social media evangelist and is one of the few people in the world who can turn the complex world of social networking into something we can all understand. And, at the same time, learn how to get the most from it. This world is changing fast, but he makes sense of it because he understands that the core basics remain the same: community, learning, interaction. </p>
                        <div class='SpeakerSocialIconContainer'>
                        	<a title='Twitter' target='_blank' href='https://twitter.com/euan'><div class='SpeakerSocialIcon SpeakerTwitterIcon'><i class='fa fa-twitter'></i></div></a>
                            <a title='LinkedIn' target='_blank' href='http://uk.linkedin.com/in/euansemple'><div class='SpeakerSocialIcon SpeakerLinkedInIcon'><i class='fa fa-linkedin'></i></div></a>
                        </div>">
                    <div class="SpeakersImageContainer">
                          <div class="SpeakerOverlay">
                            <h3 class="SpeakerOverlayName">Euan Semple</h3>
                            <h4 class="SpeakerOverlayTitle">Author & World of Work Evangelist</h4>
                            <h4 class="SpeakerOverlayCompany">Euansemple.com</h4>
                         </div>
                   <img alt="Euan Semple" src="img/mainpage/speakers/SpeakerPhotos/euan_semple.jpg">
                   </div>
            </li>
            <!-- END Euan Semple -->      
            
        	<!-- Katherine Jones -->
            <li class="Speaker SliphoverContainer" id="SpeakerJonesK" data-sliphover-caption="
                   		<h3 class='SpeakerName'>Katherine Jones</h3>
                        <p class='SpeakerJobtitle'>Vice President</p>
                        <p class='SpeakerCompany'>Bersin by Deloitte</p>
                        <p class='SpeakerInfo'>Katherine Jones, Ph.D., covers the underlying HCM technologies and services that support the management of a global workforce. Prior to joining Bersin by Deloitte, she was director of marketing for NetSuite, Inc.</p>
                        <div class='SpeakerSocialIconContainer'>
                        	<a title='Twitter' target='_blank' href='https://twitter.com/Katherine_Jones'><div class='SpeakerSocialIcon SpeakerTwitterIcon'><i class='fa fa-twitter'></i></div></a>
                            <a title='LinkedIn' target='_blank' href='https://www.linkedin.com/profile/view?id=23733&authType=NAME_SEARCH&authToken=x8lY&locale=en_US&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2Cidx%3A1-1-1%2CtarId%3A1432124193811%2Ctas%3AKatherine%20Jones'><div class='SpeakerSocialIcon SpeakerLinkedInIcon'><i class='fa fa-linkedin'></i></div></a>
                        </div>">
                    <div class="SpeakersImageContainer">
                          <div class="SpeakerOverlay">
                            <h3 class="SpeakerOverlayName">Katherine Jones</h3>
                            <h4 class="SpeakerOverlayTitle">Vice President</h4>
                            <h4 class="SpeakerOverlayCompany">Bersin by Deloitte</h4>
                         </div>
                   <img alt="Katherine Jones" src="img/mainpage/speakers/SpeakerPhotos/katherine_jones.jpg">
                   </div>
            </li>
            <!-- END Katherine Jones -->                   

        	<!-- Maitha Al Murar -->
            <li class="Speaker SliphoverContainer" id="SpeakerMurarM" data-sliphover-caption="
                   		<h3 class='SpeakerName'>Maitha Al Murar</h3>
                        <p class='SpeakerJobtitle'>Vice President HR</p>
                        <p class='SpeakerCompany'>Abu Dhabi Ports</p>
                        <p class='SpeakerInfo'>Maitha al Murar is the Acting vice President of Human Resources at Abu Dhabi Ports (ADP), one of the world’s largest and most integrated ports and industrial zone. Maitha is responsible for overseeing all Human Resources functions as well as having oversight of the ADP HR strategy to support the business plan and growth of the organization. </p>
                        <div class='SpeakerSocialIconContainer'>
                        	<a title='Twitter' target='_blank' href='https://twitter.com/Maitha77'><div class='SpeakerSocialIcon SpeakerTwitterIcon'><i class='fa fa-twitter'></i></div></a>
                            <a title='LinkedIn' target='_blank' href='https://www.linkedin.com/pub/maitha-al-marar/63/24/51a'><div class='SpeakerSocialIcon SpeakerLinkedInIcon'><i class='fa fa-linkedin'></i></div></a>
                        </div>">
                    <div class="SpeakersImageContainer">
                          <div class="SpeakerOverlay">
                            <h3 class="SpeakerOverlayName">Maitha Al Murar</h3>
                            <h4 class="SpeakerOverlayTitle">Vice President HR</h4>
                            <h4 class="SpeakerOverlayCompany">Abu Dhabi Ports</h4>
                         </div>
                   <img alt="Maitha Al Murar" src="img/mainpage/speakers/SpeakerPhotos/maitha_al_murar.jpg">
                   </div>
            </li>
            <!-- END Maitha Al Murar --> 
 
         	<!-- Frédéric Mazzella -->
            <li class="Speaker SliphoverContainer" id="SpeakerMazzellaF" data-sliphover-caption="
                   		<h3 class='SpeakerName'>Frédéric Mazzella</h3>
                        <p class='SpeakerJobtitle'>Founder & CEO</p>
                        <p class='SpeakerCompany'>BlaBlaCar</p>
                        <p class='SpeakerInfo'>Frédéric Mazzella is the Founder and CEO of BlaBlaCar, the leading European ridesharing community that connects drivers with empty seats and people traveling the same way.  Today, with more than 20 million members worldwide and several millions people transported per month, BlaBlaCar is making road travel social, money-saving and more sustainable.</p>
                        <div class='SpeakerSocialIconContainer'>
                        	<a title='Twitter' target='_blank' href='https://twitter.com/mazaic'><div class='SpeakerSocialIcon SpeakerTwitterIcon'><i class='fa fa-twitter'></i></div></a>
                            <a title='Facebook' target='_blank' href='https://fr-fr.facebook.com/blablacar.fr'><div class='SpeakerSocialIcon SpeakerFacebookIcon'><i class='fa fa-facebook'></i></div></a>
                        </div>">
                    <div class="SpeakersImageContainer">
                          <div class="SpeakerOverlay">
                            <h3 class="SpeakerOverlayName">Frédéric Mazzella</h3>
                            <h4 class="SpeakerOverlayTitle">Founder & CEO</h4>
                            <h4 class="SpeakerOverlayCompany">BlaBlaCar</h4>
                         </div>
                   <img alt="Frédéric Mazzella" src="img/mainpage/speakers/SpeakerPhotos/frederic_mazzella.jpg">
                   </div>
            </li>
            <!-- END Frédéric Mazzella -->            

         	<!-- Steve Tappin -->
            <li class="Speaker SliphoverContainer" id="SpeakerTappinS" data-sliphover-caption="
                   		<h3 class='SpeakerName'>Steve Tappin</h3>
                        <p class='SpeakerJobtitle'>Host - CEO Guru & CEO - Xinfu</p>
                        <p class='SpeakerCompany'>Xinfu</p>
                        <p class='SpeakerInfo'>Steve is the host of the television series “CEO Guru”, regularly broadcast internationally on BBC World News. CEOs featured include Jeff Immelt of General Electric, Denise Campbell of Campbell Soup, John Mackey and Walter Robb of Whole Foods, Liu Chuanzhi of Lenovo, Wang Shi of Vanke, Guo Guangchang of Fosun and many others.</p>
                        <div class='SpeakerSocialIconContainer'>
                        	<a title='Twitter' target='_blank' href='https://twitter.com/SteveTappin'><div class='SpeakerSocialIcon SpeakerTwitterIcon'><i class='fa fa-twitter'></i></div></a>
                            <a title='LinkedIn' target='_blank' href='https://www.linkedin.com/in/stevetappin'><div class='SpeakerSocialIcon SpeakerLinkedInIcon'><i class='fa fa-linkedin'></i></div></a>
                        </div>">
                    <div class="SpeakersImageContainer">
                          <div class="SpeakerOverlay">
                            <h3 class="SpeakerOverlayName">Steve Tappin</h3>
                            <h4 class="SpeakerOverlayTitle">Host - CEO Guru & CEO - Xinfu</h4>
                            <h4 class="SpeakerOverlayCompany">Xinfu</h4>
                         </div>
                   <img alt="Steve Tappin" src="img/mainpage/speakers/SpeakerPhotos/steve_tappin.jpg">
                   </div>
            </li>
            <!-- END Steve Tappin -->            
        </ul>      
    </div>
    <!-- Speakers Container -->
    <button class="HRNButton BlackButton" data-reveal-id="JoinOurCommunityModal" >Join Our Community</button>

</section>
<!-- END Speakers -->

<!-- Sponsors -->
<a id="OurClients"></a>
<section id="Sponsors">
	<h2 class="Headline">Our Clients</h2>
	<div id="SponsorsInnerContainer">
    	<!-- Sponsors Grid -->
    	<div id="SponsorsGrid"> 
 			<!-- Workday -->
            <a href="#workday" title="Workday" class="SponsorGridAnchor" data-sponsornametag="workday"><div class="Sponsor" id="workdaySponsor" data-sponsornum="1">
                <div id="workdaySponsorBox" class="SponsorLogoContainer">
			 	    <img data-img="workday.png" class="SponsorLogo" src="img/mainpage/sponsors/logos/workday.png" alt="Workday">
				</div>
               
            </div>
            </a>
            <!-- END Workday -->  <!-- Oracle -->
            <a href="#oracle" title="Oracle" class="SponsorGridAnchor" data-sponsornametag="oracle"><div class="Sponsor" id="oracleSponsor" data-sponsornum="2">
                <div id="oracleSponsorBox" class="SponsorLogoContainer">
			 	    <img data-img="oracle.png" class="SponsorLogo" src="img/mainpage/sponsors/logos/oracle.png" alt="Oracle">
				</div>
               
            </div>
            </a>
            <!-- END Oracle -->  <!-- Successfactors -->
            <a href="#successfactors" title="Successfactors" class="SponsorGridAnchor" data-sponsornametag="successfactors"><div class="Sponsor" id="successfactorsSponsor" data-sponsornum="3">
                <div id="successfactorsSponsorBox" class="SponsorLogoContainer">
			 	    <img data-img="successfactors.png" class="SponsorLogo" src="img/mainpage/sponsors/logos/successfactors.png" alt="Successfactors">
				</div>
               
            </div>
            </a>
            <!-- END Successfactors -->  <!-- Cornerstone -->
            <a href="#cornerstone" title="Cornerstone on Demand" class="SponsorGridAnchor" data-sponsornametag="cornerstone"><div class="Sponsor" id="cornerstoneSponsor" data-sponsornum="4">
                <div id="cornerstoneSponsorBox" class="SponsorLogoContainer">
			 	    <img data-img="cornerstone.png" class="SponsorLogo" src="img/mainpage/sponsors/logos/cornerstone.png" alt="Cornerstone">
				</div>
               
            </div>
            </a>
            <!-- END Cornerstone -->  <!-- Infor -->
            <a href="#infor" title="Infor" class="SponsorGridAnchor" data-sponsornametag="infor"><div class="Sponsor" id="inforSponsor" data-sponsornum="5">
                <div id="inforSponsorBox" class="SponsorLogoContainer">
			 	    <img data-img="infor.png" class="SponsorLogo" src="img/mainpage/sponsors/logos/infor.png" alt="Infor">
				</div>
               
            </div>
            </a>
            <!-- END Infor -->  <!-- Shell -->
            <a href="#shell" title="Shell" class="SponsorGridAnchor" data-sponsornametag="shell"><div class="Sponsor" id="shellSponsor" data-sponsornum="6">
                <div id="shellSponsorBox" class="SponsorLogoContainer">
			 	    <img data-img="shell.png" class="SponsorLogo" src="img/mainpage/sponsors/logos/shell.png" alt="Shell">
				</div>
               
            </div>
            </a>
            <!-- END Shell -->  <!-- Rolls Royce -->
            <a href="#rollsroyce" title="Rolls Royce" class="SponsorGridAnchor" data-sponsornametag="rollsroyce"><div class="Sponsor" id="rollsroyceSponsor" data-sponsornum="7">
                <div id="rollsroyceSponsorBox" class="SponsorLogoContainer">
			 	    <img data-img="rolls_royce.png" class="SponsorLogo" src="img/mainpage/sponsors/logos/rolls_royce.png" alt="Rolls Royce">
				</div>
               
            </div>
            </a>
            <!-- END Rolls Royce -->  <!-- Philips -->
            <a href="#philips" title="Philips" class="SponsorGridAnchor" data-sponsornametag="philips"><div class="Sponsor" id="philipsSponsor" data-sponsornum="8">
                <div id="philipsSponsorBox" class="SponsorLogoContainer">
			 	    <img data-img="philips.png" class="SponsorLogo" src="img/mainpage/sponsors/logos/philips.png" alt="Philips">
				</div>
               
            </div>
            </a>
            <!-- END Philips -->  <!-- Siemens -->
            <a href="#siemens" title="Siemens" class="SponsorGridAnchor" data-sponsornametag="siemens"><div class="Sponsor" id="siemensSponsor" data-sponsornum="9">
                <div id="siemensSponsorBox" class="SponsorLogoContainer">
			 	    <img data-img="siemens.png" class="SponsorLogo" src="img/mainpage/sponsors/logos/siemens.png" alt="Siemens">
				</div>
               
            </div>
            </a>
            <!-- END Siemens -->  <!-- Google -->
            <a href="#google" title="Google" class="SponsorGridAnchor" data-sponsornametag="google"><div class="Sponsor" id="googleSponsor" data-sponsornum="10">
                <div id="googleSponsorBox" class="SponsorLogoContainer">
			 	    <img data-img="google.png" class="SponsorLogo" src="img/mainpage/sponsors/logos/google.png" alt="Google">
				</div>
               
            </div>
            </a>
            <!-- END Google -->  <!-- NGA Human Resources -->
            <a href="#ngahumanresources" title="NGA Human Resources" class="SponsorGridAnchor" data-sponsornametag="ngahumanresources"><div class="Sponsor" id="ngahumanresourcesSponsor" data-sponsornum="11">
                <div id="ngahumanresourcesSponsorBox" class="SponsorLogoContainer">
			 	    <img data-img="nga_human_resources.png" class="SponsorLogo" src="img/mainpage/sponsors/logos/nga.png" alt="NGA Human Resources">
				</div>
               
            </div>
            </a>
            <!-- END NGA Human Resources -->  <!-- ADP -->
            <a href="#adp" title="ADP" class="SponsorGridAnchor" data-sponsornametag="adp"><div class="Sponsor" id="adpSponsor" data-sponsornum="12">
                <div id="adpSponsorBox" class="SponsorLogoContainer">
			 	    <img data-img="adp.png" class="SponsorLogo" src="img/mainpage/sponsors/logos/adp.png" alt="ADP">
				</div>
               
            </div>
            </a>
            <!-- END ADP -->  <!-- CEB -->
            <a href="#ceb" title="CEB" class="SponsorGridAnchor" data-sponsornametag="ceb"><div class="Sponsor" id="cebSponsor" data-sponsornum="13">
                <div id="cebSponsorBox" class="SponsorLogoContainer">
			 	    <img data-img="ceb.png" class="SponsorLogo" src="img/mainpage/sponsors/logos/ceb.png" alt="CEB">
				</div>
               
            </div>
            </a>
            <!-- END CEB -->  <!-- IBM -->
            <a href="#ibm" title="IBM" class="SponsorGridAnchor" data-sponsornametag="ibm"><div class="Sponsor" id="ibmSponsor" data-sponsornum="14">
                <div id="ibmSponsorBox" class="SponsorLogoContainer">
			 	    <img data-img="ibm.png" class="SponsorLogo" src="img/mainpage/sponsors/logos/ibm.png" alt="IBM">
				</div>
               
            </div>
            </a>
            <!-- END IBM -->  <!-- Careerbuilder -->
            <a href="#careerbuilder" title="Careerbuilder" class="SponsorGridAnchor" data-sponsornametag="careerbuilder"><div class="Sponsor" id="careerbuilderSponsor" data-sponsornum="15">
                <div id="careerbuilderSponsorBox" class="SponsorLogoContainer">
			 	    <img data-img="careerbuilder.png" class="SponsorLogo" src="img/mainpage/sponsors/logos/careerbuilder.png" alt="Careerbuilder">
				</div>
               
            </div>
            </a>
            <!-- END Careerbuilder -->  <!-- Astra Zeneca -->
            <a href="#astrazeneca" title="Astra Zeneca" class="SponsorGridAnchor" data-sponsornametag="astrazeneca"><div class="Sponsor" id="astrazenecaSponsor" data-sponsornum="16">
                <div id="astrazenecaSponsorBox" class="SponsorLogoContainer">
			 	    <img data-img="astra_zeneca.png" class="SponsorLogo" src="img/mainpage/sponsors/logos/astra_zeneca.png" alt="Astra Zeneca">
				</div>
               
            </div>
            </a>
            <!-- END Astra Zeneca -->  <!-- Societe Generale -->
            <a href="#societegenerale" title="Societe Generale" class="SponsorGridAnchor" data-sponsornametag="societegenerale"><div class="Sponsor" id="societegeneraleSponsor" data-sponsornum="17">
                <div id="societegeneraleSponsorBox" class="SponsorLogoContainer">
			 	    <img data-img="societe_generale.png" class="SponsorLogo" src="img/mainpage/sponsors/logos/societe_generale.png" alt="Societe Generale">
				</div>
               
            </div>
            </a>
            <!-- END Societe Generale -->  <!-- L'Oréal -->
            <a href="#loreal" title="L'oreal" class="SponsorGridAnchor" data-sponsornametag="loreal"><div class="Sponsor" id="lorealSponsor" data-sponsornum="18">
                <div id="lorealSponsorBox" class="SponsorLogoContainer">
			 	    <img data-img="l_oreal.png" class="SponsorLogo" src="img/mainpage/sponsors/logos/loreal.png" alt="L'Oréal">
				</div>
               
            </div>
            </a>
            <!-- END L'Oréal -->  <!-- Virgin Group -->
            <a href="#virgingroup" title="virgin Group" class="SponsorGridAnchor" data-sponsornametag="virgingroup"><div class="Sponsor" id="virgingroupSponsor" data-sponsornum="19">
                <div id="virgingroupSponsorBox" class="SponsorLogoContainer">
			 	    <img data-img="virgin_group.png" class="SponsorLogo" src="img/mainpage/sponsors/logos/virgin_group.png" alt="Virgin Group">
				</div>
               
            </div>
            </a>
            <!-- END Virgin Group -->  <!-- Facebook -->
            <a href="#facebook" title="Facebook" class="SponsorGridAnchor" data-sponsornametag="facebook"><div class="Sponsor" id="facebookSponsor" data-sponsornum="20">
                <div id="facebookSponsorBox" class="SponsorLogoContainer">
			 	    <img data-img="facebook.png" class="SponsorLogo" src="img/mainpage/sponsors/logos/facebook.png" alt="Facebook">
				</div>
               
            </div>
            </a>
            <!-- END Facebook -->  <!-- CrossKnowledge -->
            <a href="#crossknowledge" title="Crossknowledge" class="SponsorGridAnchor" data-sponsornametag="crossknowledge"><div class="Sponsor" id="crossknowledgeSponsor" data-sponsornum="21">
                <div id="crossknowledgeSponsorBox" class="SponsorLogoContainer">
			 	    <img data-img="crossknowledge.png" class="SponsorLogo" src="img/mainpage/sponsors/logos/crossknowledge.png" alt="CrossKnowledge">
				</div>
               
            </div>
            </a>
            <!-- END CrossKnowledge -->  <!-- Indeed -->
            <a href="#indeed" title="Indeed" class="SponsorGridAnchor" data-sponsornametag="indeed"><div class="Sponsor" id="indeedSponsor" data-sponsornum="22">
                <div id="indeedSponsorBox" class="SponsorLogoContainer">
			 	    <img data-img="indeed.png" class="SponsorLogo" src="img/mainpage/sponsors/logos/indeed.png" alt="Indeed">
				</div>
               
            </div>
            </a>
            <!-- END Indeed -->  <!-- Applearn -->
            <a href="#applearn" title="Applearn" class="SponsorGridAnchor" data-sponsornametag="applearn"><div class="Sponsor" id="applearnSponsor" data-sponsornum="23">
                <div id="applearnSponsorBox" class="SponsorLogoContainer">
			 	    <img data-img="applearn.png" class="SponsorLogo" src="img/mainpage/sponsors/logos/applearn.png" alt="Applearn">
				</div>
               
            </div>
            </a>
            <!-- END Applearn -->  <!-- Haufe -->
            <a href="#haufe" title="Haufe" class="SponsorGridAnchor" data-sponsornametag="haufe"><div class="Sponsor" id="haufeSponsor" data-sponsornum="24">
                <div id="haufeSponsorBox" class="SponsorLogoContainer">
			 	    <img data-img="haufe.png" class="SponsorLogo" src="img/mainpage/sponsors/logos/haufe.png" alt="Haufe">
				</div>
               
            </div>
            </a>
            <!-- END Haufe -->  <!-- Globoforce -->
            <a href="#globoforce" title="Globoforce" class="SponsorGridAnchor" data-sponsornametag="globoforce"><div class="Sponsor" id="globoforceSponsor" data-sponsornum="25">
                <div id="globoforceSponsorBox" class="SponsorLogoContainer">
			 	    <img data-img="globoforce.png" class="SponsorLogo" src="img/mainpage/sponsors/logos/globoforce.png" alt="Globoforce">
				</div>
               
            </div>
            </a>
            <!-- END Globoforce -->         
        </div>
        <!-- END Sponsors Grid -->
        <button class="HRNButton WhiteButton" data-reveal-id="BecomeASponsorModal" >Become a Sponsor</button>            
    </div>

</section>
<!-- END Sponsors -->

<!-- Careers -->
<section id="Careers">
	<img id="CareersLogo" src="img/mainpage/careers/careers-logo.svg" alt="Careers Logo">
	<h2 class="Headline">Careers</h2>
    <p>If you value a workplace that promotes an entrepreneurial environment & accountability, exemplifies loyalty, offers the chaos that is growth, never compromises integrity and has a strong social conscience then start your career with us by applying now.</p>
    <button class="HRNButton BlackButton" onClick="window.open('careers', '_parent');">Join Us!</button>
    <!-- Maps -->
    <div id="Maps"></div>
    <!-- END Maps -->
</section>
<!-- END Careers -->

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

<!-- MODALS -->
<!-- Join Our Community Modal -->
<div id="JoinOurCommunityModal" class="reveal-modal" data-reveal> <a class="close-reveal-modal">&#215;</a>
  <h2>Join Our Community</h2>
  <p>Join our HR community and be the first to recieve special reports, targeted surveys, access to HR Tech World Congress and influencers in the world of HR and IT.</p>
  <!-- BEGINING of : JOIN OUR COMMUNITY MODAL FORM -->
  <form id="BecomeAMemberForm" action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">
    <input type=hidden name="oid" value="00DD0000000nwgk">
    <input type=hidden name="retURL" value="http://dev.hrn.io/#ThankYouForEnquiryModal">
    <div class="InputFieldsContainer">
        <input required placeholder="First Name *"  id="first_name" maxlength="40" name="first_name" size="20" type="text" />
        <input required placeholder="Last Name *" id="last_name" maxlength="80" name="last_name" size="20" type="text" />
    </div>
    <div class="InputFieldsContainer">
        <input required placeholder="Email Address *" id="email" maxlength="80" name="email" size="20" type="text" />
        <input required placeholder="Phone Number *" id="phone" maxlength="40" name="phone" size="20" type="text" />
    </div>
    <div class="InputFieldsContainer">
        <input required placeholder="Company *" id="company" maxlength="40" name="company" size="20" type="text" />
        <input required placeholder="Job Title *" id="title" maxlength="40" name="title" size="20" type="text" />
    </div>
    <input id="addinfo" class="addinfoclass" name="addinfo" type="text" />
    <select  style="display:none;"   id="lead_source" name="lead_source">
      <option selected="selected" value="HRN-JoinOurCommunity">HRN-JoinOurCommunity</option>
    </select>
    <input onClick="_gaq.push(['_trackEvent', 'BecomeAMemberForm', 'FromSubmission', 'InquirySent']);" class="submitbutton" type="submit" name="submit" value="SEND">
  </form>
  <!-- END of : JOIN OUR COMMUNITY MODAL FORM --> 
</div>
<!-- END Join Our Community Modal --> 
<!-- Become a Sponsor Modal -->
<div id="BecomeASponsorModal" class="reveal-modal" data-reveal> <a class="close-reveal-modal">&#215;</a>
  <h2>Apply for Sponsorship</h2>
  <p>Gain direct access to more than 4,000 enterprise HR decision makers.</p>
  <!-- BEGINING of : BECOME A SPONSOR MODAL FORM -->
  <form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">
    <input type=hidden name="oid" value="00DD0000000nwgk">
    <input type=hidden name="retURL" value="http://dev.hrn.io/#ThankYouForEnquiryModal">
    <div class="InputFieldsContainer">
        <input required placeholder="First Name *"  id="first_name" maxlength="40" name="first_name" size="20" type="text" />
        <input required placeholder="Last Name *" id="last_name" maxlength="80" name="last_name" size="20" type="text" />
    </div>
    <div class="InputFieldsContainer">
        <input required placeholder="Email Address *" id="email" maxlength="80" name="email" size="20" type="text" />
        <input required placeholder="Phone Number *" id="phone" maxlength="40" name="phone" size="20" type="text" />
    </div>
    <div class="InputFieldsContainer">
        <input required placeholder="Company *" id="company" maxlength="40" name="company" size="20" type="text" />
        <input required placeholder="Job Title *" id="title" maxlength="40" name="title" size="20" type="text" />
    </div>
    <select  style="display:none;"   id="lead_source" name="lead_source">
      <option selected="selected" value="HRN-BecomeASponsor">HRN-BecomeASponsor</option>
    </select>
    <input onClick="_gaq.push(['_trackEvent', 'BecomeASponsorForm', 'FromSubmission', 'InquirySent']);" class="submitbutton" type="submit" name="submit" value="SEND">
  </form>
  <!-- END of : BECOME A SPONSOR MODAL FORM --> 
</div>
<!-- END Become a Sponsor Modal --> 
<!-- Thank You For Enquiry Modal -->
<div id="ThankYouForEnquiryModal" class="reveal-modal" data-reveal> <a class="close-reveal-modal">&#215;</a>
  <h2>Thank you for your enquiry – <br>we will be in touch within 24 hours.</h2>
    <p style="text-align: left;">
    In the meantime, you can find out more about our range of services and events by visiting the following links:<br>
    <a href="http://hrn.io" target="_blank" title="HRN - Our Corporate Website">HRN</a> – Our Corporate Website<br>
    <a href="http://london.hrtechcongress.com" title="HR Tech World 2016 – Spring">HR Tech World 2016</a> – Spring (ExCel London 15-16 March)<br>
    <br>
    Looking for help or answers to a question? Please visit our <a href="http://blog.hrtecheurope.com" target="_blank" title="HR Tech Blog">Blog</a> which is a constant flow of tips and advice from our community and research. Our <a href="https://www.facebook.com/worldhrtech" title="Facebook" target="_blank">Facebook</a> Pages, <a href="https://www.linkedin.com/grp/home?gid=1909337" target="_blank" title="LinkedIn">LinkedIn</a> Groups, <a href="https://www.youtube.com/channel/UCsvarE4VPZa-Z469IYzWWYw" target="_blank" title="Youtube">Youtube</a> and <a href="https://twitter.com/hrtechworld" target="_blank" title="Youtube">Twitter</a> Channels connect you timely information and Who’s Who in HR across the globe.<br>
    <br>
    See you in Paris!</p>
</div>
<!-- END Thank You For Enquiry Modal -->

<!-- END MODALS -->

<!-- Menu JS -->
<script type="text/javascript" src="js/menu.js"></script>

<!-- Menu balck/white transitions -->
<script src="js/menu/mainpage_menu.js"></script>

<!-- Include Sliphover (Speakers Section) --> 
<script src="vendor/sliphover/jquery.sliphover.js"></script> 
<script type="text/javascript">
	$(function(){
		$('#SpeakersContainer').sliphover({});
	})
</script> 
<!-- END Include Sliphover (Speakers Section) --> 

<!-- Named anchor Hashtag scroll script --> 
<script type="text/javascript">
$('a[href*=#]:not([href=#])').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 1000);
});
</script> 

<script type="text/javascript" src="js/glitch.js"></script>
<script type="text/javascript" src="js/maps.js"></script>
<script>
(function() {
	GlitchIntervall = setInterval(function(){ 
	   var id = Math.floor((Math.random() * 5) + 1);

	  glitch_handler (id, 0, 0);
	}, 5000);
	

})();
</script>  

<script>
(function() {
//HOVER EVENTS
$('body').on('mouseenter', '#HeaderLogoContainer, #UnleashYourPeopleGlitchContainer, #FooterLogoContainer, #ParisTextGlitch, #LondonTextGlitch ', function(event) {
	   var id = $(this).data('elemid');
	   glitch_handler (id, 0, 1);
	   
	   var ElemId = $(this).attr('id');
	   Glitch.activeId = ElemId;
	   clearInterval(GlitchIntervall);
	});	


$('body').on('mouseleave', '#HeaderLogoContainer, #UnleashYourPeopleGlitchContainer, #FooterLogoContainer, #ParisTextGlitch, #LondonTextGlitch ', function(event) {

       $('#'+Glitch.activeId).removeClass(Glitch.activeClass);
	    Glitch.activeId = '';
		
	//SET INTERVAL	
	GlitchIntervall = setInterval(function(){ 
	   var id = Math.floor((Math.random() * 5) + 1);

	  glitch_handler (id, 0, 0);
	}, 5000);
	//---------------
			
	});	

})();

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
