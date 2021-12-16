<?php

namespace SearchTables\Controllers\Menus;

use SearchTables\Controllers\InterfaceController;
use SearchTables\Controllers\RenderHtml;

/**
 * Name: About
 * @package Controller
 * Type: Menu Controller
 * View path: about.php
 * @since 0.0.1
 */
class About extends RenderHtml implements InterfaceController{

    public function request(): void
    {
        echo $this->render( 'Admin/about.php',[] );
    }
}