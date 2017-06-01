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
             
         <?php
                
                if(get_theme_mod('slider_choice')=='image')
                
                {
                   ?>    
             
<div class="slider fullscreen" >
    <ul class="slides">
  
     <?php if (get_theme_mod('slider_image1'))
                   {
        ?>
      <li>
        <img src="<?php $img_id = get_theme_mod( 'slider_image1' );
      echo wp_get_attachment_url( $img_id ); ?>"> <!-- random image -->
        <div class="caption center-align">
          <h2><?php echo get_theme_mod('slider_heading');?></h2>
          <h5 class="light grey-text text-lighten-3"><?php echo get_theme_mod('slider_bodytext');?></h5>
        </div>
      </li>
      <?php } ?>
      
      
      
       <?php if (get_theme_mod('slider_image2'))
                   {
        ?>
      <li>
        <img src="<?php $img_id = get_theme_mod( 'slider_image2' );
      echo wp_get_attachment_url( $img_id ); ?>"> <!-- random image -->
        <div class="caption center-align">
          <h3>Left Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <?php } ?>
      
      
      
      
      <?php if (get_theme_mod('slider_image3'))
                   {
        ?>
      <li>
        <img src="<?php $img_id = get_theme_mod( 'slider_image3' );
      echo wp_get_attachment_url( $img_id ); ?>"> <!-- random image -->
        <div class="caption center-align">
          <h3>Right Aligned Caption</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
         <?php } ?>
         
         
      
      <?php if (get_theme_mod('slider_image4'))
                   {
        ?>
      <li>
        <img src="<?php $img_id = get_theme_mod( 'slider_image4' );
      echo wp_get_attachment_url( $img_id ); ?>"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <?php } ?>
      
      
            <?php if (get_theme_mod('slider_image5'))
                   {
        ?>
      <li>
        <img src="<?php $img_id = get_theme_mod( 'slider_image5' );
      echo wp_get_attachment_url( $img_id ); ?>"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
      <?php } ?>
      
    </ul>
     
</div>
      
               
             
                    <?php 
                    
                }
                
                else
                {
                    
                    ?>
                   
                    <?php
                    
                }
                
                ?>
                
                
                   
                   
                   
            </div>
            <!-- End of Sliders--> 
            
            
              <div class="container" style="width:90%;">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row" >
        <div class="col s12 l4">
          <div class="icon-block">
            <h2 class="center gray-text"><i class="material-icons" style="font-size:50px"><?php echo get_theme_mod('image_options');?></i></h2>
            <h5 class="center"><?php echo get_theme_mod('Item1_heading')?></h5>

            <p class="light justify"><?php echo get_theme_mod('Item1_bodytext'); ?></p>
          </div>
        </div>

        <div class="col s12 l4">
          <div class="icon-block">
            <h2 class="center gray-text"><i class="material-icons" style="font-size:50px"><?php echo get_theme_mod('image_options1');?></i></h2>
            <h5 class="center"><?php echo get_theme_mod('Item2_heading')?></h5>

            <p class="light justify"><?php echo get_theme_mod('Item2_bodytext');?> </p>
          </div>
        </div>

        <div class="col s12 l4">
          <div class="icon-block">
            <h2 class="center gray-text"><i class="material-icons" style="font-size:50px"><?php echo get_theme_mod('image_options3');?></i></h2>
            <h5 class="center"><?php echo get_theme_mod('Item3_heading')?></h5>

            <p class="light justify"><?php echo get_theme_mod('Item3_bodytext');?></p>
          </div>
        </div>
      </div>

    </div>
  </div>
           
           <!-- end of first section-->
            
            
            
        </main>
        <!-- #main -->
    </div>
    <!-- #primary -->
    <?php

get_footer();?>