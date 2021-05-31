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

        $gameModel = $this->loadModel('Ananke\\Components\\Models\\GameModel');
        $response = new Response();
        
        if(isset($_POST['players']) && isset($_POST['cards'])) {
            
            // Play Game
            $data = $gameModel->initGame($_POST['players'], $_POST['cards']);

            // Set Response
            $response->setBody($data);
            $response->setContentType("Content-Type: application/json;charset=UTF-8");

        }
        
        return $response;
    }

}