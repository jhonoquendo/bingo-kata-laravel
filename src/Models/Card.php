<?php namespace Models;

class Card{

    private $grid;

    public function __construct($grid)
    {
        $this->grid = $grid;
    }

    public function isValid():bool{
        return false;
    }
}