<?php

include_once ($_SERVER['DOCUMENT_ROOT'] . '/ecommerce/config.php');
use Bitm\Products;

$data = $_POST;

//validation title

function is_empty($value){
    if ($value == ''){
        return true;
    }else{
        return false;
    }
}
if (is_empty($data['name'])){
    session_start();
    $_SESSION['message'] = "Name can't be null.please enter specific Name";
    header("location:create.php");
}else{
    $_product = new Products();

    $_product->store($data);
}


