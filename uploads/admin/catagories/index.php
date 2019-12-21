<?php
include_once ($_SERVER['DOCUMENT_ROOT'] . '/ecommerce/config.php');

use Bitm\Catagories;

$_catagory = new Catagories();
$catagories = $_catagory->index();

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
            <div class="col-5">
                <ul class="nav">
                    <li class="nav-item font-weight-bolder">
                        <a class="nav-link btn btn-outline-success " href="create.php">ADD new one</a><br>
                    </li>

                    &nbsp;
                    &nbsp;
                    &nbsp;

                    <li class="nav-item font-weight-bolder">
                        <a class="nav-link btn btn-outline-success " href="trash_index.php">All trash iteam</a><br>
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
                        <th scope="col">Link</th>
                        <th scope="col">Details</th>
                        <th scope="col">images</th>
                        <th scope="col">status</th>
                        <th scope="col">Action</th>

                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if (count($catagories)>0):
                    foreach ($catagories as $catagory):
                    ?>
                        <tr>
                            <td><a href="show.php?id=<?= $catagory['id'];?>"><?= $catagory['name'];?></a></td>
                            <td><?= $catagory['link'];?></td>
                            <td><?= $catagory['details'];?></td>
                            <td><img width="100" height="100" src="<?php echo $webroot;?>uploads/<?= $catagory['picture'];?>"</td>
                            <td>
                                <?php
                                echo ($catagory['is_active'])?'Active':'Inactive';
                                ?>
                            </td>
                            <td> <a class="btn btn-outline-success" href="edit.php?id=<?= $catagory['id']; ?>">Edit</a>
                                <a class="btn btn-outline-success" href="trash.php?id=<?= $catagory['id']; ?>" onclick="return confirm('Are you sure want to trash this?')">Trash</a></td>

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
    </div>
</div>
        <?php include_once ('../elements/footer.php')?>

