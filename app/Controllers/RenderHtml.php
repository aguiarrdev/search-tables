<?php


namespace SearchTables\Controllers;

/**
 * Name: Render HTML
 * Create the method that renders views
 * @package Controller
 * @since 1.0.0
 */
abstract class RenderHtml
{
    /**
     * Render HTML files
     * @param String $file
     * @param Array $dados
     * @return String
     */
    public function render( $file, $dados )
    {
        extract($dados);
        ob_start();
        
        require __DIR__ . '/../Views/' . $file;
        $html = ob_get_clean();

        return $html;
    }
}