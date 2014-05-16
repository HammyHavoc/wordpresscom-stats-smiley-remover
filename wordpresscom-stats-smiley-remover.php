<?php
/*
Plugin Name: WordPress.com Stats Smiley Remover
Plugin URI: http://thisismyurl.com/downloads/wordpresscom-stats-smiley-remover/
Description: The WordPress.com Stats Smiley Remover quickly removes the smiley face placed in the footer of your site by the WordPress.com Stats plugin.
Author: Christopher Ross
Author URI: http://thisismyurl.com/
Version: 4.2014.06
*/


/**
 * WordPress.com Stats Smiley Remover core file
 *
 * This file contains all the logic required for the plugin, for more information please see the readme file
 *
 * @link		http://wordpress.org/extend/plugins/wordpresscom-stats-smiley-remover/
 *
 * @package 	WordPress.com Stats Smiley Remover
 * @copyright	Copyright (c) 2008, Chrsitopher Ross
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License, v2 (or newer)
 *
 * @since 		WordPress.com Stats Smiley Remover 1.0
 *
 *
 */



/**
 * Removes the smiley face from the front end of WordPress
 *
 * @package WordPress.com Stats Smiley Remover
 * 
 *
 */
function thisismyurl_wpsmileyremover_header_code_function() {
	
	wp_register_script( 'wordpresscom-stats-smiley-remover', 
						plugins_url( 'css/wordpresscom-stats-smiley-remover.css', __FILE__ ) 
	);
	
	wp_enqueue_script( 'wordpresscom-stats-smiley-remover' );
	
}
add_action( 'wp_enqueue_scripts','thisismyurl_wpsmileyremover_header_code_function' );
