<?php


class Fw8WpPlg_Options {

	public $options;
	public $options_name = 'fotoweb8base_plugin_options';

	public function __construct () {
		// delete_option('fotoweb_plugin_options');
		add_action('admin_init', array($this, 'register_settings_and_fields'));
        add_action('admin_menu', array($this, 'add_menu_page'));
		$this->options = get_option( $this->options_name);
	}


	public function add_menu_page() {
		add_options_page( 'CanDAM Fotoweb Connector Button settings', 'Candam connector FW8-base', 'administrator', __FILE__, array($this, 'display_options_page') );
		
	}


	public function display_options_page () {
		?>
			<div class="wrap">
			<h2>CanDAM Fotoweb Connector Button plugin settings</h2>
			Options relating to the CanDAM Fotoweb 8 Plugin.
				<form method="post" action="options.php">
					<?php 
						settings_fields($this->options_name);
						do_settings_sections(__FILE__); 
						submit_button();
					?>
				</form>
			</div>
		<?php
	}


	public function register_settings_and_fields () {
		register_setting($this->options_name, $this->options_name, array($this, 'fotoweb_validate_settings')); //3rd param = optional callback
		add_settings_section( 'fw_main_section', 'Main Settings', array($this, 'fw_main_section_cb'), __FILE__ );
		add_settings_field( 'fw_url', 'Fotoweb Server URL', array($this, 'fw_url_setting'), __FILE__, 'fw_main_section');
		add_settings_field( 'fw_dft_size', 'Default image size', array($this, 'fw_dft_size_setting'), __FILE__, 'fw_main_section');
		add_settings_field( 'fw_preset_name', 'Preset Name', array($this, 'fw_preset_name_setting'), __FILE__, 'fw_main_section');
		add_settings_section( 'fw_text_section', 'Metadata text Settings', array($this, 'fw_text_section_cb'), __FILE__ );
		//add_settings_field( 'fw_metadata_template', 'Metadata template', array($this, 'fw_metadata_template_setting'), __FILE__, 'fw_text_section');
		//add_settings_field( 'fw_metadata_position', 'Metadata template position', array($this, 'fw_metadata_position_setting'), __FILE__, 'fw_text_section');
		//add_settings_field( 'fw_metadata_margtop', 'Top margin for template (ex: 1em)', array($this, 'fw_metadata_margtop_setting'), __FILE__, 'fw_text_section');
		//add_settings_field( 'fw_metadata_margbot', 'Bottom margin for template (ex: 3em)', array($this, 'fw_metadata_margbot_setting'), __FILE__, 'fw_text_section');
		//add_settings_field( 'fw_metadata_fontsize', 'Font size for template (ex: 0.9em)', array($this, 'fw_metadata_fontsize_setting'), __FILE__, 'fw_text_section');
		
	}


	// TODO: Add validationr
	public function fotoweb_validate_settings ($plugin_options) {
		return $plugin_options;
	}


	public function fw_main_section_cb () {
		// optional
		echo '<p>Fotoweb server link and parameters</p>';
	}
	public function fw_text_section_cb () {
		//optional
		echo '<p>Fotoweb metadata template parameters (Pro Version only)</p>';
	}
	


	/*
	*
	* INPUTS
	*
	*/
	
	
	public function fw_url_setting () {
		echo "<input name='$this->options_name[fw_url]' type='text' value='{$this->options['fw_url']}' />";
	}

	public function fw_dft_size_setting () {
		echo "<input name='$this->options_name[fw_dft_size]' type='text' value='{$this->options['fw_dft_size']}' />";
	}

	public function fw_metadata_fontsize_setting () {
		echo "<input name='$this->options_name[fw_metadata_fontsize]' type='text' value='{$this->options['fw_metadata_fontsize']}' disabled />";
	}
	
	public function fw_metadata_margtop_setting () {
		echo "<input name='$this->options_name[fw_metadata_margtop]' type='text' value='{$this->options['fw_metadata_margtop']}' disabled />";
	}
	
	public function fw_metadata_margbot_setting () {
		echo "<input name='$this->options_name[fw_metadata_margbot]' type='text' value='{$this->options['fw_metadata_margbot']}' disabled />";
	}

	public function fw_preset_name_setting () {
		echo "<input name='$this->options_name[fw_preset_name]' type='text' value='{$this->options['fw_preset_name']}' />";
	}
	public function fw_metadata_template_setting () {
		//echo "<input name='$this->options_name[fw_metadata_template]' type='text' value='{$this->options['fw_metadata_template']}' />";
		echo "<textarea rows='6' cols='50' name='$this->options_name[fw_metadata_template]' disabled>{$this->options['fw_metadata_template']} </textarea>
		<span class='description'>establish a template for the metadata fields to be displayed (Pro version Only</span>";


	}
	public function fw_metadata_position_setting () {
	  echo   "<select name='$this->options_name[fw_metadata_position]' disabled>
          <option " . selected( 1 == $this->options['fw_metadata_position'] ) . " value='1' >Text on the right of asset</option>
          <option " . selected( 2 == $this->options['fw_metadata_position'] ) . " value='2' >Text on the left of asset</option>
          <option " . selected( 3 == $this->options['fw_metadata_position'] ) . " value='3' >Text on top of asset</option>
		  <option " . selected( 4 == $this->options['fw_metadata_position'] ) . " value='4' >Text below asset</option>
			</select>
			<span class='description'>Pick-up the position of the metadata template to be displayed</span>";
		//echo "<input name='$this->options_name[fw_metadata_position]' type='text' value='{$this->options['fw_metadata_position']}' />";
	}
	
	
}

