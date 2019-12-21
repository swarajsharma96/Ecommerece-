<?php
include_once ($_SERVER['DOCUMENT_ROOT'] . '/ecommerce/config.php');

use Bitm\Cart;
$_cart = new Cart();
$cart=$_cart->edit();
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Create Cart</title>
</head>
<body>
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <form method="post" action="update.php" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="p_input_title">cart id</label>
                        <input type="text"
                               class="form-control"
                               id="p_input_title"
                               name="id"
                               value="<?php echo $cart['id'];?>"
                               aria-describedby="titleHelp"
                               placeholder="Enter Cart Title">
                    </div>


                    <div class="form-group">
                        <label for="p_input_title">User ID/Session</label>
                        <input type="text"
                               class="form-control"
                               id="p_input_title"
                               name="user_id"
                               value="<?php echo $cart['user_id'];?>"
                               aria-describedby="titleHelp"
                               placeholder="Enter Cart Title">
                    </div>

                    <div class="form-group">
                        <label for="p_input_shortdes">Product Id</label>
                        <input type="text"
                               class="form-control"
                               id="p_input_shortdes"
                               name="product_id"
                               value="<?php echo $cart['product_id'];?>"
                               aria-describedby="titleHelp"
                               placeholder="Enter Cart short description">
                    </div>
                    <div class="form-group">
                        <label for="p_input_des">Picture</label>
                        <input type="text"
                               class="form-control"
                               id="p_input_des"
                               name="picture"
                               value="<?php echo $cart['picture'];?>"
                               aria-describedby="titleHelp"
                               placeholder="Enter Cart description">
                    </div>
                    <div class="form-group">
                        <label for="cart_pic">Product Title</label>
                        <input type="text"
                               class="form-control-file"
                               id="cart_pic"
                               name="product_title"
                               value="<?php echo $cart['product_title'];?>"
                        >
                    </div>
                    <div class="form-group">
                        <label for="p_mrp">Unit Price</label>
                        <input type="number"
                               class="form-control"
                               id="p_mrp"
                               name="unit_price"
                               value="<?php echo $cart['unit_price'];?>"
                               aria-describedby="titleHelp"
                               placeholder="Enter Cart description">
                    </div>
                    <div class="form-group">
                        <label for="totalSales">Qty</label>
                        <input type="number"
                               class="form-control"
                               id="totalSales"
                               name="qty"
                               value="<?php echo $cart['qty'];?>"
                               aria-describedby="titleHelp"
                               placeholder="Enter Cart Total Sales">
                    </div>
                    <div class="form-group">
                        <label for="totalSales">Total Price</label>
                        <input type="number"
                               class="form-control"
                               id="totalSales"
                               name="total_price"
                               value="<?php echo $cart['total_price'];?>"
                               aria-describedby="titleHelp"
                               placeholder="Enter Cart Total Sales">
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