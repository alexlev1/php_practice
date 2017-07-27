<?php
	require_once("calc.php");
	if (!isset($_REQUEST["calculate"])) echo null;
	else {
		$result = calculate1();
	}
	?>
<!DOCTYPE html>
<head>
	<title>Калькулятор</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="<?=$_SERVER["SCRIPT_NAME"]?>" method="POST">
	<h2></h2>
		<table border="1">
			<tr>
				<th colspan="4">Калькулятор</th>
			<tr>
			<tr>
				<td colspan="4"><input type="text" class="text" name="a" value=""></td>
			</tr>
			<tr>
				<td colspan="4"><input type="text" class="text" name="b" value=""></td>
			</tr>
			<tr>
				<label>
				<td><input type="radio" name="num" value="+">+</td>
				<td><input type="radio" name="num" value="-">-</td>
				<td><input type="radio" name="num" value="*">*</td>
				<td><input type="radio" name="num" value="/">/</td>
				</label>
			</tr>
			<tr>
				<td colspan="4"><input type="submit" class="button" name="calculate" value="=" style="width:100%"></td>
			</tr>
			<tr>
				<td>Result:</td>
				<td colspan="3"><input type="text" class="text" name="result" value="<?=$result;?>"></td>
			</tr>
		</table>
	</form>
</body>
</html>