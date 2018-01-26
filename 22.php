<?php
//22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.
//xx "<br>";
//xxxx "<br>";
//xxxxxx "<br>";
//xxxxxxxx "<br>";
//xxxxxxxxxx
$str = 'xx';
for ($i=0; $i<5; $i++) {
    echo $str."<br>";
    $str .= "xx";
}