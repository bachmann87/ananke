<?php

namespace Ananke\Components\Models;

use Ananke\Components\Objects\Game;

/**
 * Game Model
 * 
 * @author Allan Bachmann <info@ajaybachmann.ch>
 */
class GameModel {

    public function initGame($players, $cards) {

        // Init Game
        $game = new Game($players, $cards);
        $result = $game->play();

        // Return 
        return $result;
    }
}