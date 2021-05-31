<?php 

namespace Ananke\Components\Objects;

/**
 * Player
 */
class Player {

    public $name;
    public $deck;

    public function __construct(string $name, Deck $deck)
    {
        $this->name = $name;
        $this->deck = $deck;
    }

    /**
     * Get the value of deck
     */
    public function getDeck()
    {
        return $this->deck;
    }
}