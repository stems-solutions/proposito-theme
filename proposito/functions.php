<?php

//setup
add_theme_support('menus');






//includes 


include( get_template_directory() . '/inc/walker.php');

include( get_template_directory() . '/inc/walker_main_nav.php');

include( get_template_directory() . '/includes/front/enqueue.php');

include( get_template_directory() . '/includes/widgets.php');

include( get_template_directory() . 'sidebar.php');

include( get_template_directory() . '/includes/setup.php');

include( get_template_directory() . '/includes/activate.php');

include( get_template_directory() . '/includes/admin/menus.php');

include( get_template_directory() . '/includes/admin/options-page.php');

include( get_template_directory() . '/includes/admin/init.php');

include( get_template_directory() . '/form_process/save-options.php');

       


/*customizer files*/
include( get_template_directory() . '/includes/admin/customizer/colours.php');

include( get_template_directory() . '/includes/admin/customizer/slider_options.php');

include( get_template_directory() . '/includes/admin/customizer/section1_options.php');

include( get_template_directory() . '/includes/admin/customizer/Image_select_custom_control.php');

include( get_template_directory() . '/customizer.php');









/*Action and Filter Hooks*/

add_action( 'wp_enqueue_scripts', 'proposito_scripts' );

add_action( 'wp_enqueue_scripts', 'proposito_styles' );

add_action( 'widgets_init', 'proposito_widgets' );

add_action( 'after_setup_theme', 'proposito_setup');

add_action( 'after_switch_theme', 'pt_activate');

add_action('admin_menu','pt_admin_menus');

add_action('admin_init','pt_admin_init');

add_action('customize_register', 'pt_colour_customizer_register');

add_action('customize_register', 'pt_slider_customizer_register');

add_action('customize_register', 'pt_section1_customizer_register');

add_action( 'customize_controls_enqueue_scripts', 'pt_customizer_controls' );










/**
 * Customizer settings.
 */

if ( class_exists( 'WP_Customize_Control' ) ){
	
class Textarea_Custom_Control extends WP_Customize_Control {
	
	/**
	 * @access public
	 * @var    string
	 */
	public $type = 'textarea';
	
	/**
	 * @access public
	 * @var    array
	 */
	public $statuses;
	
	/**
	 * Constructor.
	 *
	 * If $args['settings'] is not defined, use the $id as the setting ID.
	 *
	 * @since   10/16/2012
	 * @uses    WP_Customize_Control::__construct()
	 * @param   WP_Customize_Manager $manager
	 * @param   string $id
	 * @param   array $args
	 * @return  void
	 */
	public function __construct( $manager, $id, $args = array() ) {
		
		$this->statuses = array( '' => __( 'Default' ) );
		parent::__construct( $manager, $id, $args );
	}
	
	/**
	 * Render the control's content.
	 * 
	 * Allows the content to be overriden without having to rewrite the wrapper.
	 * 
	 * @since   10/16/2012
	 * @return  void
	 */
	public function render_content() {
		?>
		<label>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<textarea class="large-text" cols="20" rows="5" <?php $this->link(); ?>>
				<?php echo esc_textarea( $this->value() ); ?>
			</textarea>
		</label>
		<?php
	}
	
}

 
class Toggle_Checkbox_Custom_control extends WP_Customize_Control{
	public $type = 'toogle_checkbox';
	public function enqueue(){
		wp_enqueue_style(
            'custom_controls_css', get_template_directory_uri().'/inc/custom_controls.css'
        );
	}
	public function render_content(){
		?>
		<div class="checkbox_switch">
			<div class="onoffswitch">
			    <input type="checkbox" id="<?php echo esc_attr($this->id); ?>" name="<?php echo esc_attr($this->id); ?>" class="onoffswitch-checkbox" value="<?php echo esc_attr( $this->value() ); ?>" <?php $this->link(); checked( $this->value() ); ?>>
			    <label class="onoffswitch-label" for="<?php echo esc_attr($this->id); ?>"></label>
			</div>
			<span class="customize-control-title onoffswitch_label"><?php echo esc_html( $this->label ); ?></span>
			<p><?php echo wp_kses_post($this->description); ?></p>
		</div>
		<?php
	}
    }

class Image_Select_Custom_Control extends WP_Customize_Control{
	public $type = 'image_select';
	public function enqueue(){
		wp_enqueue_style( 'custom_controls_css', get_template_directory_uri().'/inc/custom_controls.css');
	}
	public function render_content(){
	?>
		<div class="customize_image_select">
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<p><?php echo wp_kses_post($this->description); ?></p>
			
			<div id="result">
				
			
				
        <label>
            <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="flash_on" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('flash_on', esc_attr($this->value()) );?>/>

            <i class="material-icons" style="font-size:30px">flash_on</i>


        </label>


        <label>
            <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="input" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('input', esc_attr($this->value()) );?>/>

           <i class="material-icons dp48">input</i>

        </label>     
           
           
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="info_outline" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('info_outline', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">info_outline</i>

        </label>   
        
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="invert_colors" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('invert_colors', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">invert_colors</i>

        </label>
        
             
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="label" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('label', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">label</i>

        </label>
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="label_outline" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('label_outline', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">label_outline</i>

        </label>    
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="language" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('language', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">language</i>

        </label>     
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="query_builder" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('query_builder', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">query_builder</i>

        </label>    
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="perm_identity" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('perm_identity', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">perm_identity</i>

        </label>      
        
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="perm_media" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('perm_media', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">perm_media</i>

        </label>      
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="perm_phone_msg" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('perm_phone_msg', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">perm_phone_msg</i>

        </label>      
        
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="perm_scan_wifi" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('perm_scan_wifi', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">perm_scan_wifi</i>

        </label>    
        
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="picture_in_picture" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('picture_in_picture', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">picture_in_picture</i>

        </label>   
        
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="play_for_work" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('play_for_work', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">play_for_work</i>

        </label>
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="polymer" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('polymer', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">polymer</i>

        </label>    
        
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="power_settings_new" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('power_settings_new', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">power_settings_new</i>

        </label>        
        
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="print" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('print', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">print</i>

        </label>      
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="thumb_down" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('thumb_down', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">thumb_down</i>

        </label>        
        
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="thumbs_up_down" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('thumbs_up_down', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">thumbs_up_down</i>

        </label>    
        
         
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="email" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('email', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">email</i>

        </label>   
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="dialpad" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('dialpad', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">dialpad</i>

        </label>  
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="dialer_sip" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('dialer_sip', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">dialer_sip</i>

        </label>     
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="contacts" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('contacts', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">contacts</i>

        </label>        
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="forward_5" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('forward_5', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">forward_5</i>

        </label>       
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="stay_current_portrait" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('stay_current_portrait', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">stay_current_portrait</i>

        </label>        
        
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="stay_primary_landscape" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('stay_primary_landscape', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">stay_primary_landscape</i>

        </label>        
        
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="stay_primary_portrait" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('stay_primary_portrait', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">stay_primary_portrait</i>

        </label>       
        
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="swap_calls" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('swap_calls', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">swap_calls</i>

        </label>        
        
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="textsms" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('textsms', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">textsms</i>

        </label>        
        
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="voicemail" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('voicemail', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">voicemail</i>

        </label>       
        
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="vpn_key" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('vpn_key', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">vpn_key</i>

        </label>   
        
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="group_work" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('group_work', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">group_work</i>

        </label>      
        
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="grade" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('grade', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">grade</i>

        </label>        
        
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="clear_all" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('clear_all', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">clear_all</i>

        </label>       
        
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="chat_bubble_outline" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('chat_bubble_outline', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">chat_bubble_outline</i>

        </label>      
        
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="chat_bubble" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('chat_bubble', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">chat_bubble</i>

        </label>       
        
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="repeat" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('repeat', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">repeat</i>

        </label>      
        
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="repeat_one" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('repeat_one', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">repeat_one</i>

        </label>    
        
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="replay" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('replay', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">replay</i>

        </label>     
        
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="replay_10" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('replay_10', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">replay_10</i>

        </label>    
        
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="replay_30" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('replay_30', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">replay_30</i>

        </label>       
        
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="replay_5" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('replay_5', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">replay_5</i>

        </label>    
        
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="shuffle" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('shuffle', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">shuffle</i>

        </label>       
        
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="skip_next" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('skip_next', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">skip_next</i>

        </label>     
        
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="skip_previous" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('skip_previous', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">skip_previous</i>

        </label>       
        
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="contact_phone" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('contact_phone', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">contact_phone</i>

        </label>       
        
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="comment" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('comment', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">comment</i>

        </label>    
        
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="recent_actors" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('recent_actors', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">recent_actors</i>

        </label>      
        
          <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="snooze" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('snooze', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">snooze</i>

        </label>       
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="sort_by_alpha" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('sort_by_alpha', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">sort_by_alpha</i>

        </label>        
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="stop" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('stop', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">stop</i>

        </label>        
        
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="subtitles" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('subtitles', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">subtitles</i>

        </label>       
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="surround_sound" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('surround_sound', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">surround_sound</i>

        </label>       
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="web" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('web', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">web</i>

        </label>     
        
        
        <label>
        <input type="radio" name="<?php echo esc_attr($this->id); ?>" value="volume_up" data-customize-setting-link="<?php echo esc_attr($this->id); ?>" <?php checked('volume_up', esc_attr($this->value()) );?>/>

        <i class="material-icons dp48">volume_up</i>

        </label>
            
  


         








      
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">volume_off</i><span>volume_off</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">volume_mute</i><span>volume_mute</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">toc</i><span>toc</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">today</i><span>today</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">toll</i><span>toll</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">track_changes</i><span>track_changes</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">translate</i><span>translate</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">trending_down</i><span>trending_down</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">question_answer</i><span>question_answer</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">receipt</i><span>receipt</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">done</i><span>done</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">tab</i><span>tab</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">tab_unselected</i><span>tab_unselected</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">theaters</i><span>theaters</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">hd</i><span>hd</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">games</i><span>games</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">hearing</i><span>hearing</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">view_module</i><span>view_module</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">view_list</i><span>view_list</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">settings_remote</i><span>settings_remote</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">settings_voice</i><span>settings_voice</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">search</i><span>search</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">settings</i><span>settings</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">settings_applications</i><span>settings_applications</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">settings_backup_restore</i><span>settings_backup_restore</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">settings_bluetooth</i><span>settings_bluetooth</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">settings_brightness</i><span>settings_brightness</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">settings_cell</i><span>settings_cell</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">settings_ethernet</i><span>settings_ethernet</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">settings_input_antenna</i><span>settings_input_antenna</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">trending_flat</i><span>trending_flat</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">trending_up</i><span>trending_up</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">work</i><span>work</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">youtube_searched_for</i><span>youtube_searched_for</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">zoom_in</i><span>zoom_in</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">my_location</i><span>my_location</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">visibility_off</i><span>visibility_off</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">visibility</i><span>visibility</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">view_week</i><span>view_week</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">view_stream</i><span>view_stream</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">view_quilt</i><span>view_quilt</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">video_library</i><span>video_library</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">videocam</i><span>videocam</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">videocam_off</i><span>videocam_off</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">volume_down</i><span>volume_down</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">settings_overscan</i><span>settings_overscan</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">settings_input_svideo</i><span>settings_input_svideo</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">settings_input_hdmi</i><span>settings_input_hdmi</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">settings_input_composite</i><span>settings_input_composite</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">settings_input_component</i><span>settings_input_component</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">launch</i><span>launch</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">perm_device_information</i><span>perm_device_information</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">perm_data_setting</i><span>perm_data_setting</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">zoom_out</i><span>zoom_out</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">alarm_on</i><span>alarm_on</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">dns</i><span>dns</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">redeem</i><span>redeem</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">reorder</i><span>reorder</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">report_problem</i><span>report_problem</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">restore</i><span>restore</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">room</i><span>room</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">schedule</i><span>schedule</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">movie</i><span>movie</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">android</i><span>android</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">announcement</i><span>announcement</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">mic_off</i><span>mic_off</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">mic_none</i><span>mic_none</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">swap_horiz</i><span>swap_horiz</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">swap_vert</i><span>swap_vert</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">swap_vertical_circle</i><span>swap_vertical_circle</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">system_update_alt</i><span>system_update_alt</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">present_to_all</i><span>present_to_all</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">portable_wifi_off</i><span>portable_wifi_off</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">phonelink_setup</i><span>phonelink_setup</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">phonelink_ring</i><span>phonelink_ring</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">phonelink_lock</i><span>phonelink_lock</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">phonelink_erase</i><span>phonelink_erase</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">person_pin</i><span>person_pin</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">navigation</i><span>navigation</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">new_releases</i><span>new_releases</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">not_interested</i><span>not_interested</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">pause</i><span>pause</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">pause_circle_filled</i><span>pause_circle_filled</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">pause_circle_outline</i><span>pause_circle_outline</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">play_arrow</i><span>play_arrow</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">play_circle_filled</i><span>play_circle_filled</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">play_circle_outline</i><span>play_circle_outline</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">playlist_add</i><span>playlist_add</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">queue</i><span>queue</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">queue_music</i><span>queue_music</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">radio</i><span>radio</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">class</i><span>class</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">code</i><span>code</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">credit_card</i><span>credit_card</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">dashboard</i><span>dashboard</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">delete</i><span>delete</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">description</i><span>description</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">open_with</i><span>open_with</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">pageview</i><span>pageview</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">payment</i><span>payment</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">perm_camera_mic</i><span>perm_camera_mic</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">perm_contact_calendar</i><span>perm_contact_calendar</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">airplay</i><span>airplay</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">done_all</i><span>done_all</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">phone</i><span>phone</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">no_sim</i><span>no_sim</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">invert_colors_off</i><span>invert_colors_off</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">chat</i><span>chat</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">call_split</i><span>call_split</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">call_received</i><span>call_received</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">call_missed</i><span>call_missed</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">call_merge</i><span>call_merge</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">call_made</i><span>call_made</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">call_end</i><span>call_end</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">call</i><span>call</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">business</i><span>business</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">alarm_off</i><span>alarm_off</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">message</i><span>message</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">location_on</i><span>location_on</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">location_off</i><span>location_off</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">live_help</i><span>live_help</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">album</i><span>album</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">av_timer</i><span>av_timer</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">closed_caption</i><span>closed_caption</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">equalizer</i><span>equalizer</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">turned_in_not</i><span>turned_in_not</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">verified_user</i><span>verified_user</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">view_agenda</i><span>view_agenda</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">view_array</i><span>view_array</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">view_carousel</i><span>view_carousel</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">view_column</i><span>view_column</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">subject</i><span>subject</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">supervisor_account</i><span>supervisor_account</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">settings_power</i><span>settings_power</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">shop</i><span>shop</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">shop_two</i><span>shop_two</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">shopping_basket</i><span>shopping_basket</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">shopping_cart</i><span>shopping_cart</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">speaker_notes</i><span>speaker_notes</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">spellcheck</i><span>spellcheck</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">star</i><span>star</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">stars</i><span>stars</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">store</i><span>store</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">ring_volume</i><span>ring_volume</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">speaker_phone</i><span>speaker_phone</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">stay_current_landscape</i><span>stay_current_landscape</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">forum</i><span>forum</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">import_export</i><span>import_export</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">open_in_browser</i><span>open_in_browser</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">open_in_new</i><span>open_in_new</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">forward_30</i><span>forward_30</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">turned_in</i><span>turned_in</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">view_headline</i><span>view_headline</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">view_day</i><span>view_day</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">warning</i><span>warning</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">error_outline</i><span>error_outline</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">error</i><span>error</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">add_alert</i><span>add_alert</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">settings_phone</i><span>settings_phone</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">forward_10</i><span>forward_10</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">fast_rewind</i><span>fast_rewind</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">fast_forward</i><span>fast_forward</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">explicit</i><span>explicit</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">list</i><span>list</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">lock</i><span>lock</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">lock_open</i><span>lock_open</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">lock_outline</i><span>lock_outline</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">loyalty</i><span>loyalty</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">markunread_mailbox</i><span>markunread_mailbox</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">note_add</i><span>note_add</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">offline_pin</i><span>offline_pin</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">http</i><span>http</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">mic</i><span>mic</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">loop</i><span>loop</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">library_music</i><span>library_music</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">library_books</i><span>library_books</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">library_add</i><span>library_add</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">high_quality</i><span>high_quality</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">info</i><span>info</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">https</i><span>https</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">aspect_ratio</i><span>aspect_ratio</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">assessment</i><span>assessment</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">assignment</i><span>assignment</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">assignment_ind</i><span>assignment_ind</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">assignment_late</i><span>assignment_late</span></div>
          <div class="icon-preview col s3 m3"><i class="material-icons dp48">mode_edit</i><span>mode_edit</span></div>


        </div>
		</div>
	<?php
	}
}

}






//Shortcodes 



