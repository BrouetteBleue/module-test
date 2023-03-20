<?php

class Hippopotamus {

    private $name;
    private $weight;
    private $tusksSize;

    public function __construct($name, $weight, $tusksSize) {
        $this->name = $name;
        $this->weight = $weight;
        $this->tusksSize = $tusksSize;
    }

    public function getName() {
        return $this->name;
    }

    public function getWeight() {
        return $this->weight;
    }

    public function getTusksSize() {
        return $this->tusksSize;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setWeight($weight) {
        $this->weight = $weight;
    }

    public function setTusksSize($tusksSize) {
        $this->tusksSize = $tusksSize;
    }

    public function swim() {
        // discrease the hippopotamus weight by 300g
        $this->weight -= 0.3;
    }

    public function eat() {
        // increase the hippopotamus weight by 500g
        $this->weight += 1;
    }
    
    public function fight(Hippopotamus $opponent) {
        // the winner is the one with the biggest tusks
        if ($this->tusksSize > $opponent->getTusksSize()) {
            return $this;
        } else {
            return $opponent;
        }
    }

    // ToString method
    public function __toString() {
        return "L'Hippopotamus: " . $this->name . " pèse " . $this->weight . "kg et ses défenses mesurent " . $this->tusksSize . "cm";
    }

}