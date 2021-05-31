<?php 

namespace Ananke\Components\Objects;

/**
 * Player
 */
class Player {

    public $name;
    public $deck;
    public $cardLayed = false;

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

    /**
     * Get the value of cardLayed
     */
    public function getCardLayed()
    {
        return $this->cardLayed;
    }

    /**
     * Set the value of cardLayed
     */
    public function setCardLayed($cardLayed): self
    {
        $this->cardLayed = $cardLayed;

        return $this;
    }
}