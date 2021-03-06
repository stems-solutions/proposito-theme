<?php 

//get_theme_mod (contol id) is used to extract the information stored in the settings

//This function is to register the sections, settings and control in customizer
function pt_slider_customizer_register($wp_customize){
    
    
 $wp_customize->add_section('proposito_sliders', array(
    'title'    => __('Slider', 'proposito'),
    'description' => 'Slider Options',
     'priority' => '0',

));
    
    
                       /* SLIDER CHOICE*/ 

    
    

    
    
    
    
    

    
    
$wp_customize->add_setting('slider_heading', array(
    'default'    => 'Proposito Theme', 
));
 

$wp_customize->add_control( 'slider_heading', array(
	'label' => __( 'Heading', 'proposito' ),
	'section' => 'proposito_sliders',
	'settings' => 'slider_heading',
	'type' => 'text',

) );
    
    
    
$wp_customize->add_setting('slider_bodytext', array(
    'default'    => 'The ultimate One page Wordpress theme!', 
));
 

$wp_customize->add_control( 'slider_bodytext', array(
	'label' => __( 'Body Text', 'proposito' ),
	'section' => 'proposito_sliders',
	'settings' => 'slider_bodytext',
	'type' => 'textarea'

) );

//
//    
//    /*Slider Image size*/
//$wp_customize->add_setting('slider_item_width', array(
//    'default'    => '500px', 
//));
 

    
    
//$wp_customize->add_control( 'slider_item_width', array(
//  'type' => 'text',
//  'section' => 'proposito_sliders', // Add a default or your own section
//  'settings' => 'slider_item_width', 
//  'label' => __( 'Image Width','proposito' ),
//) );
    
    
    /*FOR IMAGES*/

    $wp_customize->add_setting( 'slider_image1', array(

        
) );

$wp_customize->add_control(
  new WP_Customize_Media_Control( $wp_customize, 'slider_image1', array(
    'label' => __( 'Image Slider Image 1' ),
    'section' => 'proposito_sliders', // Add a default or your own section
      'settings' => 'slider_image1',
)	)	);
    
    
    
        $wp_customize->add_setting( 'slider_image2', array(
           
        
) );
    
    
    

$wp_customize->add_control(
  new WP_Customize_Media_Control( $wp_customize, 'slider_image2', array(
    'label' => __( 'Image Slider Image 2' ),
    'section' => 'proposito_sliders', // Add a default or your own section
      'settings' => 'slider_image2',
)	)	);
    
    
            $wp_customize->add_setting( 'slider_image3', array(

        
) );

$wp_customize->add_control(
  new WP_Customize_Media_Control( $wp_customize, 'slider_image3', array(
    'label' => __( 'Image Slider Image 3' ),
    'section' => 'proposito_sliders', // Add a default or your own section
      'settings' => 'slider_image3',
)	)	);

    
    
                $wp_customize->add_setting( 'slider_image4', array(

        
) );

$wp_customize->add_control(
  new WP_Customize_Media_Control( $wp_customize, 'slider_image4', array(
    'label' => __( 'Image Slider Image 4' ),
    'section' => 'proposito_sliders', // Add a default or your own section
      'settings' => 'slider_image4',
)	)	);
    
    
                    $wp_customize->add_setting( 'slider_image5', array(

        
) );

$wp_customize->add_control(
  new WP_Customize_Media_Control( $wp_customize, 'slider_image5', array(
    'label' => __( 'Image Slider Image 5' ),
    'section' => 'proposito_sliders', // Add a default or your own section
      'settings' => 'slider_image5',
)	)	);
    
      /* Full Width*/ 
$wp_customize->add_setting('slider_fullwidth', array(
    'default'    => 'true', 

));
 

    
    
$wp_customize->add_control( 'slider_fullwidth', array(
  'type' => 'text',
  'section' => 'proposito_sliders', // Add a default or your own section
  'settings' => 'slider_fullwidth', 
  'label' => __( 'Full Width','proposito' ),
) );
    
    
   /* Transition duration in milliseconds. (Default: 200)*/ 
$wp_customize->add_setting('slider_duration', array(
    'default'    => '2000px', 
));
 

    
    
$wp_customize->add_control( 'slider_duration', array(
  'type' => 'text',
  'section' => 'proposito_sliders', // Add a default or your own section
  'settings' => 'slider_duration', 
  'label' => __( 'Transition Duration','proposito' ),
) );
    
    
       /* Perspective zoom. If 0, all items are the same size. (Default: -100)*/ 
$wp_customize->add_setting('slider_dist', array(
    'default'    => '0', 
));
 

    
    
$wp_customize->add_control( 'slider_dist', array(
  'type' => 'text',
  'section' => 'proposito_sliders', // Add a default or your own section
  'settings' => 'slider_dist', 
  'label' => __( 'Perpesctive Zoom, ','proposito' ),
) );

    
    
           /* Set the spacing of the center item. (Default: 0)*/ 
$wp_customize->add_setting('slider_spacing', array(
    'default'    => '0', 
));
 

    
    
$wp_customize->add_control( 'slider_spacing', array(
  'type' => 'text',
  'section' => 'proposito_sliders', // Add a default or your own section
  'settings' => 'slider_spacing', 
  'label' => __( 'Shift, set the spacing of center item','proposito' ),
) );
    
    
               /* Set the noWrap property. (Default: 0)*/ 
$wp_customize->add_setting('slider_noWrap', array(
    'default'    => 'false', 
));
 

    
    
$wp_customize->add_control( 'slider_noWrap', array(
  'type' => 'text',
  'section' => 'proposito_sliders', // Add a default or your own section
  'settings' => 'slider_noWrap', 
  'label' => __( 'Dont wrap around and cycle through items','proposito' ),
) );
    
    
                   /* Set the noWrap property. (Default: 0)*/ 
$wp_customize->add_setting('slider_padding', array(
    'default'    => '0', 
));
 

    
    
$wp_customize->add_control( 'slider_padding', array(
  'type' => 'text',
  'section' => 'proposito_sliders', // Add a default or your own section
  'settings' => 'slider_padding', 
  'label' => __( 'Set the padding between non center items ','proposito' ),
) );

    
    
    

    
}






function pt_slider_item_width_css_customizer(){
    ?>
    <style type="text/css">
        <?php if (get_theme_mod('slider_choice')=='content')
    {
        
        ?>
        
        #pt_image_slider{
            display:none;
        }
        
          #pt_content_slider{
            display:block;
        }
        
        <?php
    }
    
 else {
     
          ?>
        
        #pt_content_slider{
            display:none;
        }
        
           #pt_image_slider{
            display:block;
        }
        
        <?php 
 }
        ?>
    
    </style>
    
    <script type="text/javascript">
        
        jQuery(function(){
            
            jQuery('.carousel.carousel-slider').carousel({fullWidth: <?php echo get_theme_mod('slider_fullwidth'); ?>,
                                                duration: <?php echo get_theme_mod('slider_duration'); ?>,
                                                dist: <?php echo get_theme_mod('slider_dist'); ?>,
                                                shift: <?php echo get_theme_mod('slider_spacing'); ?>,
                                                padding:<?php echo get_theme_mod('slider_padding'); ?>,
                                                indicators:true,
                                                noWrap:false,
                                               
                                               
                                               
                                               });
        });
          

    </script>
    <?php
    
}


add_action('wp_head','pt_slider_item_width_css_customizer');