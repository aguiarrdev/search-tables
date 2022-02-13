<?php

namespace SearchTables\Controllers\Menus;

/**
 * Name: About
 * @package Menu Controller
 * @since 1.0.0
 */

class Search
{
    private $vars;
    public function __construct( $vars = [] )
    {
        $this->vars = isset( $_REQUEST['table'] ) ? (array) $_REQUEST : array();
    }

    /**
     * Filter Controllers
     * @since 1.0.0
     * @return mixed
     */
    public function request()
    {
        if ( isset( $this->vars['table'] ) ) {
            return new Table( $this->vars );

        } else {
            return new Database;
        }
    }
}