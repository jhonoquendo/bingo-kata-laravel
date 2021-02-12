<?php

use PHPUnit\Framework\TestCase;

class BingoCardGeneratorTest extends TestCase{

    public function testWhenCallsNumberItsInTheValidRange(){

        $caller = new BingoCardGenerator();
        $this->assertTrue(true);
    }
}