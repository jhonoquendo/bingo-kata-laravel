<?php namespace Models;

class Card{

    private $grid;

    public function __construct($grid)
    {
        $this->grid = $grid;
    }

    public function isValid():bool{
        return $this->hasValidSize() && $this->respectBoundaries();
    }

    public function hasValidSize():bool{
        foreach($this->grid as $column){
            if(sizeof($column) !== 5){
                return false;
            }
            return true;
        }
    }

    public function respectBoundaries():bool{
        return $this->columnHasElementBetween($this->grid['B'],1,15)
        && $this->columnHasElementBetween($this->grid['I'],16,30)
        && $this->columnHasElementBetween($this->grid['N'],31,45)
        && $this->columnHasElementBetween($this->grid['G'],46,60)
        && $this->columnHasElementBetween($this->grid['O'],61,75);

        
    }

    public function columnHasElementBetween($column,$min,$max){
        foreach($column as $number){
            if($number< $min || $number > $max){
                return false;
            }
            return true;
        }
    }
}