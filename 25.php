<?php
//25. Ваше задание создать массив, наполнить это случайными значениями (функция rand), найти максимальное и минимальное значение и поменять их местами.
$arr = [];
for ($i=0; $i<6; $i++) {
    $arr[] = rand();
}
print_r ($arr);
$min = min($arr);
$max = max($arr);
foreach ($arr as $k=>$v) {
	if ($v == $min) $arr[$k] = $max;
	if ($v == $max) $arr[$k] = $min;
}
print_r ($arr);
