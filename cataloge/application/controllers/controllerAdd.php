<?php
//создает страницу добавления записи книги в базу данных
//ссылка на данный контроллер находится в файле представления main_view.php
class controllerAdd extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('cataloge/add_view');
		$this->load->view('templates/footer');
	}
}