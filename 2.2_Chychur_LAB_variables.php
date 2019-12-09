<?php

/*
 * 1. Определить константу BLOCK_NAME с помощью функции define со значением "Основы синтаксиса"
 * 2. Вывести значение константы SITE_NAME в блоке <title>
 * 3. Определить константу LESSON_NAME с помощью ключевого слова const со значением "Переменные и константы"
 * 4. Вывести значение константы LESSON_NAME в блоке <h1>
 * 5. Опрелить переменную $userName и присвоить ей строковое значение - свое имя
 * 6. Вывести на экран сообщение "Привет [YOUR_NAME]" в блоке <p>
 */

define("SITE_NAME", "Основы сиснтаксиса");
const LESSON_NAME = "Переменные и константы";
$userName = "Андрей";

?>

<!DOCTYPE html>

<html>
<head>
    <title><?php echo SITE_NAME ?></title>
</head>
<body>
    <h1><?php echo LESSON_NAME ?></h1>
    <p><?php echo "Привет $userName" ?></p>
</body>
</html>