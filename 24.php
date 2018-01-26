
<!-- 24. Вам нужно разработать программу, которая считала бы количество вхождений какой­нибуть
// выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе 442158755745 встречается 4 раза. -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Calculator</title>
</head>

<body>

 <form method="POST">
первое число (большое)<input TYPE="text" name="a"/><br>
второе число (однозначное)<input TYPE="text" name="b"/><br>
   <input type='submit' name='count' value='Вычислить количество вхождений'>
   <input type="reset" name='reset' value='Отменить'>
 </form>

</body>
</html>
<?php
if ($_POST['count']) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $arr = str_split($a);
    $count = 0;
    foreach ($arr as $v) {
        if ($v == $b) $count++;
    }
}
echo "цифра $b в числе $a встречается $count раз";
?>
