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
<!--Header Top-->
<div class="container-fluid">
    <div class="row ">
        <div class="col-12">
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
                                    <a href="mail:Sm.mostafajamal@gmail.com"><i class="fa fa-envelope mr-2"></i>Sm.mostafajamal@gmail.com</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-auto">
                            <ul class="top-nav">
                                <li>
                                    <a href="sign-up.php"><i class="fas fa-user-edit mr-2"></i>Signup</a>
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
                                            <a class="dropdown-item" href="../views/elements/category.php">Men's</a>
                                            <a class="dropdown-item" href="../views/elements/category.php">Women's</a>
                                            <a class="dropdown-item" href="../views/elements/category.php">Children's</a>
                                            <a class="dropdown-item" href="../views/elements/category.php">Accessories</a>
                                            <a class="dropdown-item" href="../views/elements/category.php">Footwear</a>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="books" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Books</a>
                                        <div class="dropdown-menu" aria-labelledby="books">
                                            <a class="dropdown-item" href="../views/elements/category.php">Adventure</a>
                                            <a class="dropdown-item" href="../views/elements/category.php">Horror</a>
                                            <a class="dropdown-item" href="../views/elements/category.php">Romantic</a>
                                            <a class="dropdown-item" href="../views/elements/category.php">Children's</a>
                                            <a class="dropdown-item" href="../views/elements/category.php">Non-Fiction</a>
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
        </div>


        <div class="col-12">
            <!-- Main Content -->
            <div class="row">
                <div class="col-12 mt-3 text-center text-uppercase">
                    <h2>Register</h2>
                </div>
            </div>

            <main class="row">
                <div class="col-lg-4 col-md-6 col-sm-8 mx-auto bg-white py-3 mb-4">
                    <div class="row">
                        <div class="col-12">
                            <form>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" id="password" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="password-confirm">Confirm Password</label>
                                    <input type="password" id="password-confirm" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input type="checkbox" id="agree" class="form-check-input" required>
                                        <label for="agree" class="form-check-label ml-2">I agree to Terms and Conditions</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-outline-dark">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </main>
            <!-- Main Content -->
        </div>

        <!-- Footer -->
        <section id="footer">
            <div class="container">
                <div class=" col-12 row text-center text-xs-center text-sm-left text-md-left">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <h5>Quick links</h5>
                        <ul class="list-unstyled quick-links">
                            <li><a href="home.php"><i class="fa fa-angle-double-right"></i>Home</a></li>
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <h5>Quick links</h5>
                        <ul class="list-unstyled quick-links">
                            <li><a href="home.php"><i class="fa fa-angle-double-right"></i>Home</a></li>
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <h5>Quick links</h5>
                        <ul class="list-unstyled quick-links">
                            <li><a href="home.php"><i class="fa fa-angle-double-right"></i>Home</a></li>
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                            <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
                            <li><a href="https://wwwe.sunlimetech.com" title="Design and developed by"><i class="fa fa-angle-double-right"></i>Imprint</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                        <ul class="list-unstyled list-inline social text-center">
                            <li class="list-inline-item"><a href="https://www.facebook.com/M0stafaHasan?" class="social-icon"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="list-inline-item">  <a href="#" class="social-icon"><i class="fab fa-pinterest-p"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="https://www.instagram.com/sm.mostafajamal/"><i class="fab fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-icon"><i class="fab fa-youtube"></i></a></li>
                            <li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-envelope"></i></a></li>
                        </ul>
                    </div>
                    </hr>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                        <p><u><a href="https://www.nationaltransaction.com/">National Transaction Corporation</a></u> is a Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis, MN]</p>
                        <p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Sunlimetech</a></p>
                    </div>
                    </hr>
                </div>
            </div>
        </section>
        <!-- ./Footer -->
    </div>

</div>



<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>

















