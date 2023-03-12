<?php

namespace BrainGames\Games\GCD;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\engineGame;

function findGcd(int $num1, int $num2)
{
    while ($num2 != 0) {
        $remainder = $num1 % $num2;
        $num1 = $num2;
        $num2 = $remainder;
    }
    return $num1;
}

function runGcdGame()
{
    $task = 'Find the greatest common divisor of given numbers.';
    $result = [];

    for ($i = 0; $i < 3; $i++) {
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        $question = "{$num1} {$num2}";
        $gcd = findGcd($num1, $num2);
        $correctAnswer = findGcd($num1, $num2);
        $result[] = [$question, (string)$correctAnswer];
    }
    engineGame($task, $result);
}
