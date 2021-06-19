<?php 

namespace Ananke\Components\Core;

use Ananke\Components\Http\Router;
use Ananke\Components\Http\ServerRequest;
use Ananke\Components\Core\View;

/**
 * App
 * 
 * @author Allan Bachmann <info@ajaybachmann.ch>
 * @version 1.0.0
 * 
 */
class App {

    protected ServerRequest $request;
    protected Router $router;
    protected $env;

    public function __construct($env)
    {
        $this->request = new ServerRequest();
        $this->router = new Router($this->request);
        $this->env = $env;
    }
    
    /**
     * Main Application Runner
     */
    public function run() {
        
        if($this->router->resolvesRequest()) {
            
            // Components
            $controller = $this->router->resolveComponent('controller');
            $method = $this->router->resolveComponent('method');
            $template = $this->router->resolveComponent('view');

            // Calls
            $controller = new $controller($method);
            $response = $controller->{$method}($this->request);

            // Render
            $view = new View();
            $view->render($template, $response);
        }

    }
}