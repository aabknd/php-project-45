<?php

namespace BrainGames\Games\Progression;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\runEngine;

use const BrainGames\Engine\NUMBER_OF_ROUNDS;

const TASK = 'What number is missing in the progression?';

function getProgression()
{
    $len = rand(5, 10);
    $startNum = rand(1, 100);
    $step = rand(2, 5);
    $progression = [];
    for ($i = 0; $i < $len; $i++) {
        $progression[] = $startNum + $step * $i;
    }
    return $progression;
}

function runGame()
{
    $result = [];

    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        $progression = getProgression();
        $positionOfProgression = rand(0, count($progression) - 1);
        $correctAnswer = $progression[$positionOfProgression];
        $progression[$positionOfProgression] = "..";
        $question = implode(' ', $progression);
        $result[] = [$question, (string)$correctAnswer];
    }

    runEngine(TASK, $result);
}
