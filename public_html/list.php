<?php

require_once 'classes/ec/product_manager.php';

$productManager = new ProductManager();
$products = $productManager->getProducts();

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>商品一覧</title>
</head>
<body>
<table border="1">
	<tr>
		<th>商品ID</th>
		<th>商品名</th>
		<th>価格</th>
	</tr>
	<?php foreach ($products as $product) : ?>
	<tr>
		<td><a href="detail.php?id=<?php echo $product['id']; ?>"><?php echo $product['id']; ?></td>
		<td><?php echo $product['name']; ?></td>
		<td><?php echo $product['price']; ?></td>
	</tr>
	<?php endforeach; ?>
</table>
</body>
</html>