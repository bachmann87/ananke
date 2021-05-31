<?php 

namespace Ananke\Components\Objects;

/**
 * Gameboard
 */
class Game {

    protected $maxPlayers;
    protected $maxCards;
    public $players = [];
    protected $gameRunning = true;

    public function __construct($maxPlayers, $maxCards)
    {   
        // Assign Props
        $this->maxPlayers = $maxPlayers;
        $this->maxCards = $maxCards;

        // Init
        $this->init();

    }

    /**
     * Init 
     */
    private function init() {
        for ($i = 0; $i < $this->maxPlayers; $i++) { 
            
            // Generate Name
            $name = $i + 1;

            // Init Player
            $player = new Player("Player $name", new Deck($this->maxCards));

            // Add to Stack
            array_push($this->players, $player);
        }
    }

    /**
     * Automatic Play Mode
     */
    public function play() {

        // Init Result
        $result = array("players"=>$this->players);
        $dice = new Dice();

        // Play
        while ($this->gameRunning) {
            
            // Roll the dice
            $currentColor = $dice->roll();

            // Iterate Players
            foreach($this->players as $player) {

                // Get Deck
                $deck = $player->getDeck();

                // Get Cards
                $cards = $deck->getCards();

                // Iterate Cards
                foreach ($cards as $card) {
                    if($currentColor == $card->getColor()) {
                        $this->gameRunning = false;
                    }
                }
            }

        }
        
        // Return
        return $result;
    }

}