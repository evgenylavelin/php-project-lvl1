<?php

namespace BrainGames\games;

class DefaultValue
{
    public const LIMIT_COUNT_GAME = 3;
}

use function cli\line;
use function cli\prompt;

function run($promptText, $gameData)
{

    line('Welcome to Brain Games!');
    line('%s', $promptText);
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    for ($stepNumber = 1; $stepNumber <= DefaultValue::LIMIT_COUNT_GAME; $stepNumber++) {
        $value = $gameData();
        line("Question: %s", $value[0]);
        $answer = prompt('Your answer');
        $correctAnswer = $value[1];
        if ($answer == $correctAnswer) {
            line("Correct!");
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            line("Let's try again, %s!", $name);
            exit;
        }
    }
    line("Congratulations, %s!", $name);
}
