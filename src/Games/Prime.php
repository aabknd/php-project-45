<?php

namespace BrainGames\Games\Prime;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\runGame;
use const BrainGames\Engine\NUMBER_OF_ROUNDS;

const TASK = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime(int $num)
{
    if ($num <= 1) {
        return false;
    }

    for ($i = 2; $i <= $num/2; $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }

    return true;
}

function runPrimeGame()
{
    $result = [];

    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        $num = rand(2, 100);
        $correctAnswer = isPrime($num) ? 'yes' : 'no';
        $result[] = [$num, $correctAnswer];
    }

    runGame(TASK, $result);
}
