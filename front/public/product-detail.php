<?php
include_once ($_SERVER['DOCUMENT_ROOT'] .'/ecommerce/config.php');

use Bitm\Products;

$_product = new Products();
$product = $_product->show();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/style.css">
    <title>BITM PROJECT</title>
</head>
<body>


<!--Markup for Header-->
    <header class="row">
        <!-- Top Nav -->
        <div class="col-12 bg-dark py-2 d-md-block d-none">
            <div class="row">
                <div class="col-auto mr-auto">
                    <ul class="top-nav">
                        <li>
                            <a href="Contact"><i class="fa fa-phone-square mr-2"></i>+8801855536222</a>
                        </li>
                        <li>
                            <a href="mail:Swarajsharma6663@gmail.com"><i class="fa fa-envelope mr-2"></i>Swarajsharma6663@gmail.com</a>
                        </li>
                    </ul>
                </div>
                <div class="col-auto">
                    <ul class="top-nav">
                        <li>
                            <a href="sign-up.php"><i class="fas fa-user-edit mr-2"></i>Sign-up</a>
                        </li>
                        <li>
                            <a href="login.php"><i class="fas fa-sign-in-alt mr-2"></i>Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Top Nav -->

        <div class="col-12 bg-transparent pt-4 ">
            <div class="row">
                <div class="col-lg-auto">
                    <div class="site-logo text-center text-lg-left">
                        <a href="home.php" class="site-logo " >BITM <br> PROJECT </br></a>
                    </div>
                </div>
                <div class="col-lg-5 mx-auto mt-4 mt-lg-0">
                    <form action="#">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="search" class="form-control border-dark " placeholder="Search ...">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-dark "><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-auto text-center text-lg-left header-item-holder">
                    <a href="#" class="header-item">
                        <i class="fas fa-heart mr-2"></i><span id="header-favorite">5</span>
                    </a>
                    <a href="#" class="header-item">
                        <i class="fas fa-shopping-bag mr-2"></i><span id="header-qty" class="mr-3">0</span>
                    </a>
                    <a class="header-item" href="#">
                        <i class="fas fa-shopping-cart mr-2"></i>
                        <span>(0)</span>
                    </a>
                </div>
            </div>

            <!-- Nav -->
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light bg-transparent col-12">
                    <button class="navbar-toggler d-lg-none border-0" type="button" data-toggle="collapse" data-target="#mainNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="mainNav">
                        <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="product-category.php">All iteams </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="electronics" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Electronics</a>
                                <div class="dropdown-menu" aria-labelledby="electronics">
                                    <a class="dropdown-item" href="../views/elements/category.php">Computers</a>
                                    <a class="dropdown-item" href="../views/elements/category.php">Mobile Phones</a>
                                    <a class="dropdown-item" href="../views/elements/category.php">Television Sets</a>
                                    <a class="dropdown-item" href="../views/elements/category.php">DSLR Cameras</a>
                                    <a class="dropdown-item" href="../views/elements/category.php">Projectors</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="fashion" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Fashion</a>
                                <div class="dropdown-menu" aria-labelledby="fashion">
                                    <a class="dropdown-item" href="category.php">Men's</a>
                                    <a class="dropdown-item" href="category.php">Women's</a>
                                    <a class="dropdown-item" href="category.php">Children's</a>
                                    <a class="dropdown-item" href="category.php">Accessories</a>
                                    <a class="dropdown-item" href="category.php">Footwear</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="books" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Books</a>
                                <div class="dropdown-menu" aria-labelledby="books">
                                    <a class="dropdown-item" href="category.php">Adventure</a>
                                    <a class="dropdown-item" href="category.php">Horror</a>
                                    <a class="dropdown-item" href="category.php">Romantic</a>
                                    <a class="dropdown-item" href="category.php">Children's</a>
                                    <a class="dropdown-item" href="category.php">Non-Fiction</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- Nav -->

        </div>
        <!-- Header -->

    </header>

<!--Markup for Breadcrumb-->
<div id="breadcrumb" class="mb-5">
    <div class="container border-bottom">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item pr-3"><a href="home.php">Home</a></li>
                <li class="breadcrumb-item pr-3 active" aria-current="page">Product details</li>
            </ol>
        </nav>
    </div>
</div>

<!--Markup for product-->
<form action="<?php echo $webroot;?>/front/public/carts/add_to_cart.php" method="post">
<section id="product">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <div class="xzoom-container">

                    <img class="xzoom" id="xzoom-default" width="200" height="200" src="<?php echo $webroot;?>/uploads/<?php echo $product['picture'];?>" />

<!--                    <div class="xzoom-thumbs mt-3">-->
<!--                        <a href="http://www.jqueryscript.net/demo/Feature-rich-Product-Gallery-With-Image-Zoom-xZoom/images/gallery/original/01_b_car.jpg"><img class="xzoom-gallery" width="80" src="http://www.jqueryscript.net/demo/Feature-rich-Product-Gallery-With-Image-Zoom-xZoom/images/gallery/thumbs/01_b_car.jpg"  xpreview="http://www.jqueryscript.net/demo/Feature-rich-Product-Gallery-With-Image-Zoom-xZoom/images/gallery/preview/01_b_car.jpg" title="The description goes here"></a>-->
<!---->
<!--                        <a href="http://www.jqueryscript.net/demo/Feature-rich-Product-Gallery-With-Image-Zoom-xZoom/images/gallery/original/02_o_car.jpg"><img class="xzoom-gallery" width="80" src="http://www.jqueryscript.net/demo/Feature-rich-Product-Gallery-With-Image-Zoom-xZoom/images/gallery/preview/02_o_car.jpg" title="The description goes here"></a>-->
<!---->
<!--                        <a href="http://www.jqueryscript.net/demo/Feature-rich-Product-Gallery-With-Image-Zoom-xZoom/images/gallery/original/03_r_car.jpg"><img class="xzoom-gallery" width="80" src="http://www.jqueryscript.net/demo/Feature-rich-Product-Gallery-With-Image-Zoom-xZoom/images/gallery/preview/03_r_car.jpg" title="The description goes here"></a>-->
<!---->
<!--                        <a href="http://www.jqueryscript.net/demo/Feature-rich-Product-Gallery-With-Image-Zoom-xZoom/images/gallery/original/04_g_car.jpg"><img class="xzoom-gallery" width="80" src="http://www.jqueryscript.net/demo/Feature-rich-Product-Gallery-With-Image-Zoom-xZoom/images/gallery/preview/04_g_car.jpg" title="The description goes here"></a>-->
<!---->
<!--                    </div>-->
                </div>
            </div>
            <div class="col-sm-7">
                <h4><?php echo $product['name'];?></h4>
                <div class="review d-flex justify-content-between">
                    <p>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </p>
                    <p>1 Review(s)</p>
                    <p class="border-color pl-3">Add Your Review</p>
                </div>
                <div class="price">
                    <p>&dollar;<?php echo $product['mrp'];?></p>
                    <p>Avaibility:In stock</p>
                </div>
                <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ....</p>
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="quantity">Qty</label>
                            <input type="number" value="1" name="qty" />
                        </div>
                    </div>
                </div>

                <input type="number" value="<?php echo $product['id'];?>" name="product_id" />
                <input type="text" value="<?php echo $_SESSION['user'];?>" name="user_id" />
                <input type="text" value="<?php echo $product['name'];?>" name="product_title" />
                <input type="text" value="<?php echo $product['mrp'];?>" name="unit_price" />
                <input type="text" value="<?php echo $product['picture'];?>" name="picture" />

                <button class="btn-dark">Add to cart</button>

            </div>
        </div>
    </div>
</form>
</section>

    <!--Markup for divider-->
    <div id="divider">
    </div>





<!--Markup for Footer-->
<?php include_once ('../views/elements/footer.php');?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src='https://code.jquery.com/jquery-2.1.1.js'></script>
<script src='https://unpkg.com/xzoom/dist/xzoom.min.js'></script>
<script src='https://hammerjs.github.io/dist/hammer.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/js/foundation.min.js'></script>
<script src="js/bootstrap.min.js"></script>
<script>
    (function ($) {
        $(document).ready(function() {
            $('.xzoom, .xzoom-gallery').xzoom({zoomWidth: 400, title: true, tint: '#333', Xoffset: 15});
            $('.xzoom2, .xzoom-gallery2').xzoom({position: '#xzoom2-id', tint: '#ffa200'});
            $('.xzoom3, .xzoom-gallery3').xzoom({position: 'lens', lensShape: 'circle', sourceClass: 'xzoom-hidden'});
            $('.xzoom4, .xzoom-gallery4').xzoom({tint: '#006699', Xoffset: 15});
            $('.xzoom5, .xzoom-gallery5').xzoom({tint: '#006699', Xoffset: 15});

            //Integration with hammer.js
            var isTouchSupported = 'ontouchstart' in window;

            if (isTouchSupported) {
                //If touch device
                $('.xzoom, .xzoom2, .xzoom3, .xzoom4, .xzoom5').each(function(){
                    var xzoom = $(this).data('xzoom');
                    xzoom.eventunbind();
                });

                $('.xzoom, .xzoom2, .xzoom3').each(function() {
                    var xzoom = $(this).data('xzoom');
                    $(this).hammer().on("tap", function(event) {
                        event.pageX = event.gesture.center.pageX;
                        event.pageY = event.gesture.center.pageY;
                        var s = 1, ls;

                        xzoom.eventmove = function(element) {
                            element.hammer().on('drag', function(event) {
                                event.pageX = event.gesture.center.pageX;
                                event.pageY = event.gesture.center.pageY;
                                xzoom.movezoom(event);
                                event.gesture.preventDefault();
                            });
                        }

                        xzoom.eventleave = function(element) {
                            element.hammer().on('tap', function(event) {
                                xzoom.closezoom();
                            });
                        }
                        xzoom.openzoom(event);
                    });
                });

                $('.xzoom4').each(function() {
                    var xzoom = $(this).data('xzoom');
                    $(this).hammer().on("tap", function(event) {
                        event.pageX = event.gesture.center.pageX;
                        event.pageY = event.gesture.center.pageY;
                        var s = 1, ls;

                        xzoom.eventmove = function(element) {
                            element.hammer().on('drag', function(event) {
                                event.pageX = event.gesture.center.pageX;
                                event.pageY = event.gesture.center.pageY;
                                xzoom.movezoom(event);
                                event.gesture.preventDefault();
                            });
                        }

                        var counter = 0;
                        xzoom.eventclick = function(element) {
                            element.hammer().on('tap', function() {
                                counter++;
                                if (counter == 1) setTimeout(openfancy,300);
                                event.gesture.preventDefault();
                            });
                        }

                        function openfancy() {
                            if (counter == 2) {
                                xzoom.closezoom();
                                $.fancybox.open(xzoom.gallery().cgallery);
                            } else {
                                xzoom.closezoom();
                            }
                            counter = 0;
                        }
                        xzoom.openzoom(event);
                    });
                });

                $('.xzoom5').each(function() {
                    var xzoom = $(this).data('xzoom');
                    $(this).hammer().on("tap", function(event) {
                        event.pageX = event.gesture.center.pageX;
                        event.pageY = event.gesture.center.pageY;
                        var s = 1, ls;

                        xzoom.eventmove = function(element) {
                            element.hammer().on('drag', function(event) {
                                event.pageX = event.gesture.center.pageX;
                                event.pageY = event.gesture.center.pageY;
                                xzoom.movezoom(event);
                                event.gesture.preventDefault();
                            });
                        }

                        var counter = 0;
                        xzoom.eventclick = function(element) {
                            element.hammer().on('tap', function() {
                                counter++;
                                if (counter == 1) setTimeout(openmagnific,300);
                                event.gesture.preventDefault();
                            });
                        }

                        function openmagnific() {
                            if (counter == 2) {
                                xzoom.closezoom();
                                var gallery = xzoom.gallery().cgallery;
                                var i, images = new Array();
                                for (i in gallery) {
                                    images[i] = {src: gallery[i]};
                                }
                                $.magnificPopup.open({items: images, type:'image', gallery: {enabled: true}});
                            } else {
                                xzoom.closezoom();
                            }
                            counter = 0;
                        }
                        xzoom.openzoom(event);
                    });
                });

            } else {
                //If not touch device

                //Integration with fancybox plugin
                $('#xzoom-fancy').bind('click', function(event) {
                    var xzoom = $(this).data('xzoom');
                    xzoom.closezoom();
                    $.fancybox.open(xzoom.gallery().cgallery, {padding: 0, helpers: {overlay: {locked: false}}});
                    event.preventDefault();
                });

                //Integration with magnific popup plugin
                $('#xzoom-magnific').bind('click', function(event) {
                    var xzoom = $(this).data('xzoom');
                    xzoom.closezoom();
                    var gallery = xzoom.gallery().cgallery;
                    var i, images = new Array();
                    for (i in gallery) {
                        images[i] = {src: gallery[i]};
                    }
                    $.magnificPopup.open({items: images, type:'image', gallery: {enabled: true}});
                    event.preventDefault();
                });
            }
        });
    })(jQuery);
</script>
</body>
</html>