<?php

function mathOperation(int $arg1, int $arg2, string $operation) {
    switch($operation) {
        case("+"):
            return add($arg1, $arg2);
        case("-"):
            return subtract($arg1, $arg2);
        case("*"):
            return multiply($arg1, $arg2);
        case("/"):
            return divide($arg1, $arg2);
    }
}

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

// docker run --rm -v ${pwd}/php-cli/:/cli php:8.2-cli php /cli/task2_mathoperation.php