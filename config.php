<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$approot = $_SERVER['DOCUMENT_ROOT'] .'/ecommerce/';
$webroot = "http://localhost/ecommerce/";

include_once ($approot.'vendor/autoload.php');


if(array_key_exists('user', $_SESSION) && !empty($_SESSION['user'])){

}else{
    $_SESSION['user'] = rand()."_".time();
}