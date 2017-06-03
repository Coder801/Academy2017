<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	// Выводит строку типа 'Текущая версия PHP: 4.1.1'
	echo 'Текущая версия PHP: ' . phpversion();

	// Выводит строку типа '2.0' или ничего, если расширение не подключено
	echo phpversion('tidy');
	?>
</body>
</html>