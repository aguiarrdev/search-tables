<?php

namespace SearchTables\Controllers\Menus;

use SearchTables\Controllers\InterfaceController;
use SearchTables\Controllers\RenderHtml;

/**
 * Name: About
 * Package: Controller
 * Type: Menu Controller
 * View path: about.php
 * Version: 1.0.0
 */
class About extends RenderHtml implements InterfaceController{

    public function request(): void
    {
        echo $this->render( 'about.php',[] );
    }
}