<?php
include("../helpers/InputHelper.php");

$input = InputHelper::loadFile(__DIR__."/input.txt");

$position = 0;
$depth = 0;

foreach ($input as $line) {
    list($command, $n) = explode(' ', $line);

    switch ($command) {
        case 'forward': $position += $n; break;
        case 'up': $depth -= $n; break;
        case 'down': $depth += $n; break;
    }
}

echo "Answer: ".($position * $depth).PHP_EOL;
