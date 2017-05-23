<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package blankTheme
 */

$theme_opts=get_option('pt_opts');

get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <!-- ------SLIDER SELECTION LOGIC------ -->
            <div id="stemsslider">
                <div id="pt_image_slider" class="carousel carousel-slider"> <a class="carousel-item" href=""><img src="<?php echo $theme_opts['sliderimage1url'] ?>"></a> <a class="carousel-item" href=""><img src="<?php echo $theme_opts['sliderimage2url'] ?>"></a> <a class="carousel-item" href=""><img src="<?php echo $theme_opts['sliderimage3url'] ?>"></a> <a class="carousel-item" href=""><img src="<?php echo $theme_opts['sliderimage4url'] ?>"></a> <a class="carousel-item" href=""><img src="<?php echo $theme_opts['sliderimage5url'] ?>"></a> </div>
                
                   
                   
                   <div id="pt_content_slider" class="carousel carousel-slider center" data-indicators="true">
                    <div class="carousel-fixed-item center"> <a class="btn waves-effect white grey-text darken-text-2">button</a> </div>
                    <div class="carousel-item red white-text" href="#one!">
                        <h2>First Panel</h2>
                        <p class="white-text">This is your stems panel</p>
                    </div>
                    <div class="carousel-item amber white-text" href="#two!">
                        <h2>Second Panel</h2>
                        <p class="white-text">This is your second panel</p>
                    </div>
                    <div class="carousel-item green white-text" href="#three!">
                        <h2>Third Panel</h2>
                        <p class="white-text">This is your third panel</p>
                    </div>
                    <div class="carousel-item blue white-text" href="#four!">
                        <h2>Fourth Panel</h2>
                        <p class="white-text">This is your fourth panel</p>
                    </div>
                </div>
            </div>
        </main>
        <!-- #main -->
    </div>
    <!-- #primary -->
    <?php

get_footer();?>