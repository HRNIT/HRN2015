 $(document).ready(function () {

   $( window ).scroll(function() {
    if ($("#BurgerMenu").hasClass('is-active') == false){
   
        if ($(window).scrollTop() <= ($("header").offset().top + $('header').height()+400)) {

               $(".HRNLogo").attr('src','img/menu/hrn-logo.svg');
			   $('#BurgerMenu span').removeClass('BlackBurger').addClass('WhiteBurger');

        } 
        
        if ($(window).scrollTop() >= ($("#AboutUs").offset().top)) {

               $(".HRNLogo").attr('src','img/menu/hrn-logo-black.svg');
			   $('#BurgerMenu span').removeClass('WhiteBurger').addClass('BlackBurger');

        }
	
		
	 if ($(window).width() < 1660) {
        if ($(window).scrollTop() >= ($("#HRNGrid").offset().top) - 30) {
            $(".HRNLogo").attr('src','img/menu/hrn-logo.svg');
			$('#BurgerMenu span').removeClass('BlackBurger').addClass('WhiteBurger');
        }		
		
		
        if ($(window).scrollTop() >= ($("#HRNGrid").offset().top + $('#HRNGrid').height() -30)) {

               $(".HRNLogo").attr('src','img/menu/hrn-logo-black.svg');
               $('#BurgerMenu span').removeClass('WhiteBurger').addClass('BlackBurger');
        }
		
	 }
		
		   if ($(window).scrollTop() >= ($("footer").offset().top) - 30) {
            $(".HRNLogo").attr('src','img/menu/hrn-logo.svg');
			$('#BurgerMenu span').removeClass('BlackBurger').addClass('WhiteBurger');
        }		
				
	}
      
    }).scroll();
});

$(document).ready(function() {	
  
 $('body').on('click', '.MobileMenuItemActive ', function(event) {
/* Desktop Menu */
             

			setTimeout(function(){ 
				$("#MenuItemContact").removeClass("DesktopMenuItemActive");
			 }, 100);
			setTimeout(function(){ 
				$("#MenuItemCareers").removeClass("DesktopMenuItemActive");
			}, 200);
			setTimeout(function(){ 
				$("#MenuItemOurClients").removeClass("DesktopMenuItemActive");
			}, 300);
			setTimeout(function(){ 
				$("#MenuItemWhoAttends").removeClass("DesktopMenuItemActive");
			}, 400);
			setTimeout(function(){ 
				$("#MenuItemOurShows").removeClass("DesktopMenuItemActive");
			 }, 500);	
			setTimeout(function(){ 
				$("#MenuItemAbout").removeClass("DesktopMenuItemActive");
			 }, 600);			 					
			setTimeout(function(){ 
				$("#DesktopMenu").removeClass("DesktopMenuActive");
			 }, 700);
			 /* END Desktop Menu */
			 
			 /* Mobile Menu */
 			 setTimeout(function(){ 
				$("#MobileMenuItemContact").removeClass("MobileMenuItemActive");
			 }, 100);
			 setTimeout(function(){ 
				$("#MobileMenuItemCareers").removeClass("MobileMenuItemActive");
			 }, 200);
			 setTimeout(function(){ 
				$("#MobileMenuItemOurClients").removeClass("MobileMenuItemActive");
			 }, 300);
			 setTimeout(function(){ 
				$("#MobileMenuItemWhoAttends").removeClass("MobileMenuItemActive");
			 }, 400);
			 setTimeout(function(){ 
				$("#MobileMenuItemOurShows").removeClass("MobileMenuItemActive");
			 }, 500);	
			 setTimeout(function(){ 
				$("#MobileMenuItemAbout").removeClass("MobileMenuItemActive");
			 }, 600);					
			 setTimeout(function(){ 
				$("#MobileMenu").removeClass("MobileMenuActive");
			 }, 700);
			 
			 /* END Mobile Menu */
			 setTimeout(function(){ 
				$("#BurgerMenu").removeClass("is-active");
			 }, 700);
			 
			 
   });
   
   
   	  
});
