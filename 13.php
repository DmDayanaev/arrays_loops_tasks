<?php
//13. Вывести таблицу умножения
for ($i=2; $i<10; $i++) {
    for ($j=2; $j<10; $j++) {
        $mul = $i*$j;
        echo "$i * $j = $mul<br>";
    }
    echo "<hr>";
}