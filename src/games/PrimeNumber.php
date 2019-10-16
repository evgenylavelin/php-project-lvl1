<?php

namespace BrainGames\games\PrimeNumber;

use function BrainGames\games\run as startGame;

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
        
        return $result;
    };
    
    startGame('Answer "yes" if given number is prime. Otherwise answer "no"', $getGameDataFunction);
}
