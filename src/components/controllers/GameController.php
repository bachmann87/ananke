<?php 

namespace Ananke\Components\Controllers;

class GameController extends BaseController {

    public function __construct($method)
    {
        parent::__construct($method);
    }

    /**
     * @route('game/start')
     */
    public function createGame() {
        return "Hallo";
    }

}