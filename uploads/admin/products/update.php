<?php

include_once ($_SERVER['DOCUMENT_ROOT'] . '/ecommerce/config.php');

use Bitm\Products;

$data = $_POST;

$_product = new Products();
$_product->update($data);