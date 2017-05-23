<?php

function pt_admin_enqueue(){
    if(!isset($_GET['page']) || $_GET['page']!= 'pt_theme_opts'){
        
        return;
    }
    wp_register_style('pt_materialize',get_template_directory_uri().'/inc/materialize/css/materialize.css');
    
    wp_enqueue_style('pt_materialize');
    
     wp_enqueue_style( 'material-icon', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), '1.0.0');
    
     //Adding Materialize javascript
    wp_enqueue_script( 'proposito-materialize', get_template_directory_uri() . '/inc/materialize/js/materialize.js', array(), '1.0.0', true );

    
     wp_enqueue_style('jQuery');
    
    
        wp_enqueue_script( 'proposito-js', get_template_directory_uri() . '/js/proposito.js', array(), '1.0.0', true );
    
    wp_enqueue_media();
    
    wp_enqueue_script('pt-options',get_template_directory_uri().'/assets/scripts/options.js',array(),'1.0.0',true);
}