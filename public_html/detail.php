<?php
require_once 'classes/ec/product.php';

$product = new Product($_GET['id']);

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>商品詳細</title>
</head>
<body>
<table border="1">
	<tr>
		<th>商品ID</th>
		<th>商品名</th>
		<th>価格</th>
	</tr>
	<tr>
		<td><?php echo $product->getId(); ?></td>
		<td><?php echo $product->getName(); ?></td>
		<td><?php echo $product->getPrice(); ?></td>
	</tr>
</table>
	
<form method="post" action="cart_add.php">
	<input type="submit" value="カートに追加">
	<input type="hidden" name="id" value="<?php echo $product->getId(); ?>">
</form>
</body>