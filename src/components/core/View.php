<?php 

namespace Ananke\Components\Core;

use Ananke\Components\Http\Response;

/**
 * Representation of HTML Template
 * 
 */
class View {
    
    protected string $templatePath;
    protected Response $response;


    public function __construct($templatePath, $response)
    {
        $this->templatePath = $templatePath;
        $this->response = $response;
    }

    public function render() {
        include $this->templatePath;
    }
}