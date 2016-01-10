<?php

require_once 'classes/ec/product.php';
require_once 'classes/ec/cart.php';

$product = new Product($_POST['id']);
$cart = new Cart();
$cart->addProduct($product);

header('Location: cart_list.php');exit;