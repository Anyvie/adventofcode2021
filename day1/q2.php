<?php
include("../helpers/InputHelper.php");

$input = InputHelper::loadFile(__DIR__."/input.txt");

$input2 = [];
$max = count($input);
foreach ($input as $i => $line) {
    if (($i+2) < $max) {
        $input2[] = $line + $input[($i+1)] + $input[($i+2)];
    }
}

$input = $input2;

$memory = null;
$nbIncreases = 0;

foreach ($input as $line) {
    if (is_null($memory)) {
        $memory = $line;
        continue;
    }

    if ($line > $memory) {
        $nbIncreases++;
    }

    $memory = $line;
}

echo "Answer: ".$nbIncreases.PHP_EOL;
