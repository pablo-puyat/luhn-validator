<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use taprice\LuhnValidator;

if (LuhnValidator::isValid(79927398713) === "79927398713 is valid.") {
    echo "Test 1 passed.";
};
if (LuhnValidator::isValid(79927398710) === "79927398710 is not valid.") {
    echo "Test 2 passed";
}