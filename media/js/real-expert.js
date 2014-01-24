jQuery(document).ready(function($) {
    // $() will work as an alias for jQuery() inside of this function
	
	/*-----------------------------------------------------------------------------------*/
    /*	Flexslider
    /*-----------------------------------------------------------------------------------*/
	 $(window).load(function(){
		// Homepage Slider
		$('.flexslider').flexslider({
			animation: "fade",
			slideshow: true,
			slideshowSpeed: 5000,
			controlNav: false,
			directionNav: true,
			controlsContainer: '.flex-container',
			start: function(slider){
			  $('body').removeClass('loading');
			}
		});
		
		/*-----------------------------------------------------------------------------------*/
		/*	jCarousel
		/*-----------------------------------------------------------------------------------*/
		$(function() { // Recent Property
			$('.jcarousel').jcarousel({
				list:'.jcontainer',
				item:'.span3',
				animation:1000,
				wrap:'circular',
			});
			
			$('.jcarousel').jcarouselAutoscroll({
				target:'+=1',
				interval:5000,
			});
			
			$('.jcarousel-control-prev').jcarouselControl({
				target:'-=1',
			});
			$('.jcarousel-control-next').jcarouselControl({
				target:'+=1',
			});
		});
		
		$(function(){	// Partners Carousel
			$('.partners-logo-wrapper').jcarousel({
				list:'.partner-list',
				item:'.partner-item',
				animation:600,
			});
			
			$('.partner-prev').jcarouselControl({
				target:'-=1',
			});
			$('.partner-next').jcarouselControl({
				target:'+=1',
			});
		});
		
	})
	
	/*-----------------------------------------------------------------------------------*/
    /*	Select Box
    /*-----------------------------------------------------------------------------------*/
	if(jQuery().selectbox){
        $('.search-select').selectbox();
    }
	
	/*-----------------------------------------------------------------------------------*/
    /*	Max and Min Price Related JavaScript - to show red outline of min is bigger than max
    /*-----------------------------------------------------------------------------------*/
    $('#select-min-price,#select-max-price').change(function(obj, e){
        var min_text_val = $('#select-min-price').val();
        var min_int_val = (isNaN(min_text_val))?0:parseInt(min_text_val);

        var max_text_val = $('#select-max-price').val();
        var max_int_val = (isNaN(max_text_val))?0:parseInt(max_text_val);

        if( (min_int_val >= max_int_val) && (min_int_val != 0) && (max_int_val != 0)){
            $('#select-max-price_input,#select-min-price_input').css('outline','2px solid red');
        }else{
            $('#select-max-price_input,#select-min-price_input').css('outline','none');
        }
    });
	
	//map
	$(function() { $('.map').maphilight({
		stroke : false
	}); });

	/*----------------------------------------------------------------------*/
	/*	JQuery Placeholder	*/
	/*----------------------------------------------------------------------*/
	$('input, textarea').placeholder();
	
/*--------------------------------------------------------------------*/
/*	Ajax Form Submit	*/
/*--------------------------------------------------------------------*/
	$('#contact-agent-form').ajaxForm(function() { 
		alert("Thank you for your message, We'll get in touch soon!");
		$('#contactAgent').modal('hide');
	});
	$('#contact-page-form').ajaxForm(function() { 
		alert("Thank you for your comment!");
		
	});


}); // JQuery Wrapper, Don't Delete This Line !!!!