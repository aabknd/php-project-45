<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function runGame(string $task, array $result)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($task);

    foreach ($result as [$question, $correctAnswer]) {
        line('Question: %s', $question);
        $inputAnswer = prompt('Your answer ');
        if ($inputAnswer !== $correctAnswer) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $inputAnswer, $correctAnswer);
            line("Let's try again, %s!", $name);
        }
        line('Correct!');
    }

    line("Congratulations, %s!", $name);
}
