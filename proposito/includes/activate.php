<?php

function pt_activate(){
  
    $theme_opts     =       get_option('pt_opts');
    
    if(!$theme_opts){
        
        $opts       =       array(
        'logo_type'          =>      1,
        'logo_img'           =>      '',
        'slider_type'        =>      1,
        'facebook'           =>      '',
        'twitter'            =>      '',
        'youtube'            =>      '',
        'sliderimage1url'    =>      '',
        'sliderimage2url'    =>      '', 
        'sliderimage3url'    =>      '', 
        'sliderimage4url'    =>      '', 
        'sliderimage5url'    =>      '', 
        'footer_content'     =>      ''
        ) ;
   
            add_option('pt_opts',$opts);
    
    }
         
}