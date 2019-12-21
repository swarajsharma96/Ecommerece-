<?php

include_once ($_SERVER['DOCUMENT_ROOT'] . '/ecommerce/config.php');

use Bitm\Users;

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
    $_SESSION['message'] = "User Name can't be null.please enter specific Name";
    header("location:" .$webroot . "front/public/sign-up.php");
}else{
    $_user = new Users();

    $_user->signup($data);
}


