<?php

function pt_save_options(){
// if(!current_user_can('edit_theme_options')){
//    wp_die(__('You are not allowed to be on this page','proposito')) 
// }
    
    check_admin_referer('pt_options_verify');
    
    
    $opts                        =       get_option('pt_opts');
    
    $opts['facebook']            =   sanitize_text_field($_POST['pt_facebook_opt']);
    
    $opts['twitter']             =   sanitize_text_field($_POST['pt_twitter_opt']);
    
    $opts['youtube']             =   sanitize_text_field($_POST['pt_youtube_opt']);
    
    $opts['logo_type']           =   absint($_POST['pt_logo_type']); 
    
    $opts['logo_img']            =   $_POST['pt_inputlogoimg']; 
    
    $opts['sliderimage1url']     =   $_POST['pt_inputsliderimg1']; 
    
    $opts['sliderimage2url']     =   $_POST['pt_inputsliderimg2']; 
    
    $opts['sliderimage3url']     =   $_POST['pt_inputsliderimg3']; 
    
    $opts['sliderimage4url']     =   $_POST['pt_inputsliderimg4']; 
    
    $opts['sliderimage5url']     =   $_POST['pt_inputsliderimg5']; 
    
    $opts['footer']=$_POST['pt_footer_content'];
    
    $opts['slider_type']         =   absint($_POST['pt_slider']); 
    
    update_option('pt_opts',$opts);
    
    wp_redirect(admin_url('admin.php?page=pt_theme_opts&status=1')); 
}