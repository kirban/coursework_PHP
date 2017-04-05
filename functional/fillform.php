<?php
include "insert.php";
 
$index = $_POST["index"];
if ($index != "" && $index >= 1 && $index < count($arrUsers)+1) {
    session_start();
    $_SESSION["numberOfChanging"] = $index+1;
    session_commit(); // save session data

    $action = "../functional/change.php";
    
    $username = $arrUsers[$index-1]->getUserName();
    $read = $arrUsers[$index-1]->getRead();
    $write = $arrUsers[$index-1]->getWrite();
    $access = $arrUsers[$index-1]->getAccess();
 
   
    include "../www/redaction.php";
    include "../template/form.php";
}
else {   
    echo "<p><a href='../www/index.php'>Главная</a></p>";
    echo "Пользователь не найден!";
}