<?php
//19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом. Текущий день должен храниться в переменной $day.
$arr = ["понедельник", "вторник", "среда", "четверг", "пятница", "суббота", "воскр"];
$day = date(N);
foreach ($arr as $k=>$v) {
    if ($day == $k) {
        echo "Сегодня <i>".$v."</i> ";
    } 
}