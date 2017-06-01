/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {


    
    	wp.customize.bind( 'ready', function() {

		function hideShowSliderChoiceControls() {
			/* Hide and show controls for Slider type choice and custom  */
			// array for our id titles
			/*var silderControlIds = [
				'slider_fullwidth',
				'slider_duration',
                'slider_dist',
                'slider_padding',
                'slider_spacing',
                'slider_noWrap',
                'slider_image1',
                'slider_image2',
                'slider_image3',
                'slider_image4',
                'slider_image5'
			];
			
            
            			if ( wp.customize.instance( 'slider_choice' ).get() === 'image' ) {
				$.each( silderControlIds, function ( i, value ) {	
                   
					$( '#customize-control-' + value ).show();
					$( silderControlIds ).show();
				} );
			} else {
                
             
				$.each( silderControlIds, function ( i, value ) { 
					$( '#customize-control-' + value ).hide();
					$( silderControlIds ).hide();
					//console.log( '#customize-control-' + value );
				} );
			}
			
			return hideShowSliderChoiceControls;
*/
		}
            
            // Call this function on page load
	/*
    hideShowSliderChoiceControls();
		
		// ... and on radio button change
		$( '#customize-control-slider_choice' ).on( 'change', hideShowSliderChoiceControls );*/	
            
            
		
	} );
} )( jQuery );
