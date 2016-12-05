<?php class BooksController extends  AppController{
	var $name = "Books"; // tên của Controller Book

	function test(){
		$data = $this->Book->find("all");
                var_dump($data);
//		$this->set("data",$data);
	}
	function test2(){
		$sql = array("select * from books inner join table_1 on books.id = table_1.id ",
				"conditions"=> array(
						"title <> "=> "",
						
				),
				"limit" => "4"
		);
		$data = $this->Book->find("all",$sql);
		echo "<pre>";
		print_r($data);
		$this->set("data",$data);
	}
	var $helpers = array('Paginator','Html');
	var $components = array('Session');
	var $paginate = array();
	 
	//------- Paging Normal
	function paging(){
		$this->paginate = array(
				'field' =>array("title","info"),
				'limit' => 4,
				'order' => array('title' => 'desc'),
		);
		$data = $this->paginate("Book");
		echo "<pre>";
		print_r($data);
		$this->set("data",$data);
	}

}