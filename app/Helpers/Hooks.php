<?php

namespace SearchTables\Helpers;

/**
 * Name: Hooks
 * Call the actions and filters
 * @package Helper
 * @since 1.0.0
 */
add_action( 'admin_menu', [
    'SearchTables\Helpers\Functions',
    'create_admin_menu'
] );

add_action( 'init', [
    'SearchTables\Helpers\Functions',
    'initialize'
] );

add_filter( 'plugin_action_links', [
    'SearchTables\Helpers\Functions',
    'settings_link'
], 10, 2 );
