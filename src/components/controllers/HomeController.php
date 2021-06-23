<?php

namespace Ananke\Components\Controllers;

use Ananke\Components\Http\Response;
use Ananke\Components\Http\ServerRequest;

/**
 * Home Controller
 * 
 * 
 */
class HomeController extends BaseController {

    public function index(ServerRequest $request): Response {
        
        $data = [
            "user" => "John Doe",
            "id" => 12,
        ];

        $response = new Response();

        // Set Response
        $response->setBody($data);
        $response->setContentType("Content-Type: text/html;charset=UTF-8");        

        return $response;
    }
}