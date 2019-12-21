<?php
session_start();
//echo "<pre>";
//var_dump($_POST);
//echo "<pre>";
$_title = $_POST['title'];
$_description = $_POST['description'];
$_link = $_POST['link'];
//connection to database


$conn = new PDO("mysql:host=localhost;dbname=banners", "root","");
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "INSERT INTO `page` (`title`,`description`,`link`) VALUES ( :title,:description,:link);";

//prepare a statement
$stmt = $conn->prepare($query);
$stmt->bindParam(':title',$_title);
$stmt->bindParam(':description',$_description);
$stmt->bindParam(':link',$_link);

$result = $stmt->execute();
if ($result){
    $_SESSION['message'] = "Banner is updated successfully.";
}else{
    $_SESSION['message'] = "Banner is NOT updated.";
}

header("location:index.php");