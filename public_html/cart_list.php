<?php

require_once 'classes/ec/cart.php';

$cart = new Cart();
$products = $cart->getProducts();

$total = 0;
foreach ($products as $product) {
	$total += $product['price'];
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>カート</title>
</head>
<body>
<table border="1">
	<tr>
		<th>商品ID</th>
		<th>商品名</th>
		<th>価格</th>
		<th>削除</th>
	</tr>
	<?php foreach ($products as $product) : ?>
	<tr>
		<td><a href="detail.php?id=<?php echo $product['id']; ?>"><?php echo $product['id']; ?></td>
		<td><?php echo $product['name']; ?></td>
		<td><?php echo $product['price']; ?></td>
		<td>
			<form method="post" action="cart_remove.php">
				<input type="submit" value="削除">
				<input type="hidden" name="id" value="<?php echo $product['id']; ?>">
			</form>
		</td>
	</tr>
	<?php endforeach; ?>
	<tr>
		<td colspan="3">合計</td>
		<td><?php echo $total; ?>円</td>
	</tr>
</table>

</body>