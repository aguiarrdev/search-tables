<?php 

namespace SearchTables\Controllers;

use SearchTables\Helpers\Config;
use SearchTables\Helpers\Utils;

/**
 * Name: Menus
 * Handle creating submenus
 * @package Controller
 * @since 1.0.0
 */
class Menus {
    
    public function __construct()
    {
        $this->initialize_menus();
    }

    /**
     * Get the menu controllers
     * @return Void
     */
    private function initialize_menus() 
    {

        $controllers = Config::controllers();
        $menus = [];

        foreach ( $controllers as $key => $controller ) {
            $slug = Utils::parse_view( $controller[0] );
            $function = "SearchTables\\Controllers\\Menus\\$controller[0]";
            $menu = [
                'title'    => $controller[1],
                'slug'     => $slug,
                'function' => [new $function, 'request'] ,
                'position' => $key
            ];

            array_push( $menus, $menu );
        }
        return $this->create_menus( $menus );
    }

    /**
     * Create the submenus
     * @param Array $menus
     * @return Void
     */
    private function create_menus( $menus ) 
    {

        foreach ( $menus as $menu ) {
            add_submenu_page(WP_PLUGIN_SLUG ,$menu['title'],$menu['title'],'manage_options',$menu['slug'],$menu['function'],$menu['position']);
        }

        remove_submenu_page(WP_PLUGIN_SLUG ,WP_PLUGIN_SLUG);
    }
}