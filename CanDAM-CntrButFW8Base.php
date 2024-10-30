<?php
/**
 * Plugin Name: Candam Connector for Fotoweb DAM - base 
 * Plugin URI: https://www.candam.com/product/wordpress-dam-connector-for-fotoweb-base-edition/
 * Description: A Plugin for inserting Fotoweb 8 DAM images into Wordpress blogs or articles using an editor button
 * Version: 1.3.6
 * Author: Ph Menu-CanDAM
 * Author URI: http://www.candam.com
 * License: GPL2
 * 2016-08-10: add origin app for event listener to avoid conflicting with other Candam plugins making use of selection widget
 * 2016-11-25: formatting for inclusion into the Wordpress free repository of the base version
 * 2017-01-30: Tests with WordPress 4.7.2 and formatting changes
 * 2017-02-09: Bug correction on activation after name change
 */

defined('ABSPATH') or die("No script kiddies please!");

//include( plugin_dir_path( __FILE__ ) . 'Fw8Plgoptions.php');
include( plugin_dir_path( __FILE__ ) . 'CanDAM-CntrButFW8BaseOptions.php');

new candamFw8WpPlg();

class candamFw8WpPlg {

	public $fw_options;

	public function __construct () {
		$this->fw_options = new Fw8WpPlg_Options();
		if($this->fw_options->options['fw_url']) {
		    
			add_action('media_buttons', array($this,'add_fotoweb_button'), 15);
			add_action('wp_enqueue_media', array($this,'register_my_scripts'));
		}
	}

	public function add_fotoweb_button() {
	    
	    echo '<a href="' . $this->fw_options->options['fw_url'] . '/fotoweb/widgets/selection?TB_iframe=true&width=600&height=550" class="button thickbox fwtrigger1" onClick="javascript:window.callingApp = \'CanDAMFw8WPPlg\';return false;">Add from FotoWeb</a>';
		}

	public function register_my_scripts() {
	   
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'jquery-ui-dialog' );
        wp_register_style( 'jquery-style', plugin_dir_path( __FILE__ ) . 'jquery-ui.css', true);
        wp_enqueue_style( 'jquery-style' );
        
		
		
		wp_enqueue_script('fw-javascript', plugins_url( 'CanDAM-CntrButFW8Base.js', __FILE__ ), array('jquery'), true);
		
		wp_localize_script( 'fw-javascript', 'fwParams', $this->fw_options->options );
	}
	
}

