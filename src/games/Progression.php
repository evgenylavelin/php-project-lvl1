<?php

namespace BrainGames\games\Progression;

use function BrainGames\games\run as startGame;

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
        $lengthProgression = 10;
        $startProgression = rand(1, 90);
        $stepProgression = rand(1, 10);
        $secretPosition = rand(0, $lengthProgression - 1);
        $Progression = getProgresion($startProgression, $stepProgression, $lengthProgression);
        $secretNumber = $Progression[$secretPosition];
        $Progression[$secretPosition] = "**";
        $result = [];
        $result[] = implode(",", $Progression);
        $result[] = $secretNumber;

        return $result;
    };
    
    startGame('What number is missing in the progression?', $getGameDataFunction);
}
