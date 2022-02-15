<?php
print_r($argv);
echo "\n";

if (isset($argv[1]) && isset($argv[2]) && is_numeric($argv[1]) && is_numeric($argv[2])) {

    echo $argv[1]+$argv[2] . "\n";
} else {
    echo "Usage: $argv[0] num1 num2 \n";
}

