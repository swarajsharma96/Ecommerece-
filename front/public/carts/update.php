<?php
include_once ($_SERVER['DOCUMENT_ROOT'] . '/ecommerce/config.php');

use Bitm\Cart;

$_cart = new Cart();
$_cart->update();
