<form method="post" action="<?php echo $action;?>"> Имя пользователя:
    <input type="text" name="username" value="<?php echo $username; ?>">
    <br>
    <?php
if ($read == 'Да'){
    echo "Право на чтение: <input type=\"radio\" name=\"read\" value='Да' checked>--TRUE    <input type=\"radio\" name=\"read\" value='Нет'>--FALSE<br>";
}
elseif ($read == 'Нет'){
    echo "Право на чтение: <input type=\"radio\" name=\"read\" value='Да'>--TRUE    <input type=\"radio\" name=\"read\" value='Нет' checked>--FALSE<br>";
}
else{
    echo "Право на чтение: <input type=\"radio\" name=\"read\" value='Да' required>--TRUE    <input type=\"radio\" name=\"read\" value='Нет' required>--FALSE<br>";
}
if ($write == 'Да'){
    echo "Право на запись: <input type=\"radio\" name=\"write\" value='Да' checked>--TRUE    <input type=\"radio\" name=\"write\" value='Нет'>--FALSE<br>";
}
elseif ($write == 'Нет'){
    echo "Право на запись: <input type=\"radio\" name=\"write\" value='Да'>--TRUE    <input type=\"radio\" name=\"write\" value='Нет' checked>--FALSE<br>";
}
else{
    echo "Право на запись: <input type=\"radio\" name=\"write\" value='Да' required>--TRUE    <input type=\"radio\" name=\"write\" value='Нет' required>--FALSE<br>";
}
if ($access == 'Да'){
    echo "Доступ к корню: <input type=\"radio\" name=\"access\" value='Да' checked>--TRUE    <input type=\"radio\" name=\"access\" value='Нет'>--FALSE<br>";
}
elseif ($access == 'Нет'){
    echo "Доступ к корню: <input type=\"radio\" name=\"access\" value='Да'>--TRUE    <input type=\"radio\" name=\"access\" value='Нет' checked>--FALSE<br>";
}
else{
    echo "Доступ к корню: <input type=\"radio\" name=\"access\" value='Да' required>--TRUE    <input type=\"radio\" name=\"access\" value='Нет' required>--FALSE<br>";
}
?>
        <input type="submit" value="Подтвердить"> </form>