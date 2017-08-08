<?php
	/*
		* Тестовая база находиться в папке с файлом "testable.sql"
	*/
	
	// Данные для подключения к БД
	define("DB_HOST", "localhost"); // указываем адрес БД
	define("DB_NAME", "testable"); // указываем имя БД
	define("DB_USER", "root"); // указываем имя пользователя
	define("DB_PASSWORD", ""); // указываем пароль
	
	// Функция добавления статьи в БД
	function addPost() 
	{
		// Подключаемся к БД
		try {
			$pdo = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
		}
		catch( PDOException $Exception ) {
			echo "Невозможно подключиться к БД"; // Если есть ошибка в подключении
		}
		
		// Переменные для добавления в БД
		$date = date('d:m:Y');
		$title = $_POST['title'] ?? false; 
		$anno = $_POST['anno'] ?? false;
		$post = $_POST['post'] ?? false;
	
		// Формируем запрос для добавления статьи в БД
		$querry = "INSERT INTO `base` (`date`, `title`, `anno`, `post`) VALUES (:date, :title, :anno, :post)"; 
	
		// Подготавливаем запрос к исполнению
		$stm = $pdo->prepare($querry); 
	
		// Исполняем запрос
		$stm->execute(array('date' => $date, 'title' => $title, 'anno' => $anno, 'post' => $post));
	}
	
	// Если нажата кнопка опубликовать статью, функция addPost() срабатывает
	if(isset($_POST['postarticle'])) 
	{
		$addPost = addPost();
	}
	
?>
<DOCTYPE! html>
<html>
<head>
	<title>Отправка статей в БД</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
		Заголовок: <input type="text" name="title"><br>
		Аннотация: <input type="text" name="anno"><br>
		Содержание: <input type="text" name="post"><br>
		<input type="submit" name="postarticle" value="Отправить"><br>
	</form>
</body>
</html>
