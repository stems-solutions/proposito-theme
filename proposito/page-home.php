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
    
       
        <main id="main" class="site-main" role="main">
            <!-- ------SLIDER SELECTION LOGIC------ -->
            <?php 
             if ($theme_opts['slider_type']==2) {
                 ?>
                <div class="stemsslider">
                    <div class="carousel">
                        <a class="carousel-item" href=""><img src="<?php echo $theme_opts['sliderimage1url'] ?>"></a>
                        <a class="carousel-item" href="#two!"><img src="http://lorempixel.com/250/250/nature/2"></a>
                        <a class="carousel-item" href="#three!"><img src="http://lorempixel.com/250/250/nature/3"></a>
                        <a class="carousel-item" href="#four!"><img src="http://lorempixel.com/250/250/nature/4"></a>
                        <a class="carousel-item" href="#five!"><img src="http://lorempixel.com/250/250/nature/5"></a>
                    </div>
            </div>
                    <?php
                 
             }
            
         else if ($theme_opts['slider_type']==1){
             ?>
                       <div class="stemsslider">
                        <div class="carousel carousel-slider center" data-indicators="true">
                            <div class="carousel-fixed-item center"> <a class="btn waves-effect white grey-text darken-text-2">button</a> </div>
                            <div class="carousel-item red white-text" href="#one!">
                                <h2>First Panel</h2>
                                <p class="white-text">This is your first panel</p>
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
                
                
                
                <?php
             
         }
    ?>
      
                    

             

        </main>
        <!-- #main -->

    <?php

get_footer();?>