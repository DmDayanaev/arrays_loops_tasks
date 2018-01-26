<?php
//6. Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а русские — в массив $ru.
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en = array();
$ru = array();
foreach ($arr as $k=>$v) {
	$en[] = $k;
	$ru[] = $v;
}
print_r ($en);
print_r ($ru);

