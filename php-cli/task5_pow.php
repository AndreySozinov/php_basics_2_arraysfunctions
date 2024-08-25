<?php

echo powers(2, 3);

function powers(int $val, int $pow) : int {
    if ($pow == 0) {
        return 1;
    } else if ($pow == 1) {
        return $val;
    } else {
        return $val * powers($val, $pow-1);
    }
    
}

// docker run --rm -v ${pwd}/php-cli/:/cli php:8.2-cli php /cli/task5_pow.php