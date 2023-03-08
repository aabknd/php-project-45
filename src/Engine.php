<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function engineGame($task, $result) 
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($task);

    foreach ($result as [$question, $correctAnswer]) {
        line('Question: %s', $question); 
        $inputAnswer = prompt('Your answer ');
        if ($inputAnswer === $correctAnswer) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $inputAnswer, $correctAnswer);
            line("Let's try again, %s!", $name);
            return;
        }
    }

    line("Congratulations, %s!", $name);
}
