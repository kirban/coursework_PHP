<?php
include "insert.php";

$index = $_POST["index"];
if ($index != "" && $index >= 1 && $index < count($arrUsers)+1) {               // index = номер удаляемого элемента @:2, count = 2
    for ($i = $index; $i < count($arrUsers)+1; $i++) {                          // i = index = 2
        $arrUsers[$i - 1] = $arrUsers[$i];
    }
    unset($arrUsers[count($arrUsers)-1]);

    file_put_contents("../db/base.txt", serialize($arrUsers));

    echo "Пользователь №$index успешно удален!";
}
else {
    echo "Пользователь не найден!";
}
echo "<p><a href='../www/index.php'>Главная</a></p>";