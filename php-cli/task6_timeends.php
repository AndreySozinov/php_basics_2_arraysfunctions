<?php

echo getCurrentTimeWithWithEnds();

function getCurrentTimeWithWithEnds() {
    $hours = date('G'); // Часы без ведущего нуля (от 0 до 23)
    $minutes = date('i'); // Минуты с ведущим нулем (от 00 до 59)
    
    // Функция для получения правильного склонения
    function getEnds($number, $singular, $genitiveSingular, $genitivePlural) {
        $number = (int)$number;
        if ($number % 10 == 1 && $number % 100 != 11) {
            return $singular; // 1 час, 21 час и т.д.
        } elseif ($number % 10 >= 2 && $number % 10 <= 4 && ($number % 100 < 10 || $number % 100 >= 20)) {
            return $genitiveSingular; // 2 часа, 23 часа и т.д.
        } else {
            return $genitivePlural; // 5 часов, 11 часов и т.д.
        }
    }

    $hoursWord = getEnds($hours, 'час', 'часа', 'часов');
    $minutesWord = getEnds($minutes, 'минута', 'минуты', 'минут');

    return "$hours $hoursWord $minutes $minutesWord";
}

// docker run --rm -v ${pwd}/php-cli/:/cli php:8.2-cli php /cli/task6_timeends.php