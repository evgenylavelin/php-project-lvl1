<?php

namespace BrainGames\games\Prime;

use function BrainGames\games\run as startGame;

const PROMPT_TEXT = 'Answer "yes" if given number is prime. Otherwise answer "no"';

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
    $getGameData = function () {

        $value1 = rand(1, 100);
        
        $question = $value1;
        $answer = (isPrime($value1) ? 'yes' : 'no');
        
        return [$question, $answer];
    };
    
    startGame(PROMPT_TEXT, $getGameData);
}