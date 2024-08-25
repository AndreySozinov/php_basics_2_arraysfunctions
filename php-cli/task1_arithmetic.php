<?php

function add(int $a, int $b) : int {
    return $a + $b;
}

function subtract(int $a, int $b) : int {
    return $a - $b;
}

function multiply(int $a, int $b) : int {
    return $a * $b;
}

function divide(int $a, int $b) : float {
    return $a / $b;
}

// docker run --rm -v ${pwd}/php-cli/:/cli php:8.2-cli php /cli/task1_arithmetic.php