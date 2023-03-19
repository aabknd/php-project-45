<?php

namespace BrainGames\Games\Prime;

use function cli\line;
use function cli\prompt;
use function BrainGames\Engine\runGame;

function isPrime(int $num)
{
    if ($num <= 1) {
        return false;
    }
    
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }

    return true;
}

function runPrimeGame()
{
    $task = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $result = [];
    $numberRounds = 3;

    for ($i = 0; $i < $numberRounds; $i++) {
        $num = rand(2, 100);
        $correctAnswer = isPrime($num) ? 'yes' : 'no';
        $result[] = [$num, $correctAnswer];
    }

    runGame($task, $result);
}
