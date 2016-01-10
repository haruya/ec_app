<?php

require_once 'abstract_data.php';

class ProductManager extends AbstractData
{
	public function getProducts() {
		$sql = "SELECT * FROM products";
		return $this->query($sql)->fetchAll(PDO::FETCH_ASSOC);
	}
	
}