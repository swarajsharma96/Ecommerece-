<?php

$approot = $_SERVER['DOCUMENT_ROOT'] .'/ecommerce/';
$webroot = "http://localhost/ecommerce/";

include_once ($approot.'vendor/autoload.php');
use Bitm\Users;

$_user = new Users();
$users = $_user->index();

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Lists!</title>

</head>
<body>
<section>
    <div class="container">
        <p class="text-center font-weight-bolder text-success">

        </p>
    </div>
</section>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-5">
                <ul class="nav">
                    <li class="nav-item font-weight-bolder">
                        <a class="nav-link btn btn-outline-success " href="create.php">ADD new one</a><br>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                    <tr class="alert alert-primary">
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Password</th>
                        <th scope="col">Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if (count($users)>0):
                    foreach ($users as $user):
                    ?>
                        <tr>
                            <td><a href="show.php?id=<?= $user['id'];?>"><?= $user['name'];?></a></td>
                            <td><?= $user['email'];?></a></td>
                            <td><?= $user['phone'];?></a></td>
                            <td><?= $user['password'];?></a></td>

                            <td> <a class="btn btn-outline-danger" href="edit.php?id=<?= $user['id']; ?>">Edit</a>
                               </td>

                        </tr>
                    <?php
                    endforeach;
                    else:
                    ?>
                    <tr>
                        <td colspan="2">No trashed file is available.<a href="create.php">Click here to add one</a></td>

                    </tr>
                    <?php
                    endif;
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
