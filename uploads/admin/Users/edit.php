<?php
$approot = $_SERVER['DOCUMENT_ROOT'] .'/ecommerce/';
$webroot = "http://localhost/ecommerce/";

include_once ($approot.'vendor/autoload.php');


use Bitm\Users;

$_id = $_GET['id'];

$_user = new Users();
$user = $_user->edit($_id);

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Create</title>
</head>
<body>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">

                <form method="post" action="update.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <input
                            type="hidden"
                            class="form-control"
                            id="input-id"
                            name="id"
                            value="<?= $user['id'];?>"
                            aria-describedby="idHelp"
                            placeholder="Enter id">
                    </div>
                    <div class="form-group">
                        <label for="input-name">Name</label>
                        <input
                            type="text"
                            class="form-control"
                            id="input-name"
                            name="name"
                            value="<?= $user['name'];?>"
                            aria-describedby="nameHelp"
                            placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="input-email">Email</label>
                        <input
                                type="text"
                                class="form-control"
                                id="input-email"
                                name="email"
                                value="<?= $user['email'];?>"
                                aria-describedby="EmailHelp"
                                placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label for="input-phone">Phone</label>
                        <input
                                type="tel"
                                class="form-control"
                                id="input-phone"
                                name="phone"
                                value="<?= $user['phone'];?>"
                                aria-describedby="PhoneHelp"
                                placeholder="Enter Phone">
                    </div>
                    <div class="form-group">
                        <label for="input-password">Password</label>
                        <input
                                type="password"
                                class="form-control"
                                id="input-password"
                                name="password"
                                value="<?= $user['password'];?>"
                                aria-describedby="PasswordHelp"
                                placeholder="Enter Password">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
</section>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

