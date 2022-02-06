<?php

namespace SearchTables\Controllers\Menus;

use SearchTables\Controllers\InterfaceController;
use SearchTables\Controllers\RenderHtml;
use SearchTables\Model\Infrastructure\Tables;

/**
 * Name: About
 * @package Menu Controller
 * @since 1.0.0
 */

class Database extends RenderHtml implements InterfaceController
{

    private Tables $model;
    private array $database;

    public function __construct()
    {
        $this->model = new Tables();

        $this->handle_database();
        $this->request();
    }

    private function handle_database()
    {
        $this->database = [];
        $all_tables = $this->model->show_tables();
        
        foreach ( $all_tables as $table_name ) {

            $size = $this->model->get_table_size( $table_name );
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
            
            array_push( $this->database, $table);
        }
    }

    /**
     * Render the menu view file
     * @return Void
     */
    public function request()
    {
        echo $this->render( 'Admin/database.php', [
            'tables' => $this->database
        ] );
    }
}