<?php

namespace BrainGames\games\Progression;

use function BrainGames\games\run as startGame;

const LENGTH_PROGRESSION = 10;
const MAX_STEP_PROGRESSION = 10;
const MAX_START_PROGRESSION = 90;

const PROMPT_TEXT = 'What number is missing in the progression?';

function getProgresion($startProgression, $step, $length)
{
    $result = [];
    for ($ind = 0; $ind < $length; $ind++) {
        $result[] = $startProgression + $ind * $step;
    }
    return $result;
}

function run()
{
    $getGameData = function () {

        $startProgression = rand(1, MAX_START_PROGRESSION);
        $stepProgression = rand(1, MAX_STEP_PROGRESSION);
        $secretElementPosition = rand(0, LENGTH_PROGRESSION - 1);

        $progression = getProgresion($startProgression, $stepProgression, LENGTH_PROGRESSION);

        $answer = $progression[$secretElementPosition];

        $progression[$secretElementPosition] = "**";
        $question = implode(",", $progression);

        return [$question, $answer];
    };
    
    startGame(PROMPT_TEXT, $getGameData);
}
