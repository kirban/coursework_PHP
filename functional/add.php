<?php
include "insert.php";
include "extract.php";
include "check.php";
$username = userCheckType($username);

if(checkLength($username) == true){
    
$arrUsers[count($arrUsers)] = new User($username, $read, $write, $access);          // создается объект класса User

file_put_contents($pathToDb, "<?php exit()?>".serialize($arrUsers));

echo $arrUsers[count($arrUsers) - 1];
echo "<p><a href='../www/index.php'>Главная</a></p>";
}
else echo "<script>alert('Введено недопустимое число символов имени пользователя! Проверьте, что их больше 1, но меньше 20!')</script><br><a href='../www/index.php'>Главная</a>";