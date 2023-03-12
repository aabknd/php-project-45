<?php

namespace BrainGames\Games\Progression;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\engineGame;

function getProgression()
{
    $lenOfProgression = rand(5, 10);
    //
    $startNumOfProgression = rand(1, 100);
    $stepOfProgression = rand(2, 5);
    $progressionArr = [];
    for ($i = 0; $i < $lenOfProgression; $i++) {
        $progressionArr[] = $startNumOfProgression;
        $startNumOfProgression += $stepOfProgression;
    }
    return $progressionArr;
}

function runProgressionGame()
{
    $task = 'What number is missing in the progression?';
    $result = [];

    for ($i = 0; $i < 3; $i++) {
        $progression = getProgression();
        $positionOfProgression = rand(0, count($progression) - 1);
        $correctAnswer = $progression[$positionOfProgression];
        $progression[$positionOfProgression] = "..";
        $question = implode(' ', $progression);
        $result[] = [$question, (string)$correctAnswer];
    }

    engineGame($task, $result);
}
