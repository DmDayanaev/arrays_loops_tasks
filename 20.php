<?php
//20.Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20 рядов, а не 5.
//x "<br>";
//xx "<br>";
//xxx "<br>";
//xxxx "<br>";
//xxxxx
$str = 'x';
for ($i=0; $i<20; $i++) {
    echo $str."<br>";
    $str .= "x";
}