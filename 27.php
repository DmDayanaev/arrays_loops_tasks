<?php
//27. Создать генератор случайных таблиц. Есть переменные: $row - кол-во строк в таблице, $cols - кол-во столбцов в таблице. Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green'). Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols, в которой все ячейки будут иметь цвета, выбранные случайным образом из массива $colors. В каждой ячейке должно находиться случайное число.

$rows = rand(2, 12);
$cols = rand(2, 12);
$colors = array('red','yellow','blue','gray','maroon','brown','green');
$table = '<table border="1">';

for ($tr=1; $tr<=$rows; $tr++){
    $table .= '<tr>';
    for ($td=1; $td<=$cols; $td++){
        $this_color = $colors[rand(0, 6)];
        $table .= "<td style='background-color: $this_color'>". rand() .'</td>';
    }
    $table .= '</tr>';
}

$table .= '</table>';
echo $table;
