<?php

$progress = [array('Каба Діана', 'Інформатика', 11),
    array('Пєтріщев Денис', 'Технології', 10),
    array('Мовчан Вероніка', 'Математика', 9),
    array('Остапенко Едуард', 'Основи екології', 11),
    array('Геращенко Артем', 'Економічна теорія', 4)];

$progInStr = serialize($progress);

$f = fopen("db.txt", "w") or die("Помилка!");

if (fwrite($f, $progInStr)) {
    echo "Запис зроблено успішно";
} else {
    echo "Виникла помилка при запису даних";
}
