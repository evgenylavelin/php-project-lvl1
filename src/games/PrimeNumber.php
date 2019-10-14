<?php

namespace BrainGames\games\PrimeNumber;

use function BrainGames\games\run as startGame;

class DefaultValue
{
    public const PROMPT_TEXT = 'Answer "yes" if given number is prime. Otherwise answer "no"';
}

function checkPrime($num)
{
    for ($ind = 2; $ind <= sqrt($num); $ind++) {
        if (!($num % $ind)) {
            return 'no';
        }
    }
    return 'yes';
}

function run()
{
    $getGameDataFunction = function () {
        $value1 = rand(1, 100);
        $result = [];
        $result[] = $value1;
        $result[] = checkPrime($value1);
        
        print_r($result);
        return $result;
    };
    
    startGame(DefaultValue::PROMPT_TEXT, $getGameDataFunction);
}
