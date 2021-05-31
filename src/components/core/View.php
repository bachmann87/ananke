<?php 

namespace Ananke\Components\Core;

use Ananke\Components\Http\Response;

/**
 * Representation of HTML Template
 * 
 */
class View {
    
    protected string $templatePath;

    public function __construct()
    {
        // No Constructor Injection
    }

    /**
     * Renders View
     */
    public function render($templatePath, $data) {

        ob_start();

        // Data Array accessible in Template as $data
        require $templatePath;

        echo ob_get_clean();

    }
}