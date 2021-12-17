<?php
class Preloader_Customizer {
	public function __construct() {
		add_action( 'customize_register', array( $this, 'register_customize_sections' ) );
	}
	public function register_customize_sections( $wp_customize ) {
        /*
        * Add settings to sections.
        */
        $this->preloader_callout_section( $wp_customize );
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
  
    /* Author Section */
    private function preloader_callout_section( $wp_customize ) {
		// New panel for "Layout".
        $wp_customize->add_section('basic-preloader-callout-section', array(
            'title' => 'Preloader',
            'priority' => 1,
            'description' => __('Select words for the preloader.'),
        ));
    
        $wp_customize->add_setting('basic-preloader-callout-display', array(
            'default' => 'Yes',
            'sanitize_callback' => array( $this, 'sanitize_custom_option' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-preloader-callout-display-control', array(
            'label' => 'Display the preloader?',
            'section' => 'basic-preloader-callout-section',
            'settings' => 'basic-preloader-callout-display',
            'type' => 'select',
            'choices' => array('Yes' => 'Yes', 'No' => 'No')
        )));
        $wp_customize->add_setting('basic-preloader-callout-text', array(
            'default' => 'photography,',
            'sanitize_callback' => array( $this, 'sanitize_custom_text' )
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-preloader-callout-control', array(
            'label' => 'Text-1',
            'section' => 'basic-preloader-callout-section',
            'settings' => 'basic-preloader-callout-text',
            'type' => 'text'
        )));

        $wp_customize->add_setting('basic-preloader-callout-text-2', array(
            'default' => 'learn',
            'sanitize_callback' => array( $this, 'sanitize_custom_text' )
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-preloader-callout-control-2', array(
            'label' => 'Text-2',
            'section' => 'basic-preloader-callout-section',
            'settings' => 'basic-preloader-callout-text-2',
            'type' => 'text'
        )));

        $wp_customize->add_setting('basic-preloader-callout-text-3', array(
            'default' => 'all',
            'sanitize_callback' => array( $this, 'sanitize_custom_text' )
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-preloader-callout-control-3', array(
            'label' => 'Text-3',
            'section' => 'basic-preloader-callout-section',
            'settings' => 'basic-preloader-callout-text-3',
            'type' => 'text'
        )));

        $wp_customize->add_setting('basic-preloader-callout-text-4', array(
            'default' => 'about',
            'sanitize_callback' => array( $this, 'sanitize_custom_text' )
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-preloader-callout-control-4', array(
            'label' => 'Text-4',
            'section' => 'basic-preloader-callout-section',
            'settings' => 'basic-preloader-callout-text-4',
            'type' => 'text'
        )));

        $wp_customize->add_setting('basic-preloader-callout-text-5', array(
            'default' => 'it',
            'sanitize_callback' => array( $this, 'sanitize_custom_text' )
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'basic-preloader-callout-control-5', array(
            'label' => 'Text-5',
            'section' => 'basic-preloader-callout-section',
            'settings' => 'basic-preloader-callout-text-5',
            'type' => 'text'
        )));
    }
}