<?php
function proposito_scripts() {

    //Adding jquery
    wp_enqueue_script('jquery');
    
    //Adding proposito theme javascript
    wp_enqueue_script( 'proposito-js', get_template_directory_uri() . '/js/proposito.js', array(), '1.0.0', true );
    
    
    //Adding Materialize javascript
    wp_enqueue_script( 'proposito-materialize', get_template_directory_uri() . '/inc/materialize/js/materialize.js', array(), '1.0.0', true );

    //	wp_enqueue_script( 'proposito-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
    
    wp_register_script('pt_materializejs',get_template_directory_uri().'/inc/materialize/js/materialize.min.js',array(),false,true);
    wp_enqueue_script('pt_materializejs');
}


function proposito_styles(){
    
    wp_enqueue_style( 'proposito-style', get_stylesheet_uri() );
    
    wp_register_style('pt_materialize',get_template_directory_uri().'/inc/materialize/css/materialize.css');
    
    wp_enqueue_style('pt_materialize');
    
    wp_enqueue_style( 'material-icon', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), '1.0.0');
	
}
