<?php

declare(strict_types=1);


//$i = 0;
//while ($i < 10) {
//    echo $i . ' ';
//    $i++;
//}


$array = [1, 2, 3];

//$count = count($array);
//for ($index = 0; $index < $count; $index++) {
//    echo $array[$index] . ' ';
//}

foreach ($array as $key => $value) {
    echo $key . '->' . $value . ' ';
}
