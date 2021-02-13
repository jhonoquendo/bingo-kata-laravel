<?php

use PHPUnit\Framework\TestCase;

class BingoCardGeneratorTest extends TestCase{

    public function testLosLimitesCorrespodientesACadaColumna(){

        $generator = new BingoCardGenerator();
        $card = $generator->generate();
        $this->assertTrue($card->isValid());
    }

    public function testQueLaCartaTengaUnEspacioEnMedio(){
        $generator = new BingoCardGenerator();
        $card = $generator->generate();
        $this->assertTrue($card->hasFreeSpaceInTheMiddle());
    }
}