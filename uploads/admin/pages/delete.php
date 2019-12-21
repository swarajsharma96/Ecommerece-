<?php
session_start();
$_id = $_GET['id'];
//echo $_id;

$conn = new PDO("mysql:host=localhost;dbname=banners", "root","");
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = "DELETE FROM `page` WHERE `page`.`id` = :id";

$stmt = $conn->prepare($query);
$stmt->bindParam(':id',$_id);
$result = $stmt->execute();
if ($result){
    $_SESSION['message'] = "Banner is updated successfully.";
}else{
    $_SESSION['message'] = "Banner is NOT updated.";
}

header("location:index.php");