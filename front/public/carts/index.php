<?php
include_once ($_SERVER['DOCUMENT_ROOT'] . '/ecommerce/config.php');

use Bitm\Cart;
$_cart = new Cart();
$carts = $_cart->mycart();
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Cart Index</title>
</head>
<body>
<section>
    <div class="container">
        <p class="text-center text-success font-weight-bold mt-2">
            <?php if ( array_key_exists('message',$_SESSION ) && !empty($_SESSION['message']) ){
                        echo $_SESSION['message'];
                        $_SESSION['message']="";
            }
            ?>
        </p>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link h4" href="create.php">
                            <button type="button" class="btn btn-outline-success">Add An Item</button>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
        <div class="row justify-content-center">
            <div class="col-12 table-responsive">
                <table class="table  table-hover table-striped">
                    <thead class="table-borderless thead-dark">
                    <tr>
                        <th scope="col"> Picture</th>
                        <th scope="col">Product Title</th>
                        <th scope="col"> QTY</th>
                        <th scope="col"> Unit Price</th>
                        <th scope="col"> Total Price</th>
                        <th scope="col"> Action </th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php
                    if(count($carts)>0):
                    foreach ($carts as $cart) :
                        ?>
                        <tr>
                            <td> <img height="150px" width="150px" src="<?php echo $webroot; ?>/uploads/<?php echo $cart['picture'];?>"></td>
                            <td>  <?php echo $cart['product_title']?> </td>
                            <td>  <?php echo $cart['unit_price']?> </td>
                            <td>
                                <form action="edit.php" method="post">
                                    <input type="text" name="qty" value="<?php echo $cart['qty']?>" />
                                    <input type="hidden" name="id" value="<?php echo $cart['id']?>" />
                                    <button type="submit">Update</button>
                                </form>
                            </td>

                            <td>  <?php echo $cart['total_price']?> </td>

                            <td>
                                <a href="edit.php?id=<?php echo $cart['id']?>">EDIT</a> |
                                <a href="delete.php?id=<?php echo $cart['id']?>" onclick="return confirm('Are you sure you want to delete')">DELETE</a> |

                            </td>
                        </tr>
                    <?php
                    endforeach;
                    else:
                    ?>
                        <tr>
                            <td colspan="6"> No Item <in></in> Cart is Available. <a href="create.php">Click here to add one</a></td>
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



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
