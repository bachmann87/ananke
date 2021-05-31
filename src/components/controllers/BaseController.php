<?php 

namespace Ananke\Components\Controllers;

class BaseController {
    
    public function __construct($method)
    {
        if(method_exists($this, $method)) {
           return true;
        }
    }

}