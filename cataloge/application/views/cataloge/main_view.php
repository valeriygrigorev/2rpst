<?php //получаем массив записей $books из контроллера controllerMain и 
//выводим каждую запись $book_item в отдельный пункт списка, где: 
//id идентификатор записи книги в базе данных (в последующем будет 
//использован в скрипте файле header.php, который удаляет записи книг, а также будет передаваться 
//в представление с формой редактирования записи), 
//jenre - жанр, author - автор, name - название, year - год издания
?>
<header>
	<h1 id="list">Список книг</h1><a href="/cataloge/index.php/controllerAdd" class="add">Добавить книгу в список</a>
</header>

<?php foreach ($books as $book_item):?>
	<ul>
		<li>
			<p class="book"> 
			<span class="id" hidden><?=$book_item['id']?></span>
			<span class="genre"><?=$book_item['jenre']?></span>
			<span class="author"><?=$book_item['author']?></span>
			<span class="name"><?=$book_item['name']?></span>
			<span class="year"><?=substr($book_item['year'], 0, 4)?></span>
			<a href="/cataloge/index.php/controllerEdit/index/<?=$book_item['id']?>" class="edit" id = "<?=$book_item['id']?>" >Редактировать</a>
			<a href="#" class="delete" id="<?=$book_item['id']?>">Удалить</a>
			</p>
		</li>
	</ul>	
<?php endforeach?>
