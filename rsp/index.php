<?php
    session_start();

    $me = $_POST['udar'] ?? false;
    $enemy = mt_rand(1, 3);

    !empty($_SESSION['result1']) ?: $_SESSION['result1'] = 10;
    !empty($_SESSION['result2']) ?: $_SESSION['result2'] = 10;

    if (isset($_REQUEST['fight'])) {
        if ($me == '1' && $enemy == 1) {
            $result = "Камень против камня - ничья!";
            $me_life = $_SESSION['result1'];
            $enemy_life = $_SESSION['result2'];
        }
        elseif ($me == '2' && $enemy == 2) {
            $result = "Ножницы против ножниц - ничья!";
            $me_life = $_SESSION['result1'];
            $enemy_life = $_SESSION['result2'];
        }
        elseif ($me == '3' && $enemy == 3) {
            $result = "Бумага против бумаги - ничья!";
            $me_life = $_SESSION['result1'];
            $enemy_life = $_SESSION['result2'];
        }
        elseif ($me == '1' && $enemy == 2) {
            $result = "Камень против ножниц - вы победили!";
            $enemy_life = --$_SESSION['result2'];
            $me_life = $_SESSION['result1'];
        }
        elseif ($me == '1' && $enemy == 3) {
            $result = "Камень против бумаги - вы проиграли!";
            $me_life = --$_SESSION['result1'];
            $enemy_life = $_SESSION['result2'];
        }
        elseif ($me == '2' && $enemy == 1) {
            $result = "Ножницы против камня - вы проиграли!";
            $me_life = --$_SESSION['result1'];
            $enemy_life = $_SESSION['result2'];
        }
        elseif ($me == '2' && $enemy == 3) {
            $result = "Ножницы против бумаги - вы победили!";
            $me_life = $_SESSION['result1'];
            $enemy_life = --$_SESSION['result2'];
        }
        elseif ($me == '3' && $enemy == 1) {
            $result = "Бумага против камня - вы победили!";
            $me_life = $_SESSION['result1'];
            $enemy_life = --$_SESSION['result2'];
        }
        elseif ($me == '3' && $enemy == 2) {
            $result = "Бумага против ножниц - вы проиграли!";
            $me_life = --$_SESSION['result1'];
            $enemy_life = $_SESSION['result2'];
        }

    }
    else {
        $me_life = 10;
        $enemy_life = 10;
    }

?>
<form name="fight" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
	<label>
	Камень: <input type="radio" name="udar" value="1"><br>
	Ножницы: <input type="radio" name="udar" value="2" ><br>
	Бумага: <input type="radio" name="udar" value="3" ><br>
	</label>
	<input type="submit" name="fight" value="Погнали!">
</form>
<p>Ваши жизни: <?=$me_life?></p>
<p>Жизни врага: <?=$enemy_life?></p>
<?php
	if($_REQUEST['fight']) echo $result;
?>
