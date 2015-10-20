(function() {

    var toggles = document.querySelectorAll(".c-hamburger");

    for (var i = toggles.length - 1; i >= 0; i--) {
      var toggle = toggles[i];
      toggleHandler(toggle);
    };

  })();




  function toggleHandler(toggle) {
      toggle.addEventListener( "click", function(e) {
        e.preventDefault();
		if (this.classList.contains("is-active") === true) {
			this.classList.remove("is-active");
/*
  			setTimeout(function(){ 
			if ( $('#BurgerMenu').css('background-color') == '#000' || $('#BurgerMenu').css('background-color') == 'rgb(0, 0, 0)'){
				 $('#BurgerMenu').css({'height': '25px'});
				 setTimeout(function(){ 
				 $(".HRNLogo").attr('src','img/menu/hrn-logo-black.svg');
				  }, 900);
			} else {
			    $('#BurgerMenu').css({'height': '35px'});	
				 setTimeout(function(){ 
				 $(".HRNLogo").attr('src','img/menu/hrn-logo.svg');
				 }, 900);
			}
			
			 
		 }, 2);
		 
		 */
		 
		   
		 
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
		} else {
			this.classList.add("is-active");
			
			/* Desktop Menu */
              $('#BurgerMenu span').removeClass('BlackBurger').removeClass('WhiteBurger');
		 
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
			
			/* Mobile Menu */
			 $("#MobileMenu").addClass("MobileMenuActive");
			 $("#MobileMenuItemAbout").addClass("MobileMenuItemActive");
			 setTimeout(function(){ 
				$("#MobileMenuItemOurShows").addClass("MobileMenuItemActive");
			 }, 100);
			 setTimeout(function(){ 
				$("#MobileMenuItemWhoAttends").addClass("MobileMenuItemActive");
			 }, 200);
			 setTimeout(function(){ 
				$("#MobileMenuItemOurClients").addClass("MobileMenuItemActive");
			 }, 300);
			 setTimeout(function(){ 
				$("#MobileMenuItemCareers").addClass("MobileMenuItemActive");
			 }, 400);			
			 setTimeout(function(){ 
				$("#MobileMenuItemContact").addClass("MobileMenuItemActive");
			 }, 500);
			 /* END Mobile Menu */					
		}
      });
    }