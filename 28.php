<?php
//28. Вывести таблицу умножения с помощью двух циклов for.

$rows = 9;
$cols = 9;
$table = '<table border="1">';

for ($tr=1; $tr<=$rows; $tr++){
    $table .= '<tr>';
    for ($td=1; $td<=$cols; $td++){
        $table .= '<td>'. $tr*$td .'</td>';
    }
    $table .= '</tr>';
}

$table .= '</table>';
echo $table;
