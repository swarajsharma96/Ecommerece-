<?php

$approot = $_SERVER['DOCUMENT_ROOT'] .'/ecommerce/';
$webroot = "http://localhost/ecommerce/";

include_once ($approot.'vendor/autoload.php');
use Bitm\Catagories;

$_id = $_GET['id'];

$_catagory = new Catagories();
$_catagory->restore($_id);