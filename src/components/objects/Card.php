<?php 

namespace Ananke\Components\Objects;

class Card {

    public $color;
    protected $validColors = [
        "red", 
        "green", 
        "blue",
        "white",
        "yellow",
        "purple"
    ];

    public function __construct()
    {
        $this->init();
    }

    private function init() {
        
        // Choose random color
        $color = $this->validColors[rand(0, 5)];

        // Set Color
        $this->setColor($color);
        
    }

    /**
     * Get the value of color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     */
    public function setColor($color): self
    {
        $this->color = $color;

        return $this;
    }
}