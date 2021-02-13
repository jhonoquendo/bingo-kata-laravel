<?php

use Models\Card;

class BingoWinnerChecker{
    public static function isWinner(BingoCaller $caller,Card $card){
        $cardNumbers = $card->getNumbersInCard();

        foreach($cardNumbers as $cardNumber){

            if(is_null($cardNumber)){
                continue;
            }

            if(!$caller->hasCalledNumber($cardNumber)){
                return false;
            }
        }
        return true;
    }
}
