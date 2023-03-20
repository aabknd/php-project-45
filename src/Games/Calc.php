<?php

namespace BrainGames\Games\Calc;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\runGame;

function calculate(int $num1, int $num2, string $sign)
{
    switch ($sign) {
        case '+':
            $correctAnswer = $num1 + $num2;
            break;
        case '-':
            $correctAnswer = $num1 - $num2;
            break;
        case '*':
            $correctAnswer = $num1 * $num2;
            break;
        default:
            return null;
    }
    return $correctAnswer;
}

function runCalcGame()
{
    $task = 'What is the result of the expression?';
    $result = [];
    $numberRounds = 3;

    for ($i = 0; $i < $numberRounds; $i++) {
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        $sign = ["+", "-", "*"][rand(0, 2)];
        $question = "$num1 $sign $num2";
        $correctAnswer = calculate($num1, $num2, $sign);
        $result[] = [$question, (string)$correctAnswer];
    }

    runGame($task, $result);
}
