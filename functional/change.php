<?php
include "insert.php";
include "extract.php";
include "check.php";
session_start();
$username = userCheckType($username);
if(checkLength($username) == true){

$index = $_SESSION["numberOfChanging"]-1;
echo "Данные о пользователе №$index успешно изменены!<br>";

$arrUsers[$index-1]->setUserName($username);
$arrUsers[$index-1]->setRead($read);
$arrUsers[$index-1]->setWrite($write);
$arrUsers[$index-1]->setAccess($access);

file_put_contents($pathToDb, serialize($arrUsers));

echo $arrUsers[$index-1];
echo "<p><a href='../www/index.php'>Главная</a></p>";
}
else echo "<script>alert('Введено недопустимое число символов имени пользователя! Проверьте, что их больше 1, но меньше 20!')</script><br><a href='../www/index.php'>Главная</a>";