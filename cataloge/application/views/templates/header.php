<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script type="text/javascript" src="/cataloge/jquery.js"></script>
	<script type="text/javascript">
  //удаляет пункт каталога в представлении и вызывает контроллер для удаления записи книги в базе данных 
	$(document).ready(function() {
		$(".delete").on("click", function(){   //при нажатии на ссылку "Удалить" 
			$(this).closest("li").remove();			//ищем ближайщий родительский элемент li и удаляем все его содержимое 
			var url = '/cataloge/index.php/controllerDelAjax/';  
			var id = $(this).attr("id");        //получаем идентификатор, который соответствует номеру книги в базе данных     
			$.ajax({                             //вызываем контроллер, который удаляет запись книги 
			url: url,
			data: {id: id},              
			dataType: 'text',
			});
		});	
	});
	//редактирут запись книги
	$(document).ready(function() {
		$("#ajax_edit").submit(function(){           //при возникновении события submit в форме редактирования записи книги
			const inputDate = new Date(document.getElementById('addYear').value).toISOString().slice(0, 10); // получаем введенную дату (обрезанную до год-месяц-день)
			const currentDate = new Date().toISOString().slice(0, 10); // текущую дату (обрезанную до год-месяц-день)
			const res = (inputDate < currentDate); // сравниваем их
			if (res)
			{
				var url = '/cataloge/index.php/controllerEditAjax';
				$.ajax({                             //вызываем контроллер, который редактирует запись книги 
				url: url,
				type: 'post',
				data: {id: $("#id").val(),              //id книги, приходит из представления 
							addJenre: $("#addJenre").val(),   //жанр, вводится в форме
							addAuthor: $("#addAuthor").val(),  //автор, вводится в форме
							addName: $("#addName").val(),      //название, вводится в форме
							addYear: $("#addYear").val()},     //год издания, вводится в форме
				});
			}
			else 
			{
				alert("Год издания не должен быть больше текущего");
			}				
		});	
	});		
	//добавляет запись книги
	$(document).ready(function() {                                 
		$("#ajax_add").submit(function(){              //при возникновении события submit в форме добавления записи книги
			const inputDate = new Date(document.getElementById('addYear').value).toISOString().slice(0, 10); // введенная дата (обрезанная до год-месяц-день)
			const currentDate = new Date().toISOString().slice(0, 10); // текущая дата (обрезанная до год-месяц-день)
			const res = (inputDate < currentDate); // сравниваем
			if (res)
			{
				var url = '/cataloge/index.php/controllerAddAjax/';
				$.ajax({                                    //вызываем контроллер, который редактирует запись книги
				url: url,
				type: 'post',
				data: {addJenre: $("#addJenre").val(),
							addAuthor: $("#addAuthor").val(),
							addName: $("#addName").val(),
							addYear: $("#addYear").val()}, 
				dataType: 'text',
				});
			} 
			else 
			{
				alert("Год издания не должен быть больше текущего");
			}
		});	
	});	
	</script>
		
  <style>
	.book{
	font-size: 16px;
	margin: 10px;
	}

	h1{
	margin: 10px;
	}

	.add{
	margin: 10px;
	}
  </style>	
	<title>Каталог книг</title>
</head>
<body>
     