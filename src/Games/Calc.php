<?php

namespace BrainGames\Games\Calc;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\engineGame;

function runCalcGame()
{
    $task = 'What is the result of the expression?';
    $result = [];

    for ($i = 0; $i < 3; $i++) {
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        $sign = ["+", "-", "*"][rand(0, 2)];
        $question = "$num1 $sign $num2";
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
        }
        $result[] = [$question, (string)$correctAnswer];
    }

    engineGame($task, $result);
}
