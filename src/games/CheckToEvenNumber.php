<?php

namespace BrainGames\games\CheckToEvenNumber;

use function BrainGames\games\run as startGame;

function isEven($number)
{
    return $number % 2 == 0;
}

function run()
{
    $getGameDataFunction = function () {
        $result[] = rand(1, 99);
        $result[] = (isEven($result[0]) ? 'yes' : 'no');
        
        return $result;
    };
    
    startGame('Answer "yes" if the number is even, otherwise answer "no".', $getGameDataFunction);
}
