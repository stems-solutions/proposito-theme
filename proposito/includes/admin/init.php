<?php

function pt_admin_init(){
    
   include( get_template_directory() . '/includes/admin/admin_enqueue.php'); add_action('admin_enqueue_scripts','pt_admin_enqueue');
    
    add_action('admin_post_pt_save_options','pt_save_options');
}