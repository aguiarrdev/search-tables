<?php

namespace SearchTables\Helpers;

use SearchTables\Controllers\Menus;

/**
 * Name: Hooks
 * @package: Helper
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

        wp_enqueue_script( 'bootstrap', WP_PLUGIN_RESOURCES_URL . '/lib/bootstrap/css/bootstrap.min.js');
        wp_enqueue_script( 'bootstrap-bundle', WP_PLUGIN_RESOURCES_URL . '/lib/bootstrap/css/bootstrap.bundle.min.js');
        wp_enqueue_script( 'admin', WP_PLUGIN_DIST . '/admin/index.js');

        wp_enqueue_style( 'bootstrap', WP_PLUGIN_RESOURCES_URL . '/lib/bootstrap/css/bootstrap.min.css');
        wp_enqueue_style( 'bootstrap-grid', WP_PLUGIN_RESOURCES_URL . '/lib/bootstrap/css/bootstrap-grid.min.css');
        wp_enqueue_style( 'bootstrap-reboot', WP_PLUGIN_RESOURCES_URL . '/lib/bootstrap/css/bootstrap-reboot.min.css');
        wp_enqueue_style( 'admin', WP_PLUGIN_DIST . '/admin/index.css');
    }
);
