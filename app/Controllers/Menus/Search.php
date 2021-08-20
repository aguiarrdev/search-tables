<?php

namespace SearchTables\Controllers\Menus;

use SearchTables\Controllers\InterfaceController;
use SearchTables\Controllers\RenderHtml;
use SearchTables\Model\Tables;

/**
 * Name: About
 * Package: Controller
 * Type: Menu Controller
 * View path: about.php
 * Version: 1.0.0
 */
class Search extends RenderHtml implements InterfaceController{

    private Tables $table_collection;
    private array $tables;

    public function __construct()
    {
        $this->table_collection = new Tables();
    }

    private function getTables(): void
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

    public function request(): void
    {
        $this->getTables();

        echo $this->render( 'search.php',[ 
            'tables' => $this->tables 
        ]);
    }
}