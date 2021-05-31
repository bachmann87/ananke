<?php 

namespace Ananke\Components\Controllers;

/**
 * Base Controller 
 *
 */
class BaseController {
    
    public function __construct($method)
    {
        if(method_exists($this, $method)) {
           return true;
        }
    }

    /**
     * Load a model at runtime
     */
    public function loadModel(string $model) {
        return new $model;
    }

}