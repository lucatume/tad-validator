<?php
/**
 * Plugin Name: TAD Validator
 * Plugin URI:  http://theaveragedev.com
 * Description: Validate WordPress from WordPress
 * Version:     0.1.0
 * Author:      Luca Tumedei
 * Author URI:  http://theaveragedev.com
 * License:     GPLv2+
 * Text Domain: tadval
 * Domain Path: /languages
 */

/**
 * Copyright (c) 2015 Luca Tumedei (email : luca@theaveragedev.com)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2 or, at
 * your discretion, any later version, as published by the Free
 * Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

// Useful global constants
define( 'TADVAL_VERSION', '0.1.0' );
define( 'TADVAL_URL',     plugin_dir_url( __FILE__ ) );
define( 'TADVAL_PATH',    dirname( __FILE__ ) . '/' );

require_once 'vendor/autoload_52.php';

/**
 * Load the plugin
 */
if(!function_exists('tadval_load')){
    function tadval_load() {
    	$locale = apply_filters( 'plugin_locale', get_locale(), 'tadval' );
    	load_textdomain( 'tadval', WP_LANG_DIR . '/tadval/tadval-' . $locale . '.mo' );
    	load_plugin_textdomain( 'tadval', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
    }
    add_action('plugins_loaded', 'tadval_load');
}
