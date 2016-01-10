<?php

require_once 'abstract_data.php';

class Product extends AbstractData
{
	private $productInfo;
	
	public function __construct($id) {
		parent::__construct();
		$sql = "SELECT * FROM products WHERE id = " . $id;
		$this->productInfo = $this->query($sql)->fetchAll(PDO::FETCH_ASSOC);
	}
	
	public function getId() {
		return $this->productInfo[0]['id'];
	}
	
	public function getName() {
		return $this->productInfo[0]['name'];
	}
	
	public function getPrice() {
		return $this->productInfo[0]['price'];
	}
}
