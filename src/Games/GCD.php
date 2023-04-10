<?php

namespace BrainGames\Games\GCD;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\runEngine;

use const BrainGames\Engine\NUMBER_OF_ROUNDS;

const TASK = 'Find the greatest common divisor of given numbers.';

function findGcd(int $num1, int $num2)
{
    while ($num2 != 0) {
        $remainder = $num1 % $num2;
        $num1 = $num2;
        $num2 = $remainder;
    }
    return $num1;
}

function runGame()
{
    $result = [];

    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        $question = "{$num1} {$num2}";
        $gcd = findGcd($num1, $num2);
        $correctAnswer = findGcd($num1, $num2);
        $result[] = [$question, (string)$correctAnswer];
    }
    runEngine(TASK, $result);
}
