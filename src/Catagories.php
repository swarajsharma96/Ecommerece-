<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 11/26/2019
 * Time: 1:18 PM
 */

namespace Bitm;
use PDO;


class Catagories
{
    public $conn = null;
    public function __construct()
    {
        $this->conn = new PDO("mysql:host=localhost;dbname=banners", "root","");
// set the PDO error mode to exception
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function index(){
        $query = "SELECT * FROM `catagories` where is_deleted = 0";

        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();
        $catagories = $stmt->fetchAll();
        return $catagories;
    }
    public function store($data){

        $_picture = $this->upload();
        $_name = $data['name'];
        $_link = $data['link'];
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


//connection to database


        $query = "INSERT INTO `catagories` (`name`,`link`,`details`,`picture`,`is_active`,`is_deleted`) VALUES (:name,:link,:details,:picture, :is_active, :is_deleted);";

//prepare a statement
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':name',$_name);
        $stmt->bindParam(':link',$_link);
        $stmt->bindParam(':details',$_details);
        $stmt->bindParam(':picture',$_picture);
        $stmt->bindParam(':is_active',$_is_active);
        $stmt->bindParam(':is_deleted',$_is_deleted);

        $result = $stmt->execute();
        if ($result){
            $_SESSION['message'] = "Banner is updated successfully.";
        }else{
            $_SESSION['message'] = "Banner is NOT updated.";
        }

        header("location:index.php");
    }
    public function show($_id){



        $query = "SELECT * FROM `catagories` where id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id',$_id);
        $result = $stmt->execute();
        $catagori = $stmt->fetch();
        return $catagori;
    }
    public function edit($_id){

//var_dump($_GET);
//connection to database

        $query = " SELECT * FROM `catagories` where id = :id";

//prepare a statement
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id',$_id);
        $result = $stmt->execute();
        $catagori = $stmt->fetch();
        return $catagori;
    }
    public function update($data){
        $_picture = $this->upload();
        $_id = $data['id'];
        $_name = $data['name'];
        $_link = $data['link'];
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


//connection to database


        $query = "UPDATE `catagories` SET `name`=:name,`link`= :link,`details` = :details,`picture` = :picture, `is_active` = :is_active, `is_deleted` = :is_deleted WHERE `catagories`.`id` = :id;  ";

//prepare a statement
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id',$_id);
        $stmt->bindParam(':name',$_name);
        $stmt->bindParam(':link',$_link);
        $stmt->bindParam(':details',$_details);
        $stmt->bindParam(':picture',$_picture);
        $stmt->bindParam(':is_active',$_is_active);
        $stmt->bindParam(':is_deleted',$_is_deleted);



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

        $query = "DELETE FROM `catagories` WHERE `catagories`.`id` = :id";

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

//connection to database


        $query = "UPDATE `catagories` SET `is_deleted` = :is_deleted WHERE `catagories`.`id` = :id;  ";

//prepare a statement
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id',$_id);
        $stmt->bindParam(':is_deleted',$_is_deleted);



        $result = $stmt->execute();
        if ($result){
            $_SESSION['message'] = "Banner is Restored successfully.";
        }else{
            $_SESSION['message'] = "Banner is NOT restored.";
        }

        header("location:index.php");

    }
    public function trash($_id){

        $_is_deleted = 1;
        $query = "UPDATE `catagories` SET  `is_deleted` = :is_deleted WHERE `catagories`.`id` = :id;  ";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id',$_id);
        $stmt->bindParam(':is_deleted',$_is_deleted);
        $result = $stmt->execute();

        if ($result){
            $_SESSION['message'] = "Banner is updated successfully.";
        }else{
            $_SESSION['message'] = "Banner is NOT updated.";
        }

        header("location:index.php");

    }
    public function trashIndex(){

        $query = "SELECT * FROM `catagories` where is_deleted = 1";

        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();
        $catagories = $stmt->fetchAll();
        return $catagories;

    }
    private function upload(){
        $approot =  $_SERVER['DOCUMENT_ROOT']."/ecommerce/";
        $_picture = null;

        if ($_FILES['picture']['name'] != ""){
            $file_name = "IMG_".time()."_".$_FILES ['picture']['name'];

            $target = $_FILES['picture']['tmp_name'];
            $destination = $approot.'uploads/'.$file_name;

            $is_file_moved = move_uploaded_file($target,$destination);
            echo "<br>";

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