<?php

//setup
add_theme_support('menus');






//includes 


include( get_template_directory() . '/inc/walker.php');

include( get_template_directory() . '/inc/walker_main_nav.php');

include( get_template_directory() . '/includes/front/enqueue.php');

include( get_template_directory() . '/includes/widgets.php');

include( get_template_directory() . 'sidebar.php');

include( get_template_directory() . '/includes/setup.php');

include( get_template_directory() . '/includes/activate.php');

include( get_template_directory() . '/includes/admin/menus.php');

include( get_template_directory() . '/includes/admin/options-page.php');

include( get_template_directory() . '/includes/admin/init.php');

include( get_template_directory() . '/form_process/save-options.php');

       


/*customizer files*/
include( get_template_directory() . '/includes/admin/customizer/colours.php');

include( get_template_directory() . '/includes/admin/customizer/slider_options.php');




/*Action and Filter Hooks*/

add_action( 'wp_enqueue_scripts', 'proposito_scripts' );

add_action( 'wp_enqueue_scripts', 'proposito_styles' );

add_action( 'widgets_init', 'proposito_widgets' );

add_action( 'after_setup_theme', 'proposito_setup');

add_action( 'after_switch_theme', 'pt_activate');

add_action('admin_menu','pt_admin_menus');

add_action('admin_init','pt_admin_init');

add_action('customize_register', 'pt_colour_customizer_register');

add_action('customize_register', 'pt_slider_customizer_register');



















//Shortcodes 



