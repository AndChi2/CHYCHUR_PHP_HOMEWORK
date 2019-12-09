<?php
/*
Объявить переменную $rand и присвоить ей рандомное значение от 0 до 100 (вызов функции rand(0, 100))
Написать цикл while который выводит все числа от 0 до $rand. Каждое число должно быть в отдельной строке (перенос в html)
*/
$rand = rand(1, 100);
$sum = 0;
$i = 1;

?>

<!DOCTYPE html>

<html>
<head>
    <title>Основы языка PHP</title>
</head>
<body>
    <h1>Циклы while</h1>
    <p>
        <?php echo $rand ?>
        <br>
        <br>
        <br>
        <?php
        while ($sum <= $rand) {
            echo $sum . "<br>";
            $sum = $sum + $i;
}
        ?>
    </p>
</body>
</html>
