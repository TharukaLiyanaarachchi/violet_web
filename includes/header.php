
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <img src="images/images.png" alt="" class="image">
        <a class="navbar-brand" href="#">Velvet Vouge Clothing</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
<!--                <li class="nav-item dropdown">-->
<!--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                        Men-->
<!--                    </a>-->
<!--                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">-->
<!--                        <a class="dropdown-item" href="products.php?type=men&category=shirts">Shirts</a>-->
<!--                        <a class="dropdown-item" href="products.php?type=men&category=tshirts">T-Shirts</a>-->
<!--                        <a class="dropdown-item" href="products.php?type=men&category=pants">Pants</a>-->
<!--                        <a class="dropdown-item" href="products.php?type=men&category=denim">Denim</a>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li class="nav-item dropdown">-->
<!--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                        Women-->
<!--                    </a>-->
<!--                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">-->
<!--                        <a class="dropdown-item" href="#">Dresses</a>-->
<!--                        <a class="dropdown-item" href="#">Tops</a>-->
<!--                        <a class="dropdown-item" href="#">Skirts</a>-->
<!--                        <a class="dropdown-item" href="#">Denim</a>-->
<!--                        <a class="dropdown-item" href="#">Pants</a>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li class="nav-item dropdown">-->
<!--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                        Kids-->
<!--                    </a>-->
<!--                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">-->
<!--                        <a class="dropdown-item" href="#">Girls</a>-->
<!--                        <a class="dropdown-item" href="#">Boys</a>-->
<!--                    </div>-->
<!--                <li class="nav-item dropdown">-->
<!--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                        Accessories-->
<!--                    </a>-->
<!--                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">-->
<!--                        <a class="dropdown-item" href="#">Men</a>-->
<!--                        <a class="dropdown-item" href="#">Women</a>-->
<!--                    </div>-->
<!--                </li>-->
                <?php echo get_menu_items(); ?>
                <li class="nav-item">
                    <a class="nav-link" href="#">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><sup>1</sup></a>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Total Price: 100/-</a>
                </li>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                </form>
        </div>
    </nav>