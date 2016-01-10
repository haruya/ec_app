<?php

require_once 'abstract_data.php';

class Cart extends AbstractData
{
	public function addProduct(Product $product)
	{
		$sql = "INSERT INTO cart (product_id) VALUES (" .$product->getId() . ")";
		return $this->exec($sql);
	}
	
	public function removeProduct($cartProductId) {
		$sql = "delete from cart where id = " . $cartProductId;
		return $this->exec($sql);
	}
	
	public function getProducts() {
		$sql = "select c.id as id, c.product_id as product_id, p.name as name, p.price as price from cart as c inner join products as p on c.product_id = p.id";
		return $this->query($sql)->fetchAll(PDO::FETCH_ASSOC);
	}
}