<?php

namespace BrainGames\Games\Even;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\engineGame;

function runEvenGame()
{
    $task = 'Answer "yes" if the number is even, otherwise answer "no".';
    $result = [];

    for ($i = 0; $i < 3; $i++) {
        $num = rand(0, 100);
        $correctAnswer = $num % 2 == 0 ? 'yes' : 'no';
        $result[] = [$num, $correctAnswer];
    }

    engineGame($task, $result);
}
