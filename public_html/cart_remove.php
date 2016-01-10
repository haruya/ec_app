<?php

require_once 'classes/ec/cart.php';

$cart = new Cart();
$cart->removeProduct($_POST['id']);

header('Location: cart_list.php');