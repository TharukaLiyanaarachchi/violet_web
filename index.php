<?php include 'common_funtion.php' ?>
<?php
$ip = getIPAddress();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Velvet Vogue Clothing</title>
    <!--bootstrap CSS link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
          integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <!--css file -->
    <link rel="stylesheet" href="style.css">
    <style>
        #menCard, #womenCard, #accessCard {
            cursor: pointer; /* Makes the card behave like a button */
            transition: transform 0.2s, box-shadow 0.2s;
        }

        #menCard:hover, #womenCard:hover, #accessCard:hover {
            transform: scale(1.05); /* Slight zoom effect */
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2); /* Adds shadow */
        }
    </style>
</head>
<body>
<div class="container-fluid p-0">
    <!--start header -->
    <?php include 'includes/header.php' ?>
    <!--end header -->
    <!--second child -->
<!--    <div class="bg-secondary p-2">-->
<!--        <p class="text-start">Welcome Guest / <a href="#">Login</a> <span-->
<!--                    class="ml-2">--><?php //echo 'IP Address: ' . $ip; ?><!--</span></p>-->
<!--    </div>-->

    <!--third child -->
    <div class="row">
        <div class="col-md-12 pr-5 pl-5">
            <!-- Promotion Banner -->
            <div class="alert alert-primary text-center" role="alert">
                🎉 Limited-Time Offer! Get 50% off on all products. <a href="offers.php" class="alert-link">Check Now</a>
                🎊
            </div>

            <!-- Image Slider (Carousel) -->
            <div id="carouselExample" class="carousel slide " data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./images/side2.png" class="d-block w-100" alt="Slide 1">
                    </div>
                    <div class="carousel-item">
                        <img src="./images/side2.png" class="d-block w-100" alt="Slide 2">
                    </div>
                    <div class="carousel-item">
                        <img src="./images/side2.png" class="d-block w-100" alt="Slide 3">
                    </div>
                </div>
<!--                 Controls -->
<!--                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"-->
<!--                        data-bs-slide="prev">-->
<!--                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
<!--                    <span class="visually-hidden">Previous</span>-->
<!--                </button>-->
<!--                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"-->
<!--                        data-bs-slide="next">-->
<!--                    <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
<!--                    <span class="visually-hidden">Next</span>-->
<!--                </button>-->
            </div>

            <div class="mt-5">
                <h1>Welcome to Our Website</h1>
                <p>Explore our latest deals and offers.</p>
            </div>
        </div>
    </div>
    <!--fourth child -->
    <div class="row">
        <div class="col-md-12 pr-5 pl-5">
            <!--start promotion tag-->
            <div class="bg-light">
                <h3 class="text-left">New Arrivals</h3>
            </div>
            <!--end promotion tag-->
            <!--start promotion products -->
            <div class="row">
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <img class="card-img-top" src="./images/Promo1.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Balloon Sleeve Smoked Mini Dress - 080324</h5>
                            <p class="card-text">- VV20595-UK6-WHITE BASE PRINT</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <img class="card-img-top" src="./images/Promo2.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Basic Cropped Tee - 050224</h5>
                            <p class="card-text"> VV20342-UK6-Black</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="card">
                        <img class="card-img-top" src="./images/Promo3.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Collared Maxi Dress - 171123</h5>
                            <p class="card-text"> GFC19753-UK6-Black.</p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                            <a href="#" class="btn btn-secondary">View more</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="bg-light mt-3">
                <h3 class="text-left">Products Category</h3>
            </div>
            <div class="row">
                <div class="col-md-4 mb-2">
                    <div class="card" id="menCard" onclick="window.location.href='products.php?category=1&item=1'">
                        <img class="card-img-top" src="./images/women.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Women</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="card" id="womenCard" style="mouse" onclick="window.location.href='products.php?category=1&item=1'">
                        <img class="card-img-top" src="./images/men.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Men</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div class="card" id="accessCard" onclick="window.location.href='products.php?category=1&item=1'">
                        <img class="card-img-top" src="./images/acc.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Accessories</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--start footer -->
<?php include 'includes/footer.php' ?>
<!--end footer -->
</div>


<!--bootstrap js link -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>