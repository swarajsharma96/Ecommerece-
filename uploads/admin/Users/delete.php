<?php
$approot = $_SERVER['DOCUMENT_ROOT'] .'/ecommerce/';
$webroot = "http://localhost/ecommerce/";

include_once ($approot.'vendor/autoload.php');
use Bitm\Users;

$_id = $_GET['id'];

$_user = new Users();
$_user->delete($_id);