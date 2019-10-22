<?php

namespace BrainGames\games;

const LIMIT_COUNT_GAME = 3;

use function cli\line;
use function cli\prompt;

function run($promptText, $getgameData)
{

    line('Welcome to Brain Games!');
    line('%s', $promptText);
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    for ($stepNumber = 1; $stepNumber <= LIMIT_COUNT_GAME; $stepNumber++) {
        [$textQuestion, $correctAnswer] = $getgameData();
        line("Question: %s", $textQuestion);
        $answer = prompt('Your answer');
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
