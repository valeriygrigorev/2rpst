<?php
//контроллер для добавления записи книги в каталог, вызывается через ajax запрос
//из представления add_view.php
class controllerAddAjax extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('cataloge_model');
	}

	public function index()
	{
		//получаем наименование жанра, имя автора, название книги и год издания
		$jenre=$_REQUEST['addJenre'];
    $author=$_REQUEST['addAuthor'];
    $name=$_REQUEST['addName'];
    $year=$_REQUEST['addYear'];
    $year_db=$year."-01-01";
 		
		$this->cataloge_model->add_book($jenre, $author, $name, $year_db); //вызываем функцию модели, которая добавляет запись 
	}	
}
?>