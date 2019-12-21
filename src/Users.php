<?php
/**
 * Created by PhpStorm.
 * User: PHP
 * Date: 12/6/2019
 * Time: 10:24 AM
 */

namespace Bitm;
use PDO;


class Users
{
    public $conn = null;
    public function __construct()
    {

        $this->conn = new PDO("mysql:host=localhost;dbname=banners", "root","");
// set the PDO error mode to exception
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function index(){

        $query = "SELECT * FROM `users`";

        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();
        $users = $stmt->fetchAll();
        return $users;
    }
    public function store($data){


        $_name = $data['name'];
        $_email = $data['email'];
        $_phone = $data['phone'];
        $_password = $data['password'];

        $query = "INSERT INTO `users` (`name`,`email`,`phone`,`password`) VALUES (:name,:email,:phone,:password);";

//prepare a statement
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':name',$_name);
        $stmt->bindParam(':email',$_email);
        $stmt->bindParam(':phone',$_phone);
        $stmt->bindParam(':password',$_password);
        $result = $stmt->execute();

        if ($result){
            $_SESSION['message'] = "Banner is added successfully.";
        }else{
            $_SESSION['message'] = "Banner is NOT added.";
        }

        header("location:index.php");
    }
    public function show($_id){



        $query = "SELECT * FROM `users`  where id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id',$_id);
        $result = $stmt->execute();
        $user = $stmt->fetch();
        return $user;
    }
    public function edit($_id){
//connection to database
        $query = " SELECT * FROM `users`  where id = :id";

//prepare a statement
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id',$_id);
        $result = $stmt->execute();
        $user = $stmt->fetch();
        return $user;
    }
    public function update($data){

//working with image upload
        $_id = $data['id'];
        $_name = $data['name'];
        $_email = $data['email'];
        $_phone = $data['phone'];
        $_password = $data['password'];

//connection to database


        $query = "UPDATE `users` SET `name`=:name,`email`=:email,`phone`=:phone,`password`=:password WHERE `users`.`id`=:id;  ";

//prepare a statement
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id',$_id);
        $stmt->bindParam(':name',$_name);
        $stmt->bindParam(':email',$_email);
        $stmt->bindParam(':phone',$_phone);
        $stmt->bindParam(':password',$_password);
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


        $query = "DELETE FROM `users` WHERE `users`.`id` = :id";

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
    public function signup($data){


        $_name = $data['name'];
        $_email = $data['email'];
        $_phone = $data['phone'];
        $_password = $data['password'];

        $query = "INSERT INTO `users` (`name`,`email`,`phone`,`password`) VALUES (:name,:email,:phone,:password);";

//prepare a statement
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':name',$_name);
        $stmt->bindParam(':email',$_email);
        $stmt->bindParam(':phone',$_phone);
        $stmt->bindParam(':password',$_password);
        $result = $stmt->execute();

        if ($result){
            $_SESSION['message'] = "Users is added successfully.";
        }else{
            $_SESSION['message'] = "Users is NOT added.";
        }

        header("location:http://localhost/ecommerce/front/public/login.php");
    }
    public function login($name, $password){
        // $query =  "SELECT COUNT (*) AS total FROM `users` WHERE name LIKE :name AND password LIKE :password";
        $query = "SELECT COUNT(*)AS total FROM `users` WHERE name LIKE :name AND password LIKE :password ";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam('name',$name);
        $stmt->bindParam('password',$password);
        $stmt->execute();

        $totalfound = $stmt->fetch();
        if ($totalfound['total'] > 0){
            $_SESSION['is_authenticated'] = true;
            header('location:http://localhost/ecommerce/admin/resources/dashboard.php');
        }else{
            $_SESSION['is_authenticated'] = false;
            header('location:http://localhost/ecommerce/admin/404.php');
        }
    }
}