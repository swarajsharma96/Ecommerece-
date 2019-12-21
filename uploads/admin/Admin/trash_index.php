<?php
include_once ($_SERVER['DOCUMENT_ROOT'] . '/ecommerce/config.php');

use Bitm\Admin;

$_admin = new Admin();
$admins = $_admin->trashIndex();

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
            <?php
            echo $_SESSION['message'];
            $_SESSION['message'] = "";
            ?>
        </p>
    </div>
</section>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-5">
                <ul class="nav">
                    <li class="nav-item font-weight-bolder">
                        <a class="nav-link btn btn-outline-primary" href="index.php">All trashed items.</a><br>
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
                    <tr class="alert alert-danger">
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Password</th>
                        <th scope="col">Details</th>
                        <th scope="col">Created_at</th>
                        <th scope="col">Status</th>
                        <th scope="col">Image_title</th>
                        <th scope="col">Picture</th>

                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if (count($admins)>0):
                    foreach ($admins as $admin):
                    ?>
                        <tr>
                            <td><a href="show.php?id=<?= $admin['id'];?>"><?= $admin['name'];?></a></td>
                            <td><?= $admin['email'];?></td>
                            <td><?= $admin['phone'];?></td>
                            <td><?= $admin['password'];?></td>
                            <td><?= $admin['details'];?></td>
                            <td><?= $admin['created_at'];?></td>
                            <td>
                                <?php
                                echo ($admin['is_active'])?'Active':'Inactive';
                                ?>
                            </td>
                            <td><?= $admin['picture'];?></td>

                            <td><img width="100" height="100" src="<?php echo $webroot; ?>uploads/<?= $admin['picture'];?>"></td>
                            <td> <a class="btn btn-primary" href="edit.php?id=<?= $admin['id'];?>">Edit</a>   <a class="btn btn-primary" href="delete.php?id=<?=$admin['id'];?>"onclick="return confirm('Are you sure want to delete?')">Delete</a>
                                <a class="btn btn-secondary" href="restore.php?id=<?=$admin['id'];?>"onclick="return confirm('Are you sure wanna restore it?')">Restore</a>
                            </td>
                        </tr>
                    <?php
                    endforeach;
                    else:
                    ?>
                    <tr>
                        <td colspan="2">No trashed banner is available.<a href="index.php">Go to list page</a></td>
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
