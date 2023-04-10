<?php

namespace BrainGames\Games\Prime;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\runEngine;

use const BrainGames\Engine\NUMBER_OF_ROUNDS;

const TASK = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime(int $num)
{
    if ($num < 2) {
        return false;
    }
    if ($num == 2 || $num == 3) {
        return true;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

function runGame()
{
    $result = [];

    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        $num = rand(2, 100);
        $correctAnswer = isPrime($num) ? 'yes' : 'no';
        $result[] = [$num, $correctAnswer];
    }

    runEngine(TASK, $result);
}
