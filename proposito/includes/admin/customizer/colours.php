<?php 

//get_theme_mod (contol id) is used to extract the information stored in the settings

//This function is to register the sections, settings and control in customizer
function pt_colour_customizer_register($wp_customize){
    
    
     $wp_customize->add_section('proposito_colors', array(
        'title'    => __('Colour Options', 'proposito'),
        'description' => 'Change Colour for Background',
            'priority' => '1',
  
  
    ));
    
    
  $wp_customize->add_setting('background_colour', array(
        'default'      => '#fff',
   
    ));
    
      $wp_customize->add_setting('menu_colour', array(
        'default'      => '#111',
   
    ));
        
  $wp_customize->add_control(new WP_Customize_Color_Control ($wp_customize, 'background_colour', array(
        'label'      => __('Edit Background Color','proposito'),
        'section'    => 'proposito_colors',
        'settings'   => 'background_colour'
  )  ));


  $wp_customize->add_control(new WP_Customize_Color_Control ($wp_customize, 'menu_colour', array(
        'label'      => __('Edit Top Menu Text Color','proposito'),
        'section'    => 'proposito_colors',
        'settings'   => 'menu_colour'
  )  ));
}


//This function is to inject CSS !!

function pt_colour_css_customizer(){
    ?>
    
    <style type="text/css">

        body{background-color:<?php echo get_theme_mod('background_colour')?>;}
        
        #pt_header a{
            
            color: <?php echo get_theme_mod('menu_colour'); ?> ;
        }
        
    </style>
    
    <?php
    
}


add_action('wp_head','pt_colour_css_customizer');
