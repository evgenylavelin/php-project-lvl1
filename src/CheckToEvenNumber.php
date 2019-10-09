<?php

namespace BrainGames\CheckToEvenNumber;

use function cli\line;
use function cli\prompt;

function run()
{
    line('Welcome to Brain Games!');
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    $stepNumber = 1;
    while ($stepNumber < 4) {
        $value = rand(0, 99);
        line("Question: %s", $value);
        $answer = prompt('Your answer');
        $correctAnswer = ($value % 2 == 0 ? 'yes' : 'no');
        if ($answer == $correctAnswer) {
            line("Correct!");
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            line("Let's try again, %s!", $name);
            break;
        }
        $stepNumber++;
    }
    if ($stepNumber == 4) {
        line("Congratulations, %s!", $name);
    }
}
