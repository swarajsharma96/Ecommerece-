<?php
include_once ($_SERVER['DOCUMENT_ROOT'] . '/ecommerce/config.php');

use Bitm\Products;

$_product = new Products();
$products = $_product->index();

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
                        <th scope="col">MRP</th>
                        <th scope="col">Details</th>
                        <th scope="col">Status</th>
                        <th scope="col">Picture</th>

                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if (count($products)>0):
                    foreach ($products as $product):
                    ?>
                        <tr>
                            <td><a href="show.php?id=<?= $product['id'];?>"><?= $product['name'];?></a></td>
                            <td><?= $product['email'];?></td>
                            <td><?= $product['phone'];?></td>
                            <td><?= $product['password'];?></td>
                            <td><?= $product['mrp'];?></td>
                            <td><?= $product['details'];?></td>

                            <td>
                                <?php
                                echo ($product['is_active'])?'Active':'Inactive';
                                ?>
                            </td>
<!--                            <td>--><?//= $admin['picture'];?><!--</td>-->

                            <td><img WIDTH="100" HEIGHT="100" src="<?php echo $webroot; ?>uploads/<?= $product['picture'];?>"></td>
                            <td> <a class="btn btn-primary" href="edit.php?id=<?= $product['id'];?>">Edit</a>
                                <a class="btn btn-secondary" href="trash.php?id=<?=$product['id'];?>"onclick="return confirm('Are you sure want to trash it?')">Trash</a>
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
</div>
<?php include_once ('../elements/footer.php')?>


