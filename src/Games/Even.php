<?php

namespace BrainGames\Games\Even;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\runEngine

use const BrainGames\Engine\NUMBER_OF_ROUNDS;

const TASK = 'Answer "yes" if the number is even, otherwise answer "no".';

function runGame()
{
    $result = [];

    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        $num = rand(0, 100);
        $correctAnswer = $num % 2 == 0 ? 'yes' : 'no';
        $result[] = [$num, $correctAnswer];
    }

    runEngine(TASK, $result);
}
