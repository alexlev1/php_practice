<?php
	function fight() 
	{
		$me = $_POST['udar'];
		
		$enemy = mt_rand(1, 3);
		
		if ($me == '1' && $enemy == 1) echo "Камень против камня - ничья!";
		elseif ($me == '2' && $enemy == 2) echo "Ножницы против ножниц - ничья!";
		elseif ($me == '3' && $enemy == 3) echo "Бумага против бумаги - ничья!";
		elseif ($me == '1' && $enemy == 2) echo "Камень против ножниц - вы победили!";
		elseif ($me == '1' && $enemy == 3) echo "Камень против бумаги - вы проиграли!";
		elseif ($me == '2' && $enemy == 1) echo "Ножницы против камня - вы проиграли!";
		elseif ($me == '2' && $enemy == 3) echo "Ножницы против бумаги - вы победили!";
		elseif ($me == '3' && $enemy == 1) echo "Бумага против камня - вы победили!";
		elseif ($me == '3' && $enemy == 2) echo "Бумага против ножниц - вы проиграли!";
		else echo "Попробуйте ещё!";
	}
?>
<form name="fight" action="" method="post">
	<label>
	Камень: <input type="radio" name="udar" value="1"><br>
	Ножницы: <input type="radio" name="udar" value="2" ><br>
	Бумага: <input type="radio" name="udar" value="3" ><br>
	</label>
	<input type="submit" name="fight" value="Погнали!">
</form>
<?php
	if($_REQUEST['fight']) fight();
?>
