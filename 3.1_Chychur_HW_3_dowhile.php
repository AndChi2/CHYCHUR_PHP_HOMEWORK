<?php
/*
Объявить переменную $rand и присвоить ей рандомное значение от 1 до 100 (вызов функции rand(1, 100))
Написать алгоритм нахождения суммы чисел от 1 до $rand с помоцью цикла do while. Вывести результат на экран
*/

$rand = rand(1, 100);
$sum = 0;
$i = 1;

do
{
    $sum = $sum + $i;
    $i++;
}
while($i <= $rand)

?>

<!DOCTYPE html>

<html>
<head>
    <title>Основы языка PHP</title>
</head>
<body>
<h1>Цикл do while</h1>
<p>
    Сумма чисел от 1 до <?php echo $rand ?>: <?php echo $sum ?>
</p>
</body>
</html>
