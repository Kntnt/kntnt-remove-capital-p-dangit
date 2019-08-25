<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Kntnt Remove Capital P Dangit
 * Plugin URI:        https://www.kntnt.com/
 * Description:       Stops the silly enforced capitiliazation of Wordpress as WordPress.
 * Version:           1.0.0
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */

// See http://justintadlock.com/archives/2010/07/08/lowercase-p-dangit
remove_filter( 'the_title', 'capital_P_dangit', 11 );
remove_filter( 'the_content', 'capital_P_dangit', 11 );
remove_filter( 'comment_text', 'capital_P_dangit', 31 );
