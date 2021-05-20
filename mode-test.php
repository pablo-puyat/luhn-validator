<?php

require_once __DIR__ . '/vendor/autoload.php'; // Autoload files using Composer autoload

use taprice\LuhnValidator;

$numberToCheck = $argv[1];

try {
    $result = LuhnValidator::isValid($numberToCheck);
    echo "${numberToCheck} is ".($result ? '' : 'not ')."valid.\n";

} catch (Exception $e) {
    echo "An error occured\n\nMessage: {$e->getMessage()}\n\n";
}