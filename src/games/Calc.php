<?php

namespace BrainGames\games\Calc;

use function BrainGames\games\run as startGame;

function run()
{
    $getGameDataFunction = function () {
        $value1 = rand(1, 10);
        $value2 = rand(1, 10);
        $operations = ['*','+','-'];
        $operation = $operations[array_rand($operations)];
        $result = [];
        $result[] = "{$value1} {$operation} {$value2}";
        switch ($operation) {
            case '*':
                $result[] = $value1 * $value2;
                break;
            case '+':
                $result[] = $value1 + $value2;
                break;
            case '-':
                $result[] = $value1 - $value2;
                break;
        }
        return $result;
    };
    
    startGame('What is the result of the expression?', $getGameDataFunction);
}
