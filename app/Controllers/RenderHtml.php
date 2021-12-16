<?php


namespace SearchTables\Controllers;

/**
 * Name: Render HTML
 * @package Controller
 * Type: Process Controller
 * Description: Create the method that renders views
 * @since 1.0.0
 */
abstract class RenderHtml
{
    public function render( string $file, array $dados ): string
    {
        extract($dados);
        ob_start();
        
        require __DIR__ . '/../Views/' . $file;
        $html = ob_get_clean();

        return $html;
    }
}