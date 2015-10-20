 $(document).ready(function () {
	 
	// $('#BurgerMenu').addClass('is-active');
             $(".HRNLogo").attr('src','img/menu/hrn-logo.svg');
			
			$("#DesktopMenu").addClass("DesktopMenuActive");
			$("#MenuItemAbout").addClass("DesktopMenuItemActive");
			setTimeout(function(){ 
				$("#MenuItemOurShows").addClass("DesktopMenuItemActive");
			 }, 100);
			setTimeout(function(){ 
				$("#MenuItemWhoAttends").addClass("DesktopMenuItemActive");
			}, 200);
			setTimeout(function(){ 
				$("#MenuItemOurClients").addClass("DesktopMenuItemActive");
			}, 300);
			setTimeout(function(){ 
				$("#MenuItemCareers").addClass("DesktopMenuItemActive");
			}, 400);			
			setTimeout(function(){ 
				$("#MenuItemContact").addClass("DesktopMenuItemActive");
			}, 500);
			/* END Desktop Menu */	
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