<?php

namespace SearchTables\Helpers;

use SearchTables\Controllers\Menus;

/**
 * Name: Functions
 * Controller the plugin's functions
 * @package Helpers
 * @since 1.0.0
 */
class Functions
{
    /**
     * Create admin menu
     * @return Void
     */
    public static function create_admin_menu()
    {
        add_menu_page(
            WP_PLUGIN_NAME, 
            WP_PLUGIN_NAME,
            'read',
            WP_PLUGIN_SLUG,
            false,
            'dashicons-search'
        );

        new Menus();

        self::enqueue_admin_scripts();
    }

    /**
     * Add the admin scripts
     * @return Void
     */
    public static function enqueue_admin_scripts() 
    {
        wp_enqueue_script( 'data-table', 'https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js' );
        wp_enqueue_script( 'jquery-ui', 'https://cdn.datatables.net/1.11.4/js/dataTables.jqueryui.min.js' );
        wp_enqueue_script( 'admin', WP_PLUGIN_DIST . '/admin.js');

        wp_enqueue_style( 'admin', WP_PLUGIN_DIST . '/admin.css');

        wp_enqueue_style( 'jquery-ui', 'https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css' );
        wp_enqueue_style( 'jquery-ui-dt', 'https://cdn.datatables.net/1.11.4/css/dataTables.jqueryui.min.css' );
        wp_enqueue_style( 'data-table', 'https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css' );
        wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.15.4/css/all.css' );
    }

    /**
     * Load Search Tables text domain
     * @return Void
     */
    public static function initialize()
    {
        load_plugin_textdomain( WP_PLUGIN_SLUG , false );
    }
}