<?php 

namespace Ananke\Components\Core;

use Ananke\Components\Http\Router;
use Ananke\Components\Http\ServerRequest;
use Twig\Loader\FilesystemLoader;

/**
 * App
 * 
 * @author Allan Bachmann <info@ajaybachmann.ch>
 * @version 1.0.0
 * 
 */
class App {

    protected $request;
    protected $router;
    protected $env;
    protected $namespace = "Ananke\\Components\\Controllers\\";

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
            
            $controller = $this->router->resolveComponent('controller');
            $method = $this->router->resolveComponent('method');
            $view = $this->router->resolveComponent('view');

            $controller = new $controller($method);
            $response = $controller->{$method}();

            var_dump($response);
        }
            
        // $view = new View($template, $response);
        // echo $view->render();

    }
}