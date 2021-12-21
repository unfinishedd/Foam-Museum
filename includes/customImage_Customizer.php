<?php
class customImage_Customizer {
	public function __construct() {
		add_action( 'customize_register', array( $this, 'register_customize_sections' ) );
	}
	public function register_customize_sections( $wp_customize ) {
        /*
        * Add settings to sections.
        */
        $this->customImage_callout_section( $wp_customize );
    }
    
    /* Sanitize Inputs */
    public function sanitize_custom_option($input) {
        return ( $input === "No" ) ? "No" : "Yes";
    }
    public function sanitize_custom_text($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }
    public function sanitize_custom_url($input) {
        return filter_var($input, FILTER_SANITIZE_URL);
    }
    public function sanitize_custom_email($input) {
        return filter_var($input, FILTER_SANITIZE_EMAIL);
    }
    public function sanitize_hex_color( $color ) {
        if ( '' === $color ) {
            return '';
        }
     
        // 3 or 6 hex digits, or the empty string.
        if ( preg_match( '|^#([A-Fa-f0-9]{3}){1,2}$|', $color ) ) {
            return $color;
        }
    }
  
    /* customImage Section */
    private function customImage_callout_section( $wp_customize ) {
		// New panel for "Layout".
        $wp_customize->add_section('basic-customImage-callout-section', array(
            'title' => 'CustomImage',
            'priority' => 2,
            'description' => __('Select image for your custom image.'),
        ));
    
        $wp_customize->add_setting('basic-customImage-callout-display', array(
            'default' => 'No',
            'sanitize_callback' => array( $this, 'sanitize_custom_option' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-customImage-callout-display-control', array(
            'label' => 'Display this image?',
            'section' => 'basic-customImage-callout-section',
            'settings' => 'basic-customImage-callout-display',
            'type' => 'select',
            'choices' => array('No' => 'No', 'Yes' => 'Yes')
        )));
        $wp_customize->add_setting('basic-customImage-callout-text', array(
            'default' => '',
            'sanitize_callback' => array( $this, 'sanitize_custom_text' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-customImage-callout-control', array(
            'label' => 'About Author',
            'section' => 'basic-customImage-callout-section',
            'settings' => 'basic-customImage-callout-text',
            'type' => 'textarea'
        )));
         
        $wp_customize->add_setting('basic-customImage-callout-image', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => array( $this, 'sanitize_custom_url' )
        ));
    
        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'basic-customImage-callout-image-control', array(
            'label' => 'Image',
            'section' => 'basic-customImage-callout-section',
            'settings' => 'basic-customImage-callout-image',
            'width' => 445,
            'height' => 200,
        )));
    }
}