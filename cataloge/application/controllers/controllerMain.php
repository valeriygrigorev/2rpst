<?php
//создает основную страницу, на которой отображается список книг 
class controllerMain extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('cataloge_model');                  //загружаем модель
	}

	public function index()
	{
		$data['books'] = $this->cataloge_model->get_books();   //получаем массив всех записей
		$this->load->view('templates/header', $data);
		$this->load->view('cataloge/main_view', $data);
		$this->load->view('templates/footer');
	}	
}