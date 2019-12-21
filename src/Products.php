<?php
/**
 * Created by PhpStorm.
 * User: PHP
 * Date: 12/7/2019
 * Time: 11:52 AM
 */

namespace Bitm;
use PDO;


class Products
{
    public $conn = null;
    public function __construct()
    {

        $this->conn = new PDO("mysql:host=localhost;dbname=banners", "root","");
// set the PDO error mode to exception
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function index(){

        $query = "SELECT * FROM `products` where is_deleted = 0";

        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();
        $products = $stmt->fetchAll();
        return $products;
    }
    public function getActiveproduct(){
        $query = "SELECT * FROM `products` where is_active = 1";

        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();
        $products = $stmt->fetchAll();
        return $products;
    }
    public function store($data){

        $_picture = $this->upload();

        $_name = $data['name'];
        $_email = $data['email'];
        $_phone = $data['phone'];
        $_password = $data['password'];
        $_mrp = $data['mrp'];
        $_details = $data['details'];
        $_created_at = date('Y-m-d h:i:s',time());

        if (array_key_exists('is_active',$data)){
            $_is_active = $data['is_active'];
        }else{
            $_is_active = 0;
        }
        if (array_key_exists('is_deleted',$data)){
            $_is_deleted = $data['is_deleted'];
        }else{
            $_is_deleted = 0;
        }





        $query = "INSERT INTO `products` (`name`,`email`,`phone`,`password`,`mrp`,`details`,`created_at`,`picture`,`is_active`,`is_deleted`) VALUES (:name,:email,:phone,:password,:mrp,:details, :created_at,:picture,:is_active,:is_deleted);";

//prepare a statement
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':name',$_name);
        $stmt->bindParam(':email',$_email);
        $stmt->bindParam(':phone',$_phone);
        $stmt->bindParam(':password',$_password);
        $stmt->bindParam(':mrp',$_mrp);
        $stmt->bindParam(':details',$_details);
        $stmt->bindParam(':created_at',$_created_at);
        $stmt->bindParam(':picture',$_picture);
        $stmt->bindParam(':is_active',$_is_active);
        $stmt->bindParam(':is_deleted',$_is_deleted);

        $result = $stmt->execute();

        if ($result){
            $_SESSION['message'] = "Banner is added successfully.";
        }else{
            $_SESSION['message'] = "Banner is NOT added.";
        }

        header("location:index.php");
    }
    public function show(){


        $_id = $_GET['id'];
        $query = "SELECT * FROM `products`  where id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id',$_id);
        $result = $stmt->execute();
        $product = $stmt->fetch();
        return $product;
    }
    public function edit($_id){
//connection to database
        $query = " SELECT * FROM `products`  where id = :id";

//prepare a statement
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id',$_id);
        $result = $stmt->execute();
        $product = $stmt->fetch();
        return $product;
    }
    public function update($data){

//working with image upload

        $_picture = $this->upload();

        $_id = $data['id'];
        $_name = $data['name'];
        $_email = $data['email'];
        $_phone = $data['phone'];
        $_password = $data['password'];
        $_mrp = $data['mrp'];
        $_details = $data['details'];



        if (array_key_exists('is_active',$data)){
            $_is_active = $data['is_active'];
        }else{
            $_is_active = 0;
        }
        if (array_key_exists('is_deleted',$data)){
            $_is_deleted = $data['is_deleted'];
        }else{
            $_is_deleted = 0;
        }
        $_modified_at = date('Y-m-d h:i:s',time());


//connection to database


        $query = "UPDATE `products` SET `name`=:name,`email`=:email,`phone`=:phone,`password`=:password,`mrp`=:mrp,`details`=:details, 
 `picture` = :picture,`is_active` = :is_active,`is_deleted` = :is_deleted,`modified_at` = :modified_at WHERE `products`.`id`=:id;  ";

//prepare a statement
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id',$_id);
        $stmt->bindParam(':name',$_name);
        $stmt->bindParam(':email',$_email);
        $stmt->bindParam(':phone',$_phone);
        $stmt->bindParam(':password',$_password);
        $stmt->bindParam(':mrp',$_mrp);
        $stmt->bindParam(':details',$_details);
        $stmt->bindParam(':picture',$_picture);
        $stmt->bindParam(':is_active',$_is_active);
        $stmt->bindParam(':is_deleted',$_is_deleted);
        $stmt->bindParam(':modified_at',$_modified_at);



        $result = $stmt->execute();

        if ($result){
            $_SESSION['message'] = "Banner is updated successfully.";
        }else{
            $_SESSION['message'] = "Banner is NOT updated.";
        }

        header("location:index.php");
    }
    public function delete($_id){

//echo $_id;


        $query = "DELETE FROM `products` WHERE `products`.`id` = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id',$_id);
        $result = $stmt->execute();

        if ($result){
            $_SESSION['message'] = "Banner is updated successfully.";
        }else{
            $_SESSION['message'] = "Banner is NOT updated.";
        }

        header("location:index.php");
    }
    public function restore($_id){

        $_is_deleted = 0;
//echo $_id;


        $query = "UPDATE `products` SET `is_deleted` = :is_deleted WHERE `products`.`id`=:id;  ";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id',$_id);
        $stmt->bindParam(':is_deleted',$_is_deleted);
        $result = $stmt->execute();

        if ($result){
            $_SESSION['message'] = "Banner is restored.";
        }else{
            $_SESSION['message'] = "Banner is NOT restored.";
        }

        header("location:index.php");
    }
    public function trash($_id){

        $_is_deleted = 1;



        $query = "UPDATE `products` SET `is_deleted` = :is_deleted WHERE `products`.`id`=:id;  ";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id',$_id);
        $stmt->bindParam(':is_deleted',$_is_deleted);
        $result = $stmt->execute();

        if ($result){
            $_SESSION['message'] = "Banner is trashed successfully.";
        }else{
            $_SESSION['message'] = "Banner is not trashed.";
        }

        header("location:index.php");
    }
    public function trashIndex(){
        $query = "SELECT * FROM `products` where is_deleted = 1";

        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();
        $products = $stmt->fetchAll();
        return $products;
    }
    private function upload(){
        $approot =  $_SERVER['DOCUMENT_ROOT']."/ecommerce/";
        $_picture = null;

        if ($_FILES['picture']['name'] != ""){
            $file_name = "IMG_".time()."_".$_FILES ['picture']['name'];

            $target = $_FILES['picture']['tmp_name'];
            $destination = $approot.'uploads/'.$file_name;

            $is_file_moved = move_uploaded_file($target,$destination);

            if ($is_file_moved){
                $_picture = $file_name;
            }
        }else{
            if ($_POST ['old_picture']){
                $_picture = $_POST ['old_picture'];
            }
        }
        return $_picture;

    }

}