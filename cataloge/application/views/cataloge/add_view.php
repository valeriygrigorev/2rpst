<?php //форма добавления записи книги в базу данных. 
//Информация передается в базу данных скриптом файла header.php, 
//который вызывает контроллер controllerAddAjax.php
?>

<a href="/cataloge/index.php/controllerMain" class="main">На главную</a>
<header>
	<h1 id="list">Форма добавления книги в список</h1>
</header>
<main>
	<form action="" id="ajax_add" method="post">
		Жанр: <input type="text" id="addJenre" name="addJenre" required><br><br>
		Автор: <input type="text" id="addAuthor" name="addAuthor" required><br><br>
		Название: <input type="text" id="addName" name="addName" required><br><br>
		Год издания: <input type="text" id="addYear" name="addYear" required><br><br>
		<input type="submit" id = "submit_add" value="Добавить">
	</form>
</main>