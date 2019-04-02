<?php //форма редактирования записи книги в базе данных 
//отправка информаии будет осуществляеться скриптом файла header.php.
//$id идентификатор записи книги в базе данных, приходит из представления main_view.
//Информация передается в базу данных скриптом файла header.php,
//который вызывает контроллер controllerEditAjax.php
?>
<a href="/cataloge/index.php/controllerMain" class="main">На главную</a>
<header>
	<h1 id="list">Форма редактирования записи книги</h1>
</header>
<main>
	<form action="" id = "ajax_edit" method="post">
		Жанр: <input type="text" id="addJenre" name="addJenre" required><br><br>
		Автор: <input type="text" id="addAuthor" name="addAuthor" required><br><br>
		Название: <input type="text" id="addName" name="addName" required><br><br>
		Год издания: <input type="text" id="addYear" name="addYear" required><br><br>
		<input type="hidden" id="id" name="id"  value = "<?=$id?>">
		<input type="submit" value="Сохранить">
	</form>
</main>
  