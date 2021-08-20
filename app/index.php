<?php

namespace SearchTables;

// Define names
define( 'WP_PLUGIN_NAME', 'Search Tables' );
define( 'WP_PLUGIN_SLUG', 'search-tables' );

// Define paths
define( 'WP_PLUGIN_PATH', WP_PLUGIN_DIR . '/'. WP_PLUGIN_SLUG );
define( 'WP_PLUGIN_RESOURCES_URL', plugins_url() . '/'. WP_PLUGIN_SLUG . '/resources' );
define( 'WP_PLUGIN_IMAGES',  WP_PLUGIN_RESOURCES_URL . '/resources/images' ) ;
define( 'WP_PLUGIN_DIST', plugins_url() . '/' . WP_PLUGIN_SLUG . '/dist');

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'add_action' ) ) exit;

require 'Helpers/Hooks.php';