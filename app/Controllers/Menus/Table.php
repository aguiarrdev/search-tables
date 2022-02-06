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

class Table  extends RenderHtml implements InterfaceController
{

    private Tables $model;
    private array $table;
    private array $columns;

    public function __construct( $vars )
    {
        $this->model = new Tables();
        $this->table = [];

        $this->handle_table( $vars );
        $this->request();
    }

    private function handle_table( $vars )
    {
        $table = [];

        if ( isset( $vars['table'] ) ) {
            $table = $vars['table'];
        }

        $this->table   = $this->model->get_table( $table );
        $this->columns = $this->model->get_table_columns( $table );
    }

    /**
     * Render the menu view file
     * @return Void
     */
    public function request()
    {
        echo $this->render( 'Admin/table.php', [
            'table' => $this->table,
            'columns' => $this->columns
        ] );
    }
}