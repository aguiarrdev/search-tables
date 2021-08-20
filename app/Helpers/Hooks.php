<?php

namespace SearchTables\Helpers;

use SearchTables\Controllers\Menus;

/**
 * Name: Hooks
 * Package: Helper
 * Description: Call the actions and filters
 * Version: 1.0.0
 */
add_action( 'admin_menu', function (){
        add_menu_page(
            WP_PLUGIN_NAME, 
            WP_PLUGIN_NAME,
            'read',
            WP_PLUGIN_SLUG,
            false,
            'dashicons-search'
        );

        new Menus();

        wp_enqueue_script( 'admin', WP_PLUGIN_DIST . '/admin/index.js');
        wp_enqueue_style( 'admin', WP_PLUGIN_DIST . '/admin/index.css');
        
        wp_enqueue_script( 'bootstrap', WP_PLUGIN_RESOURCES_URL . '/lib/bootstrap/bootstrap.min.js');
        wp_enqueue_style( 'bootstrap', WP_PLUGIN_RESOURCES_URL . '/lib/bootstrap/bootstrap.min.css');
    }
);
