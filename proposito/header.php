<?php
$theme_opts     =       get_option('pt_opts');

?>
    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>

    <body>
        <!--SIDENAV HTML -->
        <header id="pt_header">
                <div id="stems_sidenav" class="sidenav" style="background:white;"> <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <?php
                        $menu = [

                         'walker'            => new Walker_Nav_side()

                        ];
                        wp_nav_menu( $menu ); // desktop menu
                    ?>
                </div>

           
            <!--LOGO-->
                <div id="stems_logo">
                        <?php
                    if ( $theme_opts['logo_type']==2) {
                        ?> <a href="index.php"><img src="<?php echo $theme_opts['logo_img'] ?>" /> </a>
                            <?php
                        }

                    else{
                        ?> 
                        <a href="index.php"><?php bloginfo('name'); ?></a>
                        <?php
                    }
                    ?>
                </div>
            
            
            <div id="hamburger"> <a href="#" onclick="openNav()"><i class="material-icons">menu</i></a></div>
            <?php
                            $menu = [ // desktop menu array

                            'container_id'   => 'stems-navigation'

                            ];
                        wp_nav_menu( $menu ); // desktop menu
                     ?>
        </header>