<?php

namespace SearchTables\Controllers\Menus;

use SearchTables\Controllers\InterfaceController;
use SearchTables\Controllers\RenderHtml;

/**
 * Name: Sql
 * @package Controller
 * Type: Menu Controller
 * View path: sql.php
 * Version: 1.0.0
 */
class SqlQuery extends RenderHtml implements InterfaceController{

    public function request(): void
    {
        echo $this->render( 'about.php',[] );
    }
}