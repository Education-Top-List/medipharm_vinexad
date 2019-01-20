<?php
/* 
@package zangTheme
	=================
		ADMIN PAGE
	=================
*/
	function zang_add_admin_page(){
		// Generate zang admin page
		add_menu_page('zang Theme Option','ZQ Framework' , 'manage_options' , 'template_admin_zang', 'zang_theme_create_page', 	get_template_directory_uri() . '/images/setting_icon.png', 110);
		// Generate Sunset Admin Sub pages
		add_submenu_page('template_admin_zang', 'zang Sidebar Options','Sidebar', 'manage_options' , 'template_admin_zang', 'zang_theme_create_page');
	
	
		// Activate custom setttings
		add_action('admin_init', 'zang_custom_settings');
	}
	add_action('admin_menu', 'zang_add_admin_page');
	function zang_custom_settings(){
		// Sidebar Options
		register_setting('zang-settings-groups', 'address');
		register_setting('zang-settings-groups', 'address_en');
		register_setting('zang-settings-groups', 'phone');
		register_setting('zang-settings-groups', 'fax');

		add_settings_section('zang-sidebar-options','Custom content header','zang_sidebar_options','template_admin_zang');
		add_settings_field('sidebar-address','Address Header', 'zang_sidebar_address','template_admin_zang', 'zang-sidebar-options');
		add_settings_field('sidebar-phone','Phone', 'zang_sidebar_phone','template_admin_zang', 'zang-sidebar-options');

		add_settings_section('zang-custom-footer','Custom content footer','zang_custom_footer','template_admin_zang');
		add_settings_field('fax-footer','Fax Footer', 'zang_fax_footer','template_admin_zang', 'zang-custom-footer');

	}
	// Sidebar option function ( INFO USER )
	function zang_sidebar_options(){
		echo '';
	}
	function zang_sidebar_address(){
		$address = esc_attr(get_option('address'));
		$address_en = esc_attr(get_option('address_en'));
		echo '<input type="text" name="address" value="'.$address.'" placeholder="Vietnamese">';
		echo '<input type="text" name="address_en" value="'.$address_en.'" placeholder="English">';
	}
	function zang_sidebar_phone(){
		$phone = esc_attr(get_option('phone'));
		echo '<input type="text" name="phone" value="'.$phone.'" placeholder="">';
	}

	function zang_fax_footer(){
		$fax = esc_attr(get_option('fax'));
		echo '<input type="text" name="phone" value="'.$fax.'" placeholder="">';
	}

	function zang_theme_create_page(){
		require_once(get_template_directory().'/inc/templates/zang-admin.php');
	}
