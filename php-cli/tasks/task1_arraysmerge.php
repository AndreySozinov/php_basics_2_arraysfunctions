<?php

$array1 = [1, 4, 6, 6, 8];
$array2 = [2, 5, 7, 9];
$array = array_merge($array1, $array2);

sort($array);

// $allcount = count($array1) + count($array2);

// for ($counter = 0; $counter < $allcount; $counter++) {
//     if ($array1[0] != null && $array2[0] != null && $array1[0] <= $array2[0]) {
//         array_push($array, array_shift($array1));
//     } else if ($array2[0] != null) {
//         array_push($array, array_shift($array2));
//     } else if ($array1[0] != null) {
//         array_push($array, array_shift($array1));
//     } 
// }



foreach ($array as $key) {
    echo $key;
}

// docker run --rm -v ${pwd}/php-cli/tasks/:/cli php:8.2-cli php /cli/task1_arraysmerge.php