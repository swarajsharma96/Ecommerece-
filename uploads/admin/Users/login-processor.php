
<?php
include_once ($_SERVER['DOCUMENT_ROOT'] . '/ecommerce/config.php');

use Bitm\Users;

$name = $_POST['name'];
$password = $_POST['password'];

function is_empty($value){
    if ($value == ''){
        return true;
    }else{
        return false;
    }
}
if (empty($name['name'] || empty($password))){
    session_start();
    $_SESSION['message'] = "User Name or password can't be null.please enter specific Name and password";
    header("location:" .$webroot."front/public/login.php");
}else{
    $_user = new Users();
    $_user->login($name,$password);
}


