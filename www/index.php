<?php

$title = "Курсовая работа";
$header = "SITE!";
$textHead = "Таблица прав пользователей";
$indexPath = "..";

error_reporting( E_ERROR );
include "$indexPath/template/template.php";             // подключаем файл шаблона
echo $top."<center><form method=\"post\"><button formaction=\"creation.php\"> Добавим элемент </button></form></center>".$bottom;
include "$indexPath/functional/show.php";
