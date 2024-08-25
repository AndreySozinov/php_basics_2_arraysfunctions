<?php

var_dump(isNumberSimple(5));

function isNumberSimple(int $number) : bool {
    if ($number > 2) {
        for ($count = 2; $count < $number; $count++) {
            if ($number % $count == 0) {
                return false;
            }
        }
    }
    return true;
}



// docker run --rm -v ${pwd}/php-cli/tasks/:/cli php:8.2-cli php /cli/task2_simplenumber.php