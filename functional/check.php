<?php
function userCheckType($username) {
        $username = trim($username);                                // убираем лишние пробелы в конце строки
        $username = stripslashes($username);                        // удаляем экранированные символы
        $username = strip_tags($username);                          // удаляем php и html - теги
        $username = htmlspecialchars($username);                    // cпец. символы преобразуем в html-сущности 
        return $username;
    }
function checkLength($username) {
    $flag = false;
    if (mb_strlen($username)>=1 && mb_strlen($username)<=19) {      // mb_strlen() считает число СИМВОЛОВ в строке в отличие от                                                                             // strlen, которая считает длину строки по байтам
        $flag = true;
    }
                               
    return $flag;
}