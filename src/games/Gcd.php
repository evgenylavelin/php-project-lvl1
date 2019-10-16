<?php

namespace BrainGames\games\Gcd;

use function BrainGames\games\run as startGame;

function calcGcd($value1, $value2)
{
    if ($value2 == 0) {
        return $value1;
    }

    return calcGcd($value2, $value1 % $value2);
}

function run()
{
    $getGameDataFunction = function () {
        $value1 = rand(1, 100);
        $value2 = rand(1, 100);
        $result = [];
        $result[] = "{$value1} gcd {$value2}";
        $result[] = calcGcd($value1, $value2);
        return $result;
    };
    
    startGame('Find the greatest common divisor of given numbers.', $getGameDataFunction);
}
