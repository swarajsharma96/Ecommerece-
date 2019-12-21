<?php
$approot = $_SERVER['DOCUMENT_ROOT'] .'/ecommerce/';
$webroot = "http://localhost/ecommerce/";

include_once ($approot.'vendor/autoload.php');
use Bitm\Catagories;

$data = $_POST;

function is_empty($value){
    if ($value == ''){
        return true;
    }else{
        return false;
    }
}

if (is_empty($data['name'])){
    session_start();
    $_SESSION['message'] = "Name can't be Empty.please enter this";
    header("location:create.php");
}else{
    $_catagory = new Catagories();
    $_catagory->store($data);
}



