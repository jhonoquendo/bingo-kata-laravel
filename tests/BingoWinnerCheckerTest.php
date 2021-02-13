<?php

use PHPUnit\Framework\TestCase;

class BingoWinnerCheckerTest extends TestCase{

    public function testCheckerDeterminesNotWinnerYet(){

        $caller = new BingoCaller();

        $generator = new BingoCardGenerator();
        $card = $generator->generate();

        for($i=1;$i<=20;$i++){
            $caller->callNumber();
        }

        $this->assertFalse(BingoWinnerChecker::isWinner($caller,$card)); 
    }

    public function testCheckerDeterminesWinnerCorrectly(){

        $caller = new BingoCaller();

        $generator = new BingoCardGenerator();
        $card = $generator->generate();

        for($i=1;$i<=75;$i++){
            $caller->callNumber();
        }

        $this->assertTrue(BingoWinnerChecker::isWinner($caller,$card)); 
    }
}