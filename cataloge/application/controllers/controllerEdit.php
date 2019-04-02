<?php
//создает страницу добавления записи книги в базу данных
//ссылка на данный контроллер находится в файле представления main_view.php
class controllerEdit extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['id'] = $this->uri->segment(3);           //берем идентификатор id записи из ссылки, находящейся в  представлении main_view.php
		$this->load->view('templates/header');
		$this->load->view('cataloge/edit_view', $data);  
		$this->load->view('templates/footer');
	}
}