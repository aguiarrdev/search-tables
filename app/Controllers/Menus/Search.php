<?php

namespace SearchTables\Controllers\Menus;

use SearchTables\Controllers\InterfaceController;
use SearchTables\Controllers\RenderHtml;
use SearchTables\Helpers\Utils;
use SearchTables\Model\Infrastructure\Tables;

/**
 * Name: About
 * @package Controller
 * Type: Menu Controller
 * View path: about.php
 * @since 1.0.0
 */

class Search extends RenderHtml implements InterfaceController{

    private Tables $table_collection;
    private array $tables;
    private array $rows;
    private array $vars;

    public function __construct()
    {
        $r_vars = Utils::get_requests_vars();

        $this->table_collection = new Tables();
        
        if ( is_array( $r_vars ) && isset( $r_vars['row'] ) ) {
            $this->handle_row( $r_vars['row'] );
        } else {
            $this->handle_table();
        }

    }
    
    private function handle_row( $row_name )
    {

    }

    private function handle_table()
    {
        $this->tables = [];
        $all_tables = $this->table_collection->getTables();
        
        foreach ( $all_tables as $table_name ) {

            $size = $this->table_collection->getTableSize( $table_name );
            if ( $size > 1000 ) {
                $size = number_format( $size / 1024, 1, '.', ',' );
                $size .= " MB";

            } else {
                $size = number_format( $size, 1, '.', ',' );
                $size .= " KB";
            }

            $table = [
                'name' => $table_name,
                'size' => $size
            ];
            array_push( $this->tables, $table);
        }
    }

    public function get_vars()
    {
        if ( isset( $this->tables ) && ! empty( $this->tables ) ) {
            $this->vars['tables'] = $this->tables;
        }

        if ( isset( $this->rows ) && ! empty( $this->rows ) ) {
            $this->vars['rows'] = $this->tables;
        }
    }

    /**
     * Render the menu view file
     * @return Void
     */
    public function request()
    {
        $this->get_vars();

        echo $this->render( 'Admin/search.php', $this->vars );
    }
}