<?php


   function pt_customizer_controls() {
       

    wp_enqueue_script( 'customizer-controls', get_template_directory_uri() . '/js/customizer.js', array( 'jquery' ), '20170412', true );
       
        wp_enqueue_style( 'material-icon', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), '1.0.0');
       
       wp_register_style('pt_icons_tray',get_template_directory_uri().'/inc/icon_tray.css');
    
    wp_enqueue_style('pt_icons_tray');

}