<?php

namespace BrainGames\games\Calc;

use function BrainGames\games\run as startGame;

class DefaultValue
{
    public const PROMPT_TEXT = 'What is the result of the expression?';
}

function run()
{
    $getGameDataFunction = function () {
        $value1 = rand(1, 10);
        $value2 = rand(1, 10);
        $operations = ['*','+','-'];
        $operation = $operations[array_rand($operations)];
        $result = [];
        switch ($operation) {
            case '*':
                $result[] = "{$value1} * {$value2}";
                $result[] = $value1 * $value2;
                break;
            case '+':
                $result[] = "{$value1} + {$value2}";
                $result[] = $value1 + $value2;
                break;
            case '-':
                $result[] = "{$value1} - {$value2}";
                $result[] = $value1 - $value2;
                break;
        }
        return $result;
    };
    
    startGame(DefaultValue::PROMPT_TEXT, $getGameDataFunction);
}
