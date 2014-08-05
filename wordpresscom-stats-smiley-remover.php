<?php
/*
Plugin Name: WordPress.com Stats Smiley Remover
Plugin URI: http://thisismyurl.com/downloads/wordpresscom-stats-smiley-remover/
Description: The WordPress.com Stats Smiley Remover quickly removes the smiley face placed in the footer of your site by the WordPress.com Stats plugin.
Author: Christopher Ross
Author URI: http://thisismyurl.com/
Version: 4.1.14.06.06
*/


/**
 * WordPress.com Stats Smiley Remover core file
 *
 * This file contains all the logic required for the plugin, for more information please see the readme file
 *
 * @link		http://wordpress.org/extend/plugins/wordpresscom-stats-smiley-remover/
 *
 * @package	WordPress.com Stats Smiley Remover
 * @copyright	Copyright (c) 2008, Chrsitopher Ross
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License, v2 (or newer)
 *
 * @since		WordPress.com Stats Smiley Remover 1.0
 *
 *
 */

if ( is_admin() ) {

	include_once( plugin_dir_path( __FILE__ ) . 'common-settings.php' );
	include_once( plugin_dir_path( __FILE__ ) . 'common/common.php' );

} /* if ( is_admin() ) */

class WPStatsSmileyRemover {

	/**
	 * Activates the required functions for the plugin.
	 *
	 * @package WordPress.com Stats Smiley Remover
	 * @author  Christopher Ross <info@thisismyurl.com>
	 *
	 * @since 4.1.2014.06.06
	 * @param NULL
	 * @return NULL
	 *
	 *
	 */
	 public function __construct() {

		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_styles' ) );

	} /* __construct() */


	/**
	 * Removes the smiley face from the front end of WordPress.
	 *
	 * @package WordPress.com Stats Smiley Remover
	 * @author  Christopher Ross <info@thisismyurl.com>
	 *
	 * @since 4.1.2014.06.06
	 * @param NULL
	 * @return NULL
	 *
	 *
	 */
	function enqueue_styles() {


		if ( ! is_admin() ) {

			wp_register_style( 'wordpresscom-stats-smiley-remover', plugins_url( 'css/wordpresscom-stats-smiley-remover.css', __FILE__ ) );
			__( 'WordPress', 'wordpresscom-stats-smiley-remover' );
		}

	} /* enqueue_styles() */
	
	


} /* WPStatsSmileyRemover */


$WPStatsSmileyRemover = new WPStatsSmileyRemover();