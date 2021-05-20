<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use taprice\LuhnValidator;

function doTest($number, $success): bool
{
    return LuhnValidator::isValid($number) === $success;
}

// Test 1 should return true
$result = doTest(79927398710, true) ? 'pass' : 'fail';
echo "Test 1 result: {$result}\n";

// Test 2 should return false
$result = doTest(79927398713, false) ? 'pass' : 'fail';
echo "Test 2 result: {$result}\n";

