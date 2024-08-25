<?php

$cityarray = array(
    'Московская' => array('Москва', 'Зеленоград', 'Клин'),
    'Ленинградская' => array('Санкт-Петербург', 'Всеволжск', 'Павловск', 'Кронштадт'),
    'Курганская' => array('Курган', 'Шадринск', 'Куртамыш'),
    'Чедяюинская' => array('Чедябинск', 'Миасс', 'Златоуст')
);

foreach ($cityarray as $region => $city) {
    echo $region." область: ";
    echo implode(", ", $city);
    echo "\r\n";
}

// docker run --rm -v ${pwd}/php-cli/:/cli php:8.2-cli php /cli/task3_cityarray.php