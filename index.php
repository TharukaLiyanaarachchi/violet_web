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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--css file -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--navbar -->
    <div class="container-fluid p-0">
        <!--first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <img src="images/images.png" alt="" class="image">
  <a class="navbar-brand" href="#">Velvet Vouge Clothing</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Men 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Shirts</a>
          <a class="dropdown-item" href="#">T-Shirts</a>
          <a class="dropdown-item" href="#">Pants</a>
          <a class="dropdown-item" href="#">Denim</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Women 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Dresses</a>
          <a class="dropdown-item" href="#">Tops</a>
          <a class="dropdown-item" href="#">Skirts</a>
          <a class="dropdown-item" href="#">Denim</a>
          <a class="dropdown-item" href="#">Pants</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Kids 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Girls</a>
          <a class="dropdown-item" href="#">Boys</a>
        </div>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Accessories 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Men</a>
          <a class="dropdown-item" href="#">Women</a>
        </div>
      </li>
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
<!--second child -->
<div class="bg-secondary p-2">
    <p class="text-start">Welcome Guest / <a href="#">Login</a> <span class="ml-2"><?php echo 'IP Address: '.$ip; ?></span></p>
</div>

<!--third child -->


<!--fourth child -->
<div class="row">
    <!-- <div class="col-md-1"></div> -->
    <div class="col-md-12 pr-5 pl-5">
    <div class="bg-light">
    <h3 class="text-center">Promotion</h3>
    <p class="text-center">Experience savings like never before with up to 70% off on our exclusive collection! Indulge in stylish outfits at jaw-dropping prices. Whether it’s classy dresses, trendy tops, or essential basics, these deals won’t last long. Hurry and grab your favorites before they’re gone for good!

</p>
</div>
    <!--products -->
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


  <div class="bg-light">
    <h3 class="text-center">Products</h3>
    <p class="text-center">Free delivery for local orders over LKR 5500/=
</p>
</div>


<div class="row">
    <div class="col-md-4 mb-2">
    <div class="card">
  <img class="card-img-top" src="./images/P1.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">V-Neck Long Sleeve Top - 030225</h5>
    <p class="card-text"> VVO22921-UK6-DarkGreen.</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
  </div>
  </div>
   <div class="col-md-4 mb-2">
    <div class="card">
  <img class="card-img-top" src="./images/women.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Women</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
    </div>
  <div class="col-md-4 mb-2">
    <div class="card">
  <img class="card-img-top" src="./images/women.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Women</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
    </div>

    <div class="col-md-4 mb-2">
    <div class="card">
  <img class="card-img-top" src="./images/women.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Women</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
    </div>

    <div class="col-md-4 mb-2">
    <div class="card">
  <img class="card-img-top" src="./images/women.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Women</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
    </div>
    <div class="col-md-4 mb-2">
    <div class="card">
  <img class="card-img-top" src="./images/women.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Women</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View more</a>
  </div>
</div>
    </div>


</div>
<!-- <div class="col-md-1"></div> -->
</div>
        <!--iterms under to display -->
    </div>
    <!-- <div class="col-md-2 bg-secondary p-0"> -->
        <!-- <ul class="navbar-nav me-auto text-center">
            <li class="nav-item bg-info">
                <a href="#" class="nav-link text-light"><h4>Men</h4</a>
            </li>
            <li class="nav-item ">
                <a href="#" class="nav-link text-light">Tshirt</a>
            </li>
            <li class="nav-item ">
                <a href="#" class="nav-link text-light">Denim</a>
            </li>
            <li class="nav-item ">
                <a href="#" class="nav-link text-light">Trouser</a>
            </li>
            <li class="nav-item ">
                <a href="#" class="nav-link text-light">Short</a>
            </li>
        </ul> -->

    <!-- </div> -->

</div>

<!--last child -->
<div class="bg-info p-3 text-center">
    <p>All right reserved © Designed by Tharuka 2025</p>
</div>

    
</div>
    




<!--bootstrap js link -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>