<?php
/*
С помощью двух циклов for (один вложен в другой) написать алгоритм вывода на экран таблицы умножения
Оформить можно с помощью html элементов table или через кастомный css

Дополнительно. Выделить первый ряд и первую колонку дополнительным цветом

*/

?>

<!DOCTYPE html>

<html>
<head>
    <title>Основы языка PHP</title>
    <style>

    </style>
</head>
<body>
<h1>Цикл for</h1>
<table border="1">
    <?php echo "<tr>";
    for ( $i = 1; $i <= 10; $i++ ){
        echo "<tr>";
        for ( $j = 1; $j <= 10; $j++ ){
            $c = ($i == 1 || $j == 1) ? 'green' : 'white';
            $v = $i*$j;
            echo "<td align=\"center\" valign=\"top\" bgcolor=$c>$v</td>";
        }
    }
    echo "</tr>"; ?>
</table>
</body>
</html>
