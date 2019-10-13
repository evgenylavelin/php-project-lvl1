<?php

namespace BrainGames\games\CheckToEvenNumber;

use function BrainGames\games\run as startGame;

class DefaultValue
{
    public const PROMPT_TEXT = 'Answer "yes" if the number is even, otherwise answer "no".';
}

function run()
{
    $getGameDataFunction = function () {
        $result[] = rand(1, 99);
        $result[] = ($result[0] % 2 == 0 ? 'yes' : 'no');
        
        return $result;
    };
    
    startGame(DefaultValue::PROMPT_TEXT, $getGameDataFunction);
}
