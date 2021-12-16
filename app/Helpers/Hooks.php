<?php

namespace SearchTables\Helpers;

/**
 * Name: Hooks
 * @package Helper
 * Description: Call the actions and filters
 * @since 0.0.1
 */
add_action( 'admin_menu', [
    'SearchTables\Helpers\Functions',
    'create_admin_menu'
] );

add_action( 'init', [
    'SearchTables\Helpers\Functions',
    'initialize'
] );

add_action( 'init', [
    'SearchTables\Helpers\Functions',
    'handle_actions'
] );
