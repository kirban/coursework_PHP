<?php
include "insert.php";

$form = <<< F
<form method="post">
    <button formaction="../functional/delete.php">Удалить</button>
    
    <button formaction="../functional/fillform.php">Изменить</button>
F;

for ($i = 1; $i < count($arrUsers)+1; $i++) {
    echo "<div id=\"user$i\"><p><b>$i-й пользователь</b>";
    $s = $i - 1;
    echo "<br>$arrUsers[$s]</p>";
    echo "$form<input name='index' value='$i' hidden></form><br></div>";
}