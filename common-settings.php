<?php

/**
 * Variables required for the common settings include, to display informaiton about this plugin.
 *
 */
global $plugin_settings;
$plugin_settings = array();

$plugin_slug = 'wordpresscom-stats-smiley-remover';


/* General plugin details */
$plugin_settings['slug'] = $plugin_slug;
$plugin_settings['name'] = __( 'WordPress.com Stats Smiley Remover' );
$plugin_settings['shortname'] = __( 'Smiley Remover' );

/* set WordPress.org paths for official downloads etc. */
$plugin_settings['url'] ['wordpress_org'] ['page'] 			= esc_url( 'http://wordpress.org/plugins/' . $plugin_slug . '/' );
$plugin_settings['url'] ['wordpress_org'] ['forum'] 		= esc_url( 'http://wordpress.org/support/plugin/' . $plugin_slug );
$plugin_settings['url'] ['wordpress_org'] ['download'] 		= esc_url( 'http://downloads.wordpress.org/plugin/' . $plugin_slug . '.zip' );


/* set GitHub paths for development downloads etc. */
$plugin_settings['url'] ['github_com'] ['page'] 			= esc_url( 'https://github.com/thisismyurl/' . $plugin_slug . '/' );
$plugin_settings['url'] ['github_com'] ['forum'] 			= esc_url( 'https://github.com/thisismyurl/' . $plugin_slug . '/issues' );
$plugin_settings['url'] ['github_com'] ['download'] 		= esc_url( 'https://github.com/thisismyurl/' . $plugin_slug . '/archive/master.zip' );


/* set paths for thisismyurl.com downloads etc. */
$plugin_settings['url'] ['thisismyurl_com'] ['page']		= esc_url( 'http://thisismyurl.com/downloads/' . $plugin_slug . '/' );
$plugin_settings['url'] ['thisismyurl_com'] ['forum']		= NULL;
$plugin_settings['url'] ['thisismyurl_com'] ['download']	= NULL;


