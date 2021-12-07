<?php
include("../helpers/InputHelper.php");

$input = InputHelper::loadFile(__DIR__."/input.txt");

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
