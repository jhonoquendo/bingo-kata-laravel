<?php

use PHPUnit\Framework\TestCase;

class BingoCardGeneratorTest extends TestCase{

    public function testCardContainsNumersAccordingToColumn(){

        $generator = new BingoCardGenerator();
        $card = $generator->generate();
        $this->assertTrue($card->isValid());
    }

    public function testCardHasFreeSpaceInTheMiddle(){
        /*$generator = new BingoCardGenerator();
        $card = $generator->generate();
        $this->assertTrue($card->hasFreeSpaceInTheMiddle());*/

        $generator = new BingoCardGenerator();
        $card = $generator->generate();
        $this->assertTrue($card->hasFreeSpaceInTheMiddle());

    }
}