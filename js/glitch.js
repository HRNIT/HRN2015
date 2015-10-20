var Glitch = {};

function glitch_handler (id, page, mode) {
	
	var setActive = function(targetId, glitchClass) {
		$(targetId).addClass(glitchClass);
		
	if (mode == 0){	
		setTimeout(function(){ 
	    	$(targetId).removeClass(glitchClass);
		}, 3000);
	}
		
	};

//Get what page we are on
 switch(page){
   case 0: //INDEX PAGE
   
	switch(id){
	   case 1:
	    //Menu logo
		
		var element = "#HeaderLogoContainer";
		var glitchClass = "HeaderLogoGlitch";
		
	   break;	
	   case 2:
	    //Unleash your people header text
		
		var element = "#UnleashYourPeopleGlitchContainer";
		var glitchClass = "HeaderTextGlitch";
		
	   break;
	   		
	   case 3:
	    //footer
		
		var element = "#FooterLogoContainer";
		var glitchClass = "FooterGlitch";	
			
	   break;	

	   case 4:
	    //Paris Header Text
		
		var element = "#ParisTextGlitch";
		var glitchClass = "ParisHeaderGlitch";	
			
	   break;	
	   
	   case 5:
	    //London Header Text
		
		var element = "#LondonTextGlitch";
		var glitchClass = "LondonHeaderGlitch";	
			
	   break;		   		
	} //switch id ends :D
	
	break;
	
  case 1: //ABOUT PAGE
    switch(id){
	   case 1:
	    //Menu logo
		
		var element = "#HeaderLogoContainer";
		var glitchClass = "HeaderLogoGlitch";
		
	   break;	
	   		
	   case 2:
	    //footer
		
		var element = "#FooterLogoContainer";
		var glitchClass = "FooterGlitch";	
			
	   break;
	   	
	   case 3:
	    //footer
		
		var element = "#AboutUsGlitchContainer";
		var glitchClass = "AboutusGlitch";	
			
	   break;	   	   		
	} //switch id2 ends :D
    break;	
	
  case 2: //CAREERS PAGE
    switch(id){
	   case 1:
	    //Menu logo
		
		var element = "#HeaderLogoContainer";
		var glitchClass = "HeaderLogoGlitch";
		
	   break;	
	   		
	   case 2:
	    //footer
		
		var element = "#FooterLogoContainer";
		var glitchClass = "FooterGlitch";	
			
	   break;
	   	   	   		
	} //switch id3 ends :D
    break;	
	
 }//Switch Page end 
 		
	if (typeof Glitch.activeId == "undefined" || Glitch.activeId == '') {	
	    setActive(element, glitchClass);
		
	}
		Glitch.activeClass = glitchClass;
	
}


// MAINPAGE BIG BEN AND EIFFEL TOWER ANIMATIONS
(function() {
		$('body').on('mouseenter', '#BigBen', function(event) {

           $('.BigBenPart').each(function(index, element) {
			    var nextMargin = $(this).data('broken_margin');
			
				 $(this).css('margin',nextMargin);

           });
		
	});

		$('body').on('mouseleave', '#BigBen', function(event) {
			


			//Big Ben parts
           $('.BigBenPart').each(function(index, element) {
			    var nextMargin = $(this).data('fulldata');
			
				 $(this).css('margin',nextMargin);
			   

            });
		   
		   
	

			//Big Ben parts
           $('.BigBenClass').each(function(index, element) {
			   
				wholeWidth = $(this).data('correctdata');
			  $(this).css('width',wholeWidth);

		
           });
		   	
	

		
	});	

	
	
})();



(function() {
		$('body').on('mouseenter', '#EiffelTower', function(event) {

             

           $('.EiffelPart').each(function(index, element) {
			   	 var nextMargin = $(this).data('broken_margin');
			
				 $(this).css('margin',nextMargin);

           });
		
	});

		$('body').on('mouseleave', '#EiffelTower', function(event) {
			


			//Big Ben parts
           $('.EiffelPart').each(function(index, element) {
			    var nextMargin = $(this).data('fulldata');
			
				 $(this).css('margin',nextMargin);

             });
		   
		   

			//Big Ben parts
           $('.EiffelClass').each(function(index, element) {
			   	 wholeWidth = $(this).data('correctdata');
			     $(this).css('width',wholeWidth);

           });
		   	
		   
		
	});	

	
	
})();