<?php
    function keys()
    {
        // Берём ключи из форм
        $key1 = $_POST['key1'];
        $key2 = $_POST['key2'];
        $key3 = $_POST['key3'];

        // Переводим строки в массив-список
        $key1_array = explode("\n", $key1);
        $key2_array = explode("\n", $key2);
        $key3_array = explode("\n", $key3);

        // Убираем пустые строки со значением
        $key1_array = array_diff($key1_array, array("\n","\r","\n\r","\r\n"));
        $key2_array = array_diff($key2_array, array("\n","\r","\n\r","\r\n"));
        $key3_array = array_diff($key3_array, array("\n","\r","\n\r","\r\n"));

        // Делаем пользовательскую сортировку списка по возрастанию
        usort($key1_array, function ($a, $b) { return strcmp($a, $b);});
        usort($key2_array, function ($a, $b) { return strcmp($a, $b);});
        usort($key3_array, function ($a, $b) { return strcmp($a, $b);});

        // Пересекаем все значения ключей массивов между собой
        for($a = 0; $a < count($key1_array); $a++)
        {
            for($b = 0; $b < count($key2_array); $b++)
            {
                for($c = 0; $c < count($key3_array); $c++)
                {
                    $massiv = $key1_array[$a].' '.$key2_array[$b].' '.$key3_array[$c];
                    echo $massiv.'<br>';
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>PPC</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>Перемножение строк между собой</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label>
            Ключи 1: <textarea name="key1" rows="5"></textarea><br>
            Ключи 2: <textarea name="key2" rows="5"></textarea><br>
            Ключи 3: <textarea name="key3" rows="5"></textarea><br>
        </label>
        <input type="submit" name="start" value="Перемножить строки"><br><br>
        <?php if(isset($_REQUEST['start'])) { ?>
        Результат:<br>
        <?php keys(); } ?>
    </form>
</body>
</html>
