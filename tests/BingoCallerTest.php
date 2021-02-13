<?php

use PHPUnit\Framework\TestCase;

class BingoCallerTest extends TestCase{

    public function testWhenCallsNumberItsInTheValidRange(){

        $caller = new BingoCaller();
        $number = $caller->callNumber();

        $this->assertTrue( $number >= BingoRules::MIN_CARD_NUMBER && $number <= BingoRules::MAX_CARD_NUMBER);
    }

    public function testWhenCalls75TimesAllNumbersArePresents(){
        $caller = new BingoCaller();
        $calledNumbers = [];
        $expextedNumbers = range(BingoRules::MIN_CARD_NUMBER,BingoRules::MAX_CARD_NUMBER);

        for($i=1; $i<=75;$i++){
            $calledNumbers[] = $caller->callNumber();
        }

        sort($calledNumbers);
        $this->assertEquals($expextedNumbers,$calledNumbers);
    }
}