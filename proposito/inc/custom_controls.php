<?php
if (class_exists('WP_Customize_Control')){
    
    
    
    class Toggle_Checkbox_Custom_control extends WP_Customize_Control{
	public $type = 'toogle_checkbox';
	public function enqueue(){
		wp_enqueue_style( 'custom_controls_css', get_template_directory_uri().'/inc/custom_controls.css');
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
}
