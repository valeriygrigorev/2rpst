<?php
//контроллер для удаления записи книги из каталога, вызывается через ajax запрос
//из представления main_view.php
class controllerDelAjax extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('cataloge_model');
	}

	public function index()
	{
		$id = $_REQUEST['id'];                      //получем идентификатор id записи, которую необходимо удалить
		$this->cataloge_model->delete_book($id);    //вызываем функцию модели, которая удаляет запись 
	}
}
?>

