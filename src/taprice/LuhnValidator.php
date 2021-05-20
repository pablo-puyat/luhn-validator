<?php

namespace taprice;

class LuhnValidator
{
    public static function isValid($number): bool
    {
        // convert the number to an array because we will be dealing with each digit as a separate piece
        $numberToCheck = str_split($number);

        // separate the check digit and the main number. the check digit is the rightmost digit
        $checkDigit = array_pop($numberToCheck);

        // begin validation
        // step 1: double the value of every other digit, excluding the check digit, starting from the right
        // step 2: sum all the digits
        // this next block of code will do both actions
        $sum = 0;
        $reversedNumberToCheck = array_reverse($numberToCheck);
        for ($i = 0; $i < count($reversedNumberToCheck); $i++) {
            $valueToSum = $reversedNumberToCheck[$i];
            // if $i is 0 or even it needs to be doubled
            if ($i === 0 || $i % 2 === 0) {
                $valueToSum = $valueToSum * 2;
                $valueToSum = $valueToSum > 9 ? $valueToSum - 9 : $valueToSum;
            }
            $sum = $sum + $valueToSum;
        }

        // step 3: ($sum * 9) % 10 should equal $checkDigit
        return $sum * 9 % 10 === (int)$checkDigit;
    }


    private function validateInput($input): bool
    {
    }
}