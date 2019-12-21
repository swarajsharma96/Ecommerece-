<?php include_once ($_SERVER['DOCUMENT_ROOT'] . '/ecommerce/config.php');?>

<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <button class="btn btn-outline-secondary" id="menu-toggle">Toggle Menu</button>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link btn btn-outline-secondary" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            &nbsp;
            &nbsp;

            <li class="nav-item">
                <a class="nav-link btn btn-outline-secondary" href="#">User</a>
            </li>
            &nbsp;
            &nbsp;
<!--            <li class="nav-item dropdown">-->
<!--                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                    Dropdown-->
<!--                </a>-->
<!--                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">-->
<!--                    <a class="dropdown-item" href="#">Action</a>-->
<!--                    <a class="dropdown-item" href="../resources/logout.php">Log out</a>-->
<!--                </div>-->
<!--            </li>-->
            <a class="btn btn-outline-secondary" href="../resources/logout.php">Log out</a>
        </ul>
    </div>
</nav>
