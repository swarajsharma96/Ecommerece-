<?php
include_once ($_SERVER['DOCUMENT_ROOT'] .'/ecommerce/config.php');

use Bitm\Cart;

$_POST['total_price'] = $_POST['qty'] * $_POST['unit_price'];
$_cart = new Cart();
$_cart->add_to_cart();