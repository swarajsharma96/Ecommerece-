<?php

include_once ($_SERVER['DOCUMENT_ROOT'] . '/ecommerce/config.php');

use Bitm\Products;

$_id = $_GET['id'];

$_product = new Products();
$product = $_product->show($_id);

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Show</title>
</head>
<body>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <dl>
                    <dt>ID</dt>
                    <dd><?= $product['id']; ?></dd>
                    <dt>Name</dt>
                    <dd><?= $product['name']; ?></dd>
                    <dt>Email</dt>
                    <dd><?= $product['email']; ?></dd>
                    <dt>Phone</dt>
                    <dd><?= $product['phone']; ?></dd>
                    <dt>Password</dt>
                    <dd><?= $product['password']; ?></dd>
                    <dt>MRP</dt>
                    <dd><?= $product['mrp']; ?></dd>
                    <dt>Details</dt>
                    <dd><?= $product['details']; ?></dd>
                    <dt>Created_at</dt>
                    <dd><?= $product['created_at']; ?></dd>
                    <dt>Modified_at</dt>
                    <dd><?= $product['modified_at']; ?></dd>
                    <dt>Details</dt>
                    <dd><?= $product['picture']; ?>
                        <img width="100" height="100" src="<?php echo $webroot;?>uploads/<?= $product['picture'];?>">
                    </dd>
                    <dt>Is_active</dt>
                    <dd>
                        <?php
//                        if ($admin['is_active'] == 1){
//                            echo "that is active";
//                        }else{
//                            echo "that is inactive";
//                        }

                        echo ($product['is_active'])?'Active':'Inactive';
                        ?>
                    </dd>
                    <dt>Is_deleted</dt>
                    <dd>
                        <?php
                        //                        if ($admin['is_active'] == 1){
                        //                            echo "that is active";
                        //                        }else{
                        //                            echo "that is inactive";
                        //                        }

                        echo ($product['is_deleted'])?'Deleted':'not deleted';
                        ?>
                    </dd>
                </dl>
                <a href="index.php" class="btn btn-primary"> << Back </a>
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
