<?php
$name = 'Чичур Андрей Иванович';
$avatar = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRICArQz2UhxZqU34uK09ld6C8UaZxCeF8KHrwSRdevJwum3lY9iw&s';
$pos = 'IT Директор';
$descr = <<<DOC
Опытный программист PHP. Ищу работу в стабильной развивающейся компании. Обладаю необходимыми знаниями в программировании на PHP, имею опыт работы с MVC фреймворками, такими как Laravel, Symfony, Yii2, понимаю принципы ООП, SOLID, DRY, KISS, неплохо ориентируюсь в реляционных базах данных таких как MySQL и PostgreSQL. Есть опыт работы в проектировании микросервисной архитектуры, написании RESTfull API приложений. Владею знаниями Unix OS\'s на уровне администрирования систем.'
DOC;
$fee = '1 000.00 $';
$exp = 2.5;
$city = 'Киев';
$age = '28';
$bool = FALSE;
$transfer = '';
$email = 'sideroalogo8@gmail.com';
$phone = '+380 (44) 416-92-97';
?>

<!DOCTYPE html>

<html>
<head>
    <title>Основы языка PHP</title>
    <style>
        .wrapper {
            width: 740px;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
        }
        .block {
            border-top: 1px solid #333333;
            padding: 20px 0;
            display: flex;
            justify-content: space-between;
        }

        .avatar {
            text-align: right;
            max-height: 60px;
        }
        img {
            max-height: 250px;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <div class="header">
        <h2><?php echo $name ?></h2>
        <h4><?php echo $pos ?></h4>
    </div>
    <div class="block">
        <div class="float-left">
            <p>Телефон для связи: <?php echo $phone ?></p>
            <p>Эл. почта: <a href="mailto:<?php echo $email ?>"><?php echo $email ?></a></p>
            <p>Зарплатные ожидания: <?php echo $fee ?></p>
            <p>Возраст: <?php echo $age ?></p>
            <p>Опыт работы: <?php echo $exp ?> года</p>
            <p>Город проживания: <?php echo $city ?></p>
            <p>Готов к переезду: <?php echo $bool ? 'Да' : 'Нет'?></p>
        </div>
        <div class="avatar float-left">
            <img src="<?php echo $avatar ?><">
        </div>
    </div>
    <div class="block">
        <?php echo $descr?>
    </div>
</div>
</body>
</html>