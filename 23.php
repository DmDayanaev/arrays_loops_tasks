<!--//23. Вам нужно разработать программу, которая считала бы сумму цифр числа введенного пользователем.
// Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6. По желанию можете сделать
// проверку на корректность введения данных пользователем. -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Calculator</title>
</head>

<body>

 <form method="POST">
Введите число <input TYPE="text" name="a"/><br>
<input type='submit' name='count' value='Сумматор цифр числа'>
 </form>

</body>
</html>

<?php
$a = $_POST['a'];
if (!is_numeric ($a) && isset($_POST['a'])) {
    echo "Введите число";
} else {
    $arr = str_split($a);
    $res = array_sum($arr);
    echo "Сумма цифр числа $a равно $res";
}
?>