<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;

function runEvenGame()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($i = 0; $i < 3; $i++) {
        $questionNum = rand(1, 100);
        line('Question: %d', $questionNum); 
        $inputAnswer = prompt('Your answer ');
        $correction = $questionNum % 2 == 0 ? 'yes' : 'no';
        if ($inputAnswer === $correction) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $inputAnswer, $correction);
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}