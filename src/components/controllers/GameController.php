<?php 

namespace Ananke\Components\Controllers;

use Ananke\Components\Http\ServerRequest;
use Ananke\Components\Http\Response;

/**
 * Game Controller
 * 
 * @author Allan Bachmann <info@ajaybachmann.ch>
 * @version 1.0.0
 * 
 */
class GameController extends BaseController {

    public function __construct($method)
    {
        parent::__construct($method);
    }

    /**
     * Creates a new game based on user input
     * 
     * @route('game')
     * @methods('POST')
     * 
     * @param ServerRequest
     * @return Response
     */
    public function createGame(ServerRequest $request): Response {
        $model = $this->loadModel('Ananke\\Components\\Model\\GameModel');
        var_dump($model);
        $response = new Response();
        return $response;
    }

}