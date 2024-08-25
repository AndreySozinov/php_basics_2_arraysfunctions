<?php

echo transliteration("привет");

function transliteration(string $input) : string {
    $transarray = array(
        'а' => 'a',
        'б' => 'b',
        'в' => 'v',
        'г' => 'g',
        'д' => 'd',
        'е' => 'e',
        'ж' => 'zh',
        'з' => 'z',
        'и' => 'i',
        'й' => 'y',
        'к' => 'k',
        'л' => 'l',
        'м' => 'm',
        'н' => 'n',
        'о' => 'o',
        'п' => 'p',
        'р' => 'r',
        'с' => 's',
        'т' => 't',
        'у' => 'u',
        'ф' => 'f',
        'х' => 'kh',
        'ц' => 'ts',
        'ч' => 'ch',
        'ш' => 'sh',
        'щ' => 'sch',
        'ъ' => '`',
        'ы' => 'y',
        'ь' => '`',
        'э' => 'e',
        'ю' => 'yu',
        'я' => 'ya'
    );
    $result = "";
    
    // Используем mb_str_split для правильного разбиения строки
    $characters = mb_str_split($input);

    foreach ($characters as $char) {
        if (array_key_exists($char, $transarray)) {
            $result .= $transarray[$char];
        } else {
            $result .= $char;  // Добавляем символ как есть, если его нет в массиве транслитерации
        }
    }
    return $result;
}

// docker run --rm -v ${pwd}/php-cli/:/cli php:8.2-cli php /cli/task4_translit.php