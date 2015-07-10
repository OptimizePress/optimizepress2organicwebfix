<?php
/*
Plugin Name: OptimizePress 2 fix for OrganicWeb theme
Plugin URI: http://www.optimizepress.com
Description: This plugin fixes JavaScript conflicts with OrganicWeb theme for OptimizePress plugin
Version: 1.0
Author: Zvonko Biskup
Author URI: http://www.optimizepress.com
*/

function fixOrganicWebTheme()
{
	// only if OP2 is active
	if (defined('OP_LIVEEDITOR')) {
		$url = get_template_directory_uri();
		echo "<link href='$url/functions/options-page.css' rel='stylesheet' />\n";
		echo "<link href='$url/admin/css/colorpicker.css' rel='stylesheet' />\n";
		echo "<script src='$url/admin/js/colorpicker.js' type='text/javascript'></script>\n";
	}
}

add_action('wp_head', 'fixOrganicWebTheme');