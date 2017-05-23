<?php

function pt_theme_opts_page(){
    $theme_opts = get_option('pt_opts');
    
    
    ?>
    <div class='wrap'>
        <div class="row deep-purple darken-2">
            <div class="col s9">
                <h4 style="color:white;">Proposito Theme Options</h4> </div>
        </div>
        
         <?php if(isset($_GET['status']) && $_GET['status']==1)
                        {

                            ?>
                            <div class="center col s4 blue" style="color:white; "><h6>Options Saved</h6></div>


                            <?php
                        }?>
        <ul class="collapsible" data-collapsible="accordion">
            <li>
                <div class="collapsible-header"><i class="material-icons">filter_drama</i>General Options</div>
                <div class="collapsible-body"><span>
               
                <div class="section row">
                    <form class="col s12" method="post" action="admin-post.php">
                        <input type="hidden" name="action" value="pt_save_options">
                        <?php wp_nonce_field('pt_options_verify');?>
                            <div class="row valign-wrapper ">
                                <div class="col s3">
                                    <h6> Logo </h6>
                                </div>

                                <div class="col s9">

                                <div class="btn blue col s3" id="pt_uploadlogoimgbtn"> <span >Upload</span> </div>
                <div class="col s9">
                    <input type="text" name="pt_inputlogoimg" value="<?php echo $theme_opts['logo_img']?>"> </div>
    </div>
    </div>
    <div class="row valign-wrapper">
        <div class="col s3">
            <h6>Logo Type</h6>
        </div>
        <div class="col s9">
            <select name="pt_logo_type">
                <option value="1">Site Title</option>
                <option value="2" <?php echo $theme_opts[ 'logo_type']==2? 'selected': '';?>>Image</option>
            </select>
        </div>
    </div>
  
    <div class="row valign-wrapper">
        <div class="col s3">
            <h6>Facebook URL</h6>
        </div>
        <div class="col s9">
            <input type="text" class="validate" name="pt_facebook_opt" value="<?php echo $theme_opts['facebook']; ?>">
            <label for="pt_facebook_url">Facebook URL</label>
        </div>
    </div>
    <div class="row valign-wrapper">
        <div class="col s3">
            <h6>Twitter URL</h6>
        </div>
        <div class="col s9">
            <input type="text" class="validate" name="pt_twitter_opt" value="<?php echo $theme_opts['twitter']; ?>">
            <label for="pt_twitter_url">Twitter URL</label>
        </div>
    </div>
    <div class="row valign-wrapper">
        <div class="col s3">
            <h6>Youtube URL</h6>
        </div>
        <div class="col s9">
            <input type="text" class="validate" name="pt_youtube_opt" value="<?php echo $theme_opts['youtube']; ?>">
            <label for="pt_youtube_url">Youtube URL</label>
        </div>
    </div>
    <div class="row valign-wrapper">
        <div class="col s3">
            <h6>Footer Content (HTML)</h6>
        </div>
        <div class="col s9">
            <textarea id="footer_content" class="materialize-textarea" name="pt_footer_content">
                <?php echo stripslashes_deep($theme_opts['footer']); ?>
            </textarea>
            <label for="footer_content">Footer Content</label>
        </div>
    </div>
    
    </span>
    </div>
    </li>
    <li>
    <div class="collapsible-header"><i class="material-icons">filter_drama</i>Slider Options</div>
                    <div class="collapsible-body"><span>
                        
                        
                         <div class="row valign-wrapper">
        <div class="col s3">
            <h5>Slider Type</h5>
        </div>
        <div class="col s9">
            <p>
                <input name="pt_slider" type="radio" id="content_slider_radio_btn" value="1" <?php echo $theme_opts[ 'slider_type']==1? 'checked': '';?> />
                <label for="content_slider_radio_btn">Content Slider</label>
            </p>
            <p>
                <input name="pt_slider" type="radio" id="image_slider_radio_btn" value="2" <?php echo $theme_opts[ 'slider_type']==2? 'checked': '';?>/>
                <label for="image_slider_radio_btn">Image Corousel</label>
                
               
           
            </p>
            
            
            <p>
                <input name="pt_slider" type="radio" id="test3" value="3" <?php echo $theme_opts[ 'slider_type']==3? 'checked': '';?> />
                <label for="test3">None</label>
            </p>
        </div>
    </div>
    
    <div id ="pt_silderimageinputs"class="row <?php echo $theme_opts[ 'slider_type']==2? '': 'hide';?>">
<!--                       Slider Image 1-->
                            <div class="row valign-wrapper">
                            <div class="col s12">
                            <h5>Slider Images</h5>
                            </div>
                            </div>
                    
                        <div class="row valign-wrapper ">
                               
                                <div class="col s9">
                                   
                                    <div class="btn blue" id="pt_uploadsliderimg1btn"> 
                                    <span >Choose</span> 
                                    </div>
                                    
                                    <div class="col s9">
                                    <input type="text" name="pt_inputsliderimg1" value="<?php echo $theme_opts['sliderimage1url'] ?>"> 
                                    </div>
                                    
                                </div>
                        </div>
                       
                       
                       
<!--                       Slider Image 2-->
                        <div class="row valign-wrapper ">
                               
                                <div class="col s9">
                                   
                                    <div class="btn blue" id="pt_uploadsliderimg2btn"> 
                                    <span >Choose</span> 
                                    </div>
                                    
                                    <div class="col s9">
                                    <input type="text" name="pt_inputsliderimg2" value="<?php echo $theme_opts['sliderimage2url'] ?>"> 
                                    </div>
                                    
                                </div>
                        </div>
                        
<!--                            Slider Image 3-->
                        <div class="row valign-wrapper ">
                               
                                <div class="col s9">
                                   
                                    <div class="btn blue" id="pt_uploadsliderimg3btn"> 
                                    <span >Choose</span> 
                                    </div>
                                    
                                    <div class="col s9">
                                    <input type="text" name="pt_inputsliderimg3" value="<?php echo $theme_opts['sliderimage3url'] ?>"> 
                                    </div>
                                    
                                </div>
                        </div>
                        
                        
<!--                                Slider Image 4-->
                        <div class="row valign-wrapper ">
                               
                                <div class="col s9">
                                   
                                    <div class="btn blue" id="pt_uploadsliderimg4btn"> 
                                    <span >Choose</span> 
                                    </div>
                                    
                                    <div class="col s9">
                                    <input type="text" name="pt_inputsliderimg4" value="<?php echo $theme_opts['sliderimage4url'] ?>"> 
                                    </div>
                                    
                                </div>
                        </div>
                        
<!--                                Slider Image 5-->
                        <div class="row valign-wrapper ">
                               
                                <div class="col s9">
                                   
                                    <div class="btn blue" id="pt_uploadsliderimg5btn"> 
                                    <span >Choose</span> 
                                    </div>
                                    
                                    <div class="col s9">
                                    <input type="text" name="pt_inputsliderimg5" value="<?php echo $theme_opts['sliderimage5url'] ?>"> 
                                    </div>
                                    
                                </div>
                        </div>
                        
                        </div>
                        
                        </span></div></li>
    
  
    
      
        
          
            
              
                
                  
                    
                      
                          </ul>
    <div class="row valign-wrapper">
        <div class="col offset-s9">
            <button class="btn waves-effect waves-light purple darken-4" type="submit" id="pt_savethemeoptions">Save <i class="material-icons right">send</i> </button>
        </div>
    </div>
    </form>
    </div>
    
    
    
    
    
    </div>
    <?php
    
    
    
}