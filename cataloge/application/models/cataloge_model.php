<?php
//модель 
class Cataloge_model extends CI_Model 
{
	public function __construct()
	{
		$this->load->database();
	}
	
	//извлекает все записи из таблицы catalog 
	public function get_books()
	{
		$query = $this->db->get('catalog'); 
		return $query->result_array();
	}
	
	//удаляет запись в таблице catalog по ее идентификатору id	
	public function delete_book($id)
	{
		$this->db->delete('catalog', array('id' => $id));
	}
  //добавляет запись в таблицу catalog
	public function add_book($jenre_book, $author_book, $name_book, $year_book)
	{
		$sql = 'INSERT INTO catalog (id, jenre, author, name, year) VALUES (?, ?, ?, ?, ?)';   
		$book_array = array($id=0, $jenre_book, $author_book, $name_book, $year_book);         
		$this->db->query($sql, $book_array);                                                   
	}
	
	//обновляет запись в таблице catalog
	public function edit_book( $jenre_book, $author_book, $name_book, $year_book, $id_book)
	{
		$sql = 'UPDATE catalog SET jenre = ?, author = ?, name = ?, year = ? WHERE id = ?';     
		$book_array = array( $jenre_book, $author_book, $name_book, $year_book, $id_book);       
		$this->db->query($sql, $book_array);
	}
}