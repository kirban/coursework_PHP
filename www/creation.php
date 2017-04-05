<?php

$title = "Курсовая работа";
$header = "SITE!";
$textHead = "Создание нового пользователя";
$indexPath = "..";

error_reporting( E_ERROR );
include "$indexPath/template/template.php";     // подключаем файл шаблона
$action = "../functional/add.php";
echo $top.$bottom;
include "../template/form.php";