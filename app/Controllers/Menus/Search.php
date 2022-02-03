<?php

namespace SearchTables\Controllers\Menus;

use SearchTables\Controllers\InterfaceController;
use SearchTables\Controllers\RenderHtml;
use SearchTables\Helpers\Utils;
use SearchTables\Model\Infrastructure\Tables;

/**
 * Name: About
 * @package Menu Controller
 * @since 1.0.0
 */

class Search extends RenderHtml implements InterfaceController{

    private Tables $table;
    private array $tables;

    public function __construct()
    {
        $this->table = new Tables();
        $this->handle_table();
    }

    private function handle_table()
    {
        $this->tables = [];
        $all_tables = $this->table->getTables();
        
        foreach ( $all_tables as $table_name ) {

            $size = $this->table->getTableSize( $table_name );
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

    /**
     * Render the menu view file
     * @return Void
     */
    public function request()
    {
        echo $this->render( 'Admin/tables.php', [
            'tables' => $this->tables
        ] );
    }
}