<?php

include_once ($_SERVER['DOCUMENT_ROOT'] . '/ecommerce/config.php');

use Bitm\Admin;

$data = $_POST;

$_admin = new Admin();
$_admin->update($data);