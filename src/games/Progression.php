<?php

namespace BrainGames\games\Progression;

use function BrainGames\games\run as startGame;

class DefaultValue
{
    public const PROMPT_TEXT = 'What number is missing in the progression?';
    public const LENGTH_PROGRESSION = 10;
}

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
    $getGameDataFunction = function () {
        
        $secretPosition = rand(0, DefaultValue::LENGTH_PROGRESSION - 1);
        $startProgression = rand(1, 90);
        $stepProgression = rand(1, 10);
        $lengthProgression = 10;
        $Progression = getProgresion($startProgression, $stepProgression, DefaultValue::LENGTH_PROGRESSION);
        $secretNumber = $Progression[$secretPosition];
        $Progression[$secretPosition] = "**";
        $result = [];
        $result[] = implode(",", $Progression);
        $result[] = $secretNumber;

        return $result;
    };
    
    startGame(DefaultValue::PROMPT_TEXT, $getGameDataFunction);
}
