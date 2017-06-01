<?php 

//get_theme_mod (contol id) is used to extract the information stored in the settings

//This function is to register the sections, settings and control in customizer




function pt_section1_customizer_register($wp_customize){
    
    
 $wp_customize->add_section('proposito_section_1', array(
    'title'    => __('Services', 'proposito'),
    'description' => 'Section 1 Options',
     'priority' => '3',

));
    


/**
Custom Checkbox
**/
//$wp_customize->add_setting('custom_checkbox', array(
//	'default'           => false,
//
//));
//$wp_customize->add_control(new Toggle_Checkbox_Custom_control($wp_customize, 'custom_checkbox', array(
//	'label'    		=> esc_html__('Check me', 'mytheme'),
//	'type'     		=> 'checkbox',
//	'settings'		=> 'custom_checkbox',
//	'section'  		=> 'proposito_section_1',
//)));
//    
    
    /**
Column 1: ICON
**/
$wp_customize->add_setting('image_options', array(
	'default'     => 'flash_on',

));
$wp_customize->add_control(new Image_Select_Custom_Control($wp_customize, 'image_options', array(
	'label'     	=> esc_attr__( 'Column 1', 'mytheme' ),
	'description'   => esc_attr__( 'Choose the icon for first column', 'proposito' ),
	'settings'  	=> 'image_options',
	'section'   	=> 'proposito_section_1',
)));
    
    
    /*
*Item1 heading
*/
$wp_customize->add_setting('Item1_heading', array(
    'default'    => 'Speeds up development', 
));
 

$wp_customize->add_control( 'Item1_heading', array(

    'description'   =>__( 'Heading for first item', 'proposito' ),
	'section' => 'proposito_section_1',
	'settings' => 'Item1_heading',
	'type' => 'textarea'

) );
    
    
    
        /*
*Item1 bodytext
*/
$wp_customize->add_setting('Item1_bodytext', array(
    'default'    => 'We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.', 
));
 

$wp_customize->add_control( 'Item1_bodytext', array(

    'description'   =>__( 'Bodytext for first item', 'proposito' ),
	'section' => 'proposito_section_1',
	'settings' => 'Item1_bodytext',
	'type' => 'textarea'

) );
    
        /**
Column 2: ICON
**/
$wp_customize->add_setting('image_options1', array(
	'default'     => 'alarm',

));
$wp_customize->add_control(new Image_Select_Custom_Control($wp_customize, 'image_options1', array(
	'label'     	=> esc_attr__( 'Column 2', 'mytheme' ),
	'description'   => esc_attr__( 'Choose the icon for second item', 'proposito' ),
	'settings'  	=> 'image_options1',
	'section'   	=> 'proposito_section_1',
)));
    
    /*
*Item2 heading
*/
$wp_customize->add_setting('Item2_heading', array(
    'default'    => 'User Experience Focused', 
));
 

$wp_customize->add_control( 'Item2_heading', array(
	'description'   =>__( 'Heading for second item', 'proposito' ),
	'section' => 'proposito_section_1',
	'settings' => 'Item2_heading',
	'type' => 'textarea'

) );
    
    
        
        /*
*Item2 bodytext
*/
$wp_customize->add_setting('Item2_bodytext', array(
    'default'    => 'We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.', 
));
 

$wp_customize->add_control( 'Item2_bodytext', array(

    'description'   =>__( 'Bodytext for second item', 'proposito' ),
	'section' => 'proposito_section_1',
	'settings' => 'Item2_bodytext',
	'type' => 'textarea'

) );
    
/**
Column 3: ICON
**/
$wp_customize->add_setting('image_options3', array(
	'default'     => 'surround_sound',

));
$wp_customize->add_control(new Image_Select_Custom_Control($wp_customize, 'image_options3', array(
	'label'     	=> esc_attr__( 'Column 3', 'mytheme' ),
	'description'   => esc_attr__( 'Choose the icon for third item', 'proposito' ),
	'settings'  	=> 'image_options3',
	'section'   	=> 'proposito_section_1',
)));
    

    
    

    
/*
*Item3 heading
*/
$wp_customize->add_setting('Item3_heading', array(
    'default'    => 'Easy to work with', 
));
 

$wp_customize->add_control( 'Item3_heading', array(
	'description'   =>__( 'Heading for third item', 'proposito' ),
	'section' => 'proposito_section_1',
	'settings' => 'Item3_heading',
	'type' => 'textarea'

) );

    
       /*
*Item3 bodytext
*/
$wp_customize->add_setting('Item3_bodytext', array(
    'default'    => 'We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.', 
));
 

$wp_customize->add_control( 'Item3_bodytext', array(

    'description'   =>__( 'Bodytext for second item', 'proposito' ),
	'section' => 'proposito_section_1',
	'settings' => 'Item3_bodytext',
	'type' => 'textarea'

) );
    
    
}






function pt_section1_css_customizer(){
    ?>
    <style type="text/css">
       
    
    </style>
    
    <script type="text/javascript">
        
       
          

    </script>
    <?php
    
}


add_action('wp_head','pt_section1_css_customizer');