<?php
include_once ($_SERVER['DOCUMENT_ROOT'] . '/ecommerce/config.php');

use Bitm\Products;

$_id = $_GET['id'];

$_product = new Products();
$product = $_product->edit($_id);

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
                            value="<?= $product['id'];?>"
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
                            value="<?= $product['name'];?>"
                            aria-describedby="nameHelp"
                            placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="input-email">Email</label>
                        <input
                            type="email"
                            class="form-control"
                            id="input-email"
                            name="email"
                            value="<?= $product['email'];?>"
                            aria-describedby="emailHelp"
                            placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label for="input-phone">Phone</label>
                        <input
                            type="tel"
                            class="form-control"
                            id="input-phone"
                            name="phone"
                            value="<?= $product['phone'];?>"
                            aria-describedby="phoneHelp"
                            placeholder="Enter Phone">
                    </div>
                    <div class="form-group">
                        <label for="input-password">Password</label>
                        <input
                            type="password"
                            class="form-control"
                            id="input-password"
                            name="password"
                            value="<?= $product['password'];?>"
                            aria-describedby="passwordHelp"
                            placeholder="Enter Password">
                    </div>

                    <div class="form-group">
                        <label for="p_mrp">MRP</label>
                        <input
                                type="number"
                                class="form-control"
                                id="p_mrp"
                                name="mrp"
                                value="<?= $product['mrp'];?>"
                                aria-describedby="titleHelp"
                                placeholder="Enter Product MRP">
                    </div>

                    <div class="form-group">
                        <label for="input-details">Details</label>
                        <input
                            type=text
                            class="form-control"
                            id="input-details"
                            name="details"
                            value="<?= $product['details'];?>"
                            aria-describedby="detailsHelp"
                            placeholder="Enter Details">
                    </div>
                    <div class="form-group">
                        <label for="input-created_at">Created_at</label>
                        <input
                                type=date
                                class="form-control"
                                id="input-created_at"
                                name="created_at"
                                value="<?= $product['created_at'];?>"
                                aria-describedby="created_atHelp"
                                placeholder="Enter Created_at">
                    </div>
                    <div class="form-group form-check">
                        <label for="input-is_active" class="form-check-label">
                            <?php
                            if ($product['is_active'] == 0) {
                                ?>
                                <input
                                        type="checkbox"
                                        class="form-check-input"
                                        id="input-is_active"
                                        name="is_active"
                                        value="1"
                                        aria-describedby="Is_activeHelp">
                                <?php
                            }else{
                            ?>
                            <input
                                    type="checkbox"
                                    class="form-check-input"
                                    id="input-is_active"
                                    name="is_active"
                                    value="1"
                                    checked = "checked"
                                    aria-describedby="Is_activeHelp">
                            <?php
                            }
                            ?>

                            Is_active
                        </label>
                    </div>
                    <div class="form-group form-check">
                        <label for="input-is_deleted" class="form-check-label">
                            <?php
                            if ($product['is_deleted'] == 0) {
                                ?>
                                <input
                                        type="checkbox"
                                        class="form-check-input"
                                        id="input-is_deleted"
                                        name="is_deleted"
                                        value="1"
                                        aria-describedby="Is_deletedHelp">
                                <?php
                            }else{
                                ?>
                                <input
                                        type="checkbox"
                                        class="form-check-input"
                                        id="input-is_deleted"
                                        name="is_deleted"
                                        value="1"
                                        checked = "checked"
                                        aria-describedby="Is_deletedHelp">
                                <?php
                            }
                            ?>

                            Is_Deleted
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="input-picture">Picture</label>
                        <input
                                type="file"
                                class="form-control-file"
                                id="input-picture"
                                name="picture"
                                value="<?= $product['picture'];?>"
                                aria-describedby="PictureHelp"
                                placeholder="Enter Picture">
                        <img width="100" height="100" src="<?php echo $webroot;?>uploads/<?= $product['picture'];?>">
                        <input
                                type="hidden"
                                name="old_picture"
                                value="<?= $product['picture'];?>">
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

