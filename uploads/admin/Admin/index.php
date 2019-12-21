<?php
include_once ($_SERVER['DOCUMENT_ROOT'] . '/ecommerce/config.php');

use Bitm\Admin;

$_admin = new Admin();
$admins = $_admin->index();

?>

<?php include_once ('../elements/header.php')?>

<body>
<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <?php include_once ('../elements/sidebar.php')?>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <ul class="nav">
                            <li class="nav-item font-weight-bolder">
                                <a class="nav-link btn btn-outline-primary" href="create.php">ADD new one</a><br>
                            </li>
                            &nbsp;
                            &nbsp;
                            &nbsp;
                            &nbsp;
                            <li class="nav-item font-weight-bolder">
                                <a class="nav-link btn btn-outline-primary" href="trash_index.php"> All trashed items</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <?php include_once ('../elements/nav.php')?>

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
                        <th scope="col">Details</th>
                        <th scope="col">Status</th>
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

                            <td>
                                <?php
                                echo ($admin['is_active'])?'Active':'Inactive';
                                ?>
                            </td>
<!--                            <td>--><?//= $admin['picture'];?><!--</td>-->

                            <td><img WIDTH="100" HEIGHT="100" src="<?php echo $webroot; ?>uploads/<?= $admin['picture'];?>"></td>
                            <td> <a class="btn btn-primary" href="edit.php?id=<?= $admin['id'];?>">Edit</a>
                                <a class="btn btn-secondary" href="trash.php?id=<?=$admin['id'];?>" onclick="return confirm('Are you sure want to trash it?')">Trash</a>
                            </td>
                        </tr>
                    <?php
                    endforeach;
                    else:
                    ?>
                    <tr>
                        <td colspan="2">No trashed banner is available. <a href="create.php">Click here to add one.</a> </td>
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

</div>
<!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->



<?php include_once ('../elements/footer.php')?>
