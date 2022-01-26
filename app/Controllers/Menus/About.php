<?php

namespace SearchTables\Controllers\Menus;

use SearchTables\Controllers\InterfaceController;
use SearchTables\Controllers\RenderHtml;

/**
 * Name: About
 * @package Menu Controller
 * @since 0.0.1
 */
class About extends RenderHtml implements InterfaceController{

    /**
     * Render the menu view file
     * @return Void
     */
    public function request()
    {
        echo $this->render( 'Admin/about.php',[] );
    }
}