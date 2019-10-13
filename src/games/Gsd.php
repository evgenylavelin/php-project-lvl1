<?php

namespace BrainGames\games\Gsd;

use function BrainGames\games\run as startGame;

class DefaultValue
{
    public const PROMPT_TEXT = 'Find the greatest common divisor of given numbers.';
}

function calcGsd($value1, $value2)
{
    if ($value2 == 0) {
        return $value1;
    }

    return calcGsd($value2, $value1 % $value2);
}

function run()
{
    $getGameDataFunction = function () {
        $value1 = rand(1, 100);
        $value2 = rand(1, 100);
        $result = [];
        $result[] = "{$value1} gsd {$value2}";
        $result[] = calcGsd($value1, $value2);
        return $result;
    };
    
    startGame(DefaultValue::PROMPT_TEXT, $getGameDataFunction);
}
