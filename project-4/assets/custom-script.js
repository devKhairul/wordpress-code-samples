// Google Maps for Locations


jQuery(function() {
	
	//BEGIN
	jQuery(".accordion__title").on("click", function(e) {

		e.preventDefault();
		var $this = jQuery(this);

		if (!$this.hasClass("accordion-active")) {
			jQuery(".accordion__content").slideUp(400);
			jQuery(".accordion__title").removeClass("accordion-active");
			jQuery('.accordion__arrow').removeClass('accordion__rotate');
		}

		$this.toggleClass("accordion-active");
		$this.next().slideToggle();
		jQuery('.accordion__arrow',this).toggleClass('accordion__rotate');
	});
	//END
	
});