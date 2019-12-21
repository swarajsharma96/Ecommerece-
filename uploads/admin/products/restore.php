<?php
include_once ($_SERVER['DOCUMENT_ROOT'] . '/ecommerce/config.php');

use Bitm\Products;

$_id = $_GET['id'];

$_product = new Products();
$_product->restore($_id);