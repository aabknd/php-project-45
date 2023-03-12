<?php

namespace BrainGames\Games\Prime;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\engineGame;

function isPrime(int $num)
{
    if ($num < 2) {
        return false;
    }

    for ($i = 2; $i < sqrt($num); $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }

    return true;
}

function runPrimeGame()
{
    $task = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $result = [];

    for ($i = 0; $i < 3; $i++) {
        $num = rand(0, 100);
        $correctAnswer = isPrime($num) ? 'yes' : 'no';
        $result[] = [$num, $correctAnswer];
    }

    engineGame($task, $result);
}
