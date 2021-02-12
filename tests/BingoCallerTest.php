<?php

use PHPUnit\Framework\TestCase;
use src\BingoCaller;

class BingoCallerTest extends TestCase{

    public function testWhenCallsNumberItsInTheValidRange(){

        $caller = new BingoCaller();
        $number = $caller->callNumber();

        $this->assertTrue( $number >= 1 && $number <= 75);
    }

    public function testWhenCalls75TimesAllNumbersArePresents(){
        $caller = new BingoCaller();
        $calledNumbers = [];
        $expextedNumbers = range(1,75);

        for($i=1; $i<=75;$i++){
            $calledNumbers[] = $caller->callNumber();
        }

        $this->assertEquals($expextedNumbers,$calledNumbers);
    }
}