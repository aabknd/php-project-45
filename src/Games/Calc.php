<?php

namespace BrainGames\Games\Calc;

use Exception;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\runGame;

use const BrainGames\Engine\NUMBER_OF_ROUNDS;

const TASK = 'What is the result of the expression?';

function calculate(int $num1, int $num2, string $sign)
{
    switch ($sign) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        default:
            throw new Exception("Invalid sign: $sign");
    }
}

function runCalcGame()
{
    $result = [];

    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        $sign = ["+", "-", "*"][rand(0, 2)];
        $question = "$num1 $sign $num2";
        $correctAnswer = calculate($num1, $num2, $sign);
        $result[] = [$question, (string)$correctAnswer];
    }

    runGame(TASK, $result);
}
