<?php 

namespace Ananke\Components\Objects;

class Dice {

    public $validColors = [
        "red", 
        "green", 
        "blue",
        "white",
        "yellow",
        "purple"
    ];
    
    public function roll() {
        return $this->validColors[rand(0, 5)];
    }
}