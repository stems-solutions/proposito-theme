<?php


   function pt_customizer_controls() {
       

    wp_enqueue_script( 'customizer-controls', get_template_directory_uri() . '/js/customizer.js', array( 'jquery' ), '20170412', true );




}