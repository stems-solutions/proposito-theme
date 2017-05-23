<?php

function pt_admin_menus(){
    
    add_menu_page(
    
        'Proposito Options',
        'Theme Options',
        'edit_theme_options',
        'pt_theme_opts',
        'pt_theme_opts_page'
        
    );
}