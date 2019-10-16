<?php

namespace BrainGames\games\CheckToEvenNumber;

use function BrainGames\games\run as startGame;

function run()
{
    $getGameDataFunction = function () {
        $result[] = rand(1, 99);
        $result[] = ($result[0] % 2 == 0 ? 'yes' : 'no');
        
        return $result;
    };
    
    startGame('Answer "yes" if the number is even, otherwise answer "no".', $getGameDataFunction);
}
