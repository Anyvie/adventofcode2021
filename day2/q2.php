<?php
include("../helpers/InputHelper.php");

$input = InputHelper::loadFile(__DIR__."/input.txt");

$position = 0;
$depth = 0;
$aim = 0;

foreach ($input as $line) {
    list($command, $n) = explode(' ', $line);

    switch ($command) {
        case 'forward': 
            $position += $n;
            $depth += ($aim*$n);
        break;
        case 'up':
            $aim -= $n;
        break;
        case 'down':
            $aim += $n;
        break;
    }
}

echo "Answer: ".($position * $depth).PHP_EOL;
