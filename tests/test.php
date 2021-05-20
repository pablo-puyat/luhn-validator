<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use taprice\LuhnValidator;

function doTest($number, $success): bool
{
    return LuhnValidator::isValid($number) === $success;
}

// Test 1 should return true
$result = doTest(79927398713, true) ? 'pass' : 'fail';
echo "Test 1 result: {$result}\n";

// Test 2 should return false
$result = doTest(79927398710, false) ? 'pass' : 'fail';
echo "Test 2 result: {$result}\n";

// Test handling invalid input - a string with numbers should be valid as most input from forms will be strings
$result = doTest('79927398713', true) ? 'pass' : 'fail';
echo "Test 3 result: {$result}\n";

// Test handling invalid input - any non numeric characters result in an exception being thrown
try {
    LuhnValidator::isValid('abc123def');
    echo "Test 4 result: fail\n";
} catch (Exception $e) {
    if ($e->getMessage() === "Invalid input provided") {
        echo "Test 4 result: pass\n";
    }
}

// Test handling invalid input - numeric strings that are floats or are not integers should throw execption
try {
    LuhnValidator::isValid('79927398713.53');
    echo "Test 5 result: failed\n";
} catch (Exception $e) {
    if ($e->getMessage() === "Invalid input provided") {
        echo "Test 5 result: pass\n";
    }
}