<?php

var_dump(isBracketsCorrect("())("));

function isBracketsCorrect(string $brackets) : bool {
    $count = 0;
    foreach (str_split($brackets) as $char) {
        if ($char == '(') {
            $count++;
        } else if ($char == ')') {
            $count--;
        }
        if ($count < 0) {
            return false;
        }
    }
    if ($count > 0) {
        return false;
    }
    return true;
}

// docker run --rm -v ${pwd}/php-cli/tasks/:/cli php:8.2-cli php /cli/task3_correctbrackets.php