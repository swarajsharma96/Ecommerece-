<?php

$approot = $_SERVER['DOCUMENT_ROOT'] .'/ecommerce/';
$webroot = "http://localhost/ecommerce/";

include_once ($approot.'vendor/autoload.php');
use Bitm\Catagories;

$data = $_POST;

$_catagory = new Catagories();
$_catagory->update($data);