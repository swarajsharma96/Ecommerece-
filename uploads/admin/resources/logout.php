<?php
session_start();
$_SESSION['is_authenticated']=false;
header('location:http://localhost/ecommerce/front/public/home.php');