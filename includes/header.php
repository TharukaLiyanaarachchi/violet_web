<?php session_start(); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-info">
    <img src="images/images.png" alt="" class="image">
    <a class="navbar-brand" href="#">Velvet Vouge Clothing</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
<!--    --><?php //if (isset($_SESSION['user'])) { ?>
<!--    <p>Username: --><?php //echo $_SESSION['user'] ?><!--</p>-->
<!--    --><?php //} ?>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>

            <?php //echo get_menu_items(); ?>
            <li class="nav-item">
                <a class="nav-link" href="new_arrivals.php">New Arrivals</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Product Categories
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="products.php?category=1&item=1">Men</a>
                    <a class="dropdown-item" href="products.php?category=1&item=1">Women</a>
                    <a class="dropdown-item" href="products.php?category=1&item=1">Accessories</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cart.php">Shopping Cart</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="customer_support.php">Customer Support</a>
            </li>

            <?php if (isset($_SESSION['user'])) { ?>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
            <?php }else{ ?>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
            <?php } ?>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>
    </div>
</nav>