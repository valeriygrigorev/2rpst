<?php
//контроллер для редактирования записи книги из каталога, вызывается через ajax запрос
//из представления edit_view.php
class controllerEditAjax extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('cataloge_model');
	}

	public function index()
	{
		//получаем идентификатор, наименование жанра, имя автора, название книги и год издания 
		$id=$_REQUEST['id']; 
		$jenre=$_REQUEST['addJenre'];
		$author=$_REQUEST['addAuthor'];
		$name=$_REQUEST['addName'];
		$year=$_REQUEST['addYear'];
		$year_db=$year."-01-01"; 
				
 		$this->cataloge_model->edit_book($jenre, $author, $name, $year_db, $id); //вызываем функцию модели, которая редактирует запись 
	}	
}
