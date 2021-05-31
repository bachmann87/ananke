<?php 

namespace Ananke\Components\Objects;

class Deck {

    public $cards = [];

    public function __construct($max)
    {
        // Init
        $this->init($max);
    }

    private function init($max) {
        for ($i=0; $i < $max; $i++) { 

            // Create Card
            $card = new Card();
            
            // Assign to Deck
            array_push($this->cards, $card);
        }
    }

    /**
     * Get the value of cards
     */
    public function getCards()
    {
        return $this->cards;
    }

    /**
     * Set the value of cards
     */
    public function setCards($cards): self
    {
        $this->cards = $cards;

        return $this;
    }
}