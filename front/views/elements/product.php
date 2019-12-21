<?php
use Bitm\Products;

$_product = new Products();
$products = $_product->getActiveproduct();

?>


<!--Markup for New Product-->
<section class="newProduct">
    <div class="container">
        <p class="new-product-text">New <strong>Products in the Shop</strong></p>
        <?php
        $active = 'active';
        foreach($products as $product):
        ?>
        <div class="card-deck">
            <div class="card">
                <img src="<?=$webroot?>/uploads/<?=$product['picture']?>" class="card-img-top" alt="New Product">
                <div class="card-body">
                    <h5 class="card-title"><a href="product-detail.php?id=<?php echo $product['id']?>"><?php echo $product['name']?></a></h5>
                    <h5 class="card-title">Another Configurable product</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                    <p class="card-text fas fa-euro-sign"><?php echo $product['mrp']?></p>
                </div>
            </div>


            <div class="card">
                <img src="<?=$webroot?>/uploads/<?=$product['picture']?>" class="card-img-top" alt="New Product">
                <div class="card-body">
                    <h5 class="card-title"><a href="product-detail.php?id=<?php echo $product['id']?>"><?php echo $product['name']?></a></h5>
                    <h5 class="card-title">Another Configurable product</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                    <p class="card-text fas fa-euro-sign"><?php echo $product['mrp']?></p>
                </div>
            </div>
            <div class="card">
                <img src="<?=$webroot?>/uploads/<?=$product['picture']?>" class="card-img-top" alt="New Product">
                <div class="card-body">
                    <h5 class="card-title"><a href="product-detail.php?id=<?php echo $product['id']?>"><?php echo $product['name']?></a></h5>
                    <h5 class="card-title">Another Configurable product</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                    <p class="card-text fas fa-euro-sign"><?php echo $product['mrp']?></p>
                </div>
            </div>
            <div class="card">
                <img src="<?=$webroot?>/uploads/<?=$product['picture']?>" class="card-img-top" alt="New Product">
                <div class="card-body">
                    <h5 class="card-title"><a href="product-detail.php?id=<?php echo $product['id']?>"><?php echo $product['name']?></a></h5>
                    <h5 class="card-title">Another Configurable product</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                    <p class="card-text fas fa-euro-sign"><?php echo $product['mrp']?></p>
                </div>
            </div>
<!--            <div class="card">-->
<!--                <img src="img/new_product2.jpg" class="card-img-top" alt="New Product">-->
<!--                <div class="card-body">-->
<!--                    <p class="text-center gender">Women</p>-->
<!--                    <h5 class="card-title">Another Configurable product</h5>-->
<!--                    <h5 class="card-title text-center">for women</h5>-->
<!--                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>-->
<!--                    <p class="text-center"><strong class="text-center">-->
<!--                            <i class="fas fa-euro-sign"></i> 49.00</strong>-->
<!--                    </p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="card">-->
<!--                <img src="img/new_product3.jpg" class="card-img-top" alt="New Product">-->
<!--                <div class="card-body">-->
<!--                    <p class="text-center gender">Men</p>-->
<!--                    <h5 class="card-title">Another Configurable product</h5>-->
<!--                    <h5 class="card-title text-center">for men</h5>-->
<!--                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>-->
<!--                    <p class="text-center">-->
<!--                        <strong><i class="fas fa-euro-sign"></i>49.00</strong>-->
<!--                    </p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="card">-->
<!--                <img src="img/new_product4.jpg" class="card-img-top" alt="New Product">-->
<!--                <div class="card-body">-->
<!--                    <p class="text-center gender">Men</p>-->
<!--                    <h5 class="card-title">Another Configurable product</h5>-->
<!--                    <h5 class="card-title text-center">for men</h5>-->
<!--                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>-->
<!--                    <p class="text-center">-->
<!--                        <strong>-->
<!--                            <i class="fas fa-euro-sign"></i> 49.00-->
<!--                        </strong>-->
<!--                    </p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="card">-->
<!--                <img src="--><?php //echo $webroot?><!--/uploads/--><?php //echo $product['picture']?><!--" height="100px" width="100px" class="card-img-top" alt="Product01 Image">-->
<!--                <div class="card-body">-->
<!--                    <h5 class="card-title">--><?php //echo $product['name']?><!--</h5>-->
<!--                    <p class="card-text">--><?php //echo $product['mrp']?><!--</p>-->
<!--                    <p class="card-text">-->
<!--                        <i class="far fa-star"></i>-->
<!--                        <i class="far fa-star"></i>-->
<!--                        <i class="far fa-star"></i>-->
<!--                        <i class="far fa-star"></i>-->
<!--                        <i class="far fa-star"></i>-->
<!--                    </p>-->
<!--                </div>-->
<!--            </div>-->

            <?php
            $active = '';
            endforeach;
            ?>
        </div>
    </div>
</section>
<!--Markup for divider-->
<div id="divider">

</div>