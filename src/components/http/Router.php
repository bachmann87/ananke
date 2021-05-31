<?php

namespace Ananke\Components\Http;

/**
 * Router
 */
class Router {

    protected $routes = [];
    protected $routerPath = "./routes.json";
    protected ServerRequest $request;

    public function __construct(ServerRequest $request)
    {
        $this->routes = $this->loadRoutes();
        $this->request = $request;
    }

    /**
     * Load Routes
     */
    private function loadRoutes() {
        return json_decode(file_get_contents($_SERVER['DOCUMENT_ROOT']."/".$this->routerPath), true);
    }

    /**
     * Resolves Request based on Routes Config
     * @see ./routes.json
     */
    public function resolvesRequest() {

        // Check if URL is valid
        if(array_key_exists($this->request->getRequestUri(), $this->routes)) {
            return true;
        } 
    }

    /**
     * Resolves Requested Component
     */
    public function resolveComponent(string $component) {
        switch ($component) {
            case 'controller':
                return $this->routes[$this->request->getRequestUri()]['controller'];
            case 'method':
                return $this->routes[$this->request->getRequestUri()]['method'];
            case 'view':
                $view = $this->routes[$this->request->getRequestUri()]['view'];                                   
                return $_SERVER['DOCUMENT_ROOT']."/components/views/".$view;
            default:
                // No Default
                break;
        }
    }

    /**
     * Get the value of routes
     */
    public function getRoutes()
    {
        return $this->routes;
    }

    /**
     * Set the value of routes
     */
    public function setRoutes($routes): self
    {
        $this->routes = $routes;

        return $this;
    }
}
