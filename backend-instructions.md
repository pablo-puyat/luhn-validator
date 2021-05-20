# Luhn Checksum Exercise

## Overview

Create a PHP program that outputs the validity of a number by applying the [Luhn Checksum](http://en.wikipedia.org/wiki/Luhn_algorithm).

**Input:**

The program should accept a single number to validate.
 
**Output:**

The program should output the input along with the validity of the number.
 
**Examples:**

Given an input of `79927398713`, the output should be:

```
79927398713 is valid.
```
 
Given an input of `79927398710`, the output should be:

```
79927398710 is not valid.
```

## Guidelines
1. There are many solutions and code snippets online implementing the Luhn Checksum. Please resist using those. We want to see your coding style and approach to problem solving.
1. Please treat this as you would any other task you'd encounter during your daily work. This will show us how you currently code and not how you coded 6, 12, or 18 months ago.
    1. Your code must be suitably tested (see "[Notes on Testing](#notes-on-testing)" below).
    1. Your code must gracefully handle invalid input and errors.
    1. Your code must be clearly commented.
1. Please do not feel that you need to spend a great deal of time working on a solution. Hopefully completing this exercise won't take more than an hour or two.
1. That being said, please do NOT rush. **Quality work is more important than speed**. Feel free to work on this exercise over the period of one to three days in order to ensure that your code checks all of the boxes in the "[Pre-Submission Checklist](#pre-submission-checklist)" below.

## Notes on Testing
Please note: Submissions without tests will **NOT** be reviewed.

- Include a few automated tests with your work as well as instructions on how to run them (a simple README is fine).
- The form that these tests take is up to you:
    - We recommend a simple PHP script that loads and then compares the output of your code to known good/bad values.
    - Or, feel free to use [PHPUnit](https://phpunit.de) or something similar.
- In the end, use whatever approach you think will get you a few automated tests to include with your code as quickly and painlessly as possible.

## Pre-Submission Checklist
- [ ] Review code quality:
    - [ ] Spelling
    - [ ] Formatting (indentation, spacing, etc.; refer to the [PSR12: Extended Coding Style](https://www.php-fig.org/psr/psr-12/))
    - [ ] Comments
    - [ ] Error handling
    - [ ] Invalid input handling
- [ ] Implement tests and ensure your code passes all of them
- [ ] Include a README explaining how to run/use your solution and any tests

## Credits

Adapted from: https://gist.github.com/tomharris/bc9a942bcd25e029e746