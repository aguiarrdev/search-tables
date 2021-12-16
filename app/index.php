<?php

namespace SearchTables;

// Define names
define( 'WP_PLUGIN_NAME', 'Search Tables' );
define( 'WP_PLUGIN_SLUG', 'search-tables' );
define( 'WP_PLUGIN_PREFIX', 'search-tables' );
define( 'WP_PLUGIN_NAMESPACE', 'SearchTables' );

// Define paths
define( 'WP_PLUGIN_PATH', WP_PLUGIN_DIR . '/'. WP_PLUGIN_SLUG );
define( 'WP_PLUGIN_IMAGES',  plugins_url() . '/' . WP_PLUGIN_SLUG . '/resources/images' ) ;
define( 'WP_PLUGIN_DIST', plugins_url() . '/' . WP_PLUGIN_SLUG . '/dist');

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'add_action' ) ) exit;

require 'Helpers/Hooks.php';