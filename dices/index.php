<?php
    $dices_quantity = $_POST['a'] ?? false;
    $dices_edge = $_POST['b'] ?? false;

    if(is_numeric($dices_quantity) && is_numeric($dices_edge)
      && $dices_quantity != false  && $dices_edge != false) // Проверка
    {
        echo "Результат: ";
        for ($i = 0; $i < $dices_quantity; $i++) {
              echo $e = mt_rand(1, $dices_edge)." "; // Вывод результата
        }
    }
    else echo "Введите цифры ниже:";
?>
<form name="dices" action="<?=$_SERVER['PHP_SELF']?>" method="post">
    Кол-во кубиков: <input type="text" name="a" value="<?=$dices_quantity?>"><br> <!-- Количество кубиков -->
    Кол-во граней: <input type="text" name="b" value="<?=$dices_edge?>"><br> <!-- Количество граней -->
    <input type="submit" name="dice" value="Бросить кубики">
</form>

