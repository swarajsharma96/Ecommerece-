<?php

$approot = $_SERVER['DOCUMENT_ROOT'] .'/ecommerce/';
$webroot = "http://localhost/ecommerce/";

include_once ($approot.'vendor/autoload.php');
use Bitm\Users;

$data = $_POST;

$_user = new Users();
$_user->update($data);