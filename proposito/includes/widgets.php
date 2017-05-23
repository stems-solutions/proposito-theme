<?php

function proposito_widgets(){
    
    register_sidebar( array(
    'name'  =>   __('Proposito Sidebar','proposito'),
    'id'    =>  'pt_sidebar',
    'description'   =>  __('Proposito Theme Sidebar','proposito'),
    'class' =>  '',
    )); 
}