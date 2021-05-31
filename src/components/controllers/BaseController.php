<?php 

namespace Ananke\Components\Controllers;

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
        if(file_exists($model)) {
            return new $model;
        }   
    }

}