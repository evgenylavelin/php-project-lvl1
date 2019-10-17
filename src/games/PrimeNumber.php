<?php

namespace BrainGames\games\PrimeNumber;

use function BrainGames\games\run as startGame;

function isPrime($num)
{
    for ($ind = 2; $ind <= sqrt($num); $ind++) {
        if (!($num % $ind)) {
            return false;
        }
    }
    return true;
}

function run()
{
    $getGameDataFunction = function () {
        $value1 = rand(1, 100);
        $result = [];
        $result[] = $value1;
        $result[] = (isPrime($value1) ? 'yes' : 'no');
        
        return $result;
    };
    
    startGame('Answer "yes" if given number is prime. Otherwise answer "no"', $getGameDataFunction);
}
