<?php include 'common_funtion.php' ?>
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
</head>
<body>
<div class="container-fluid p-0">
    <!--start header -->
    <?php include 'includes/header.php' ?>
    <!--end header -->
    <div class="row">
        <div class="col-md-12 pr-5 pl-5">
                <h2 class="mb-4">Shopping Cart</h2>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Balloon Sleeve Smoked Mini Dress - 080324</td>
                        <td>Rs.8000.00</td>
                        <td>1</td>
                        <td>Rs.8000.00</td>
                        <td><button class="btn btn-danger btn-sm">Remove</button></td>
                    </tr>
                    <tr>
                        <td>Collared Maxi Dress - 171123</td>
                        <td>Rs.9500.00</td>
                        <td>2</td>
                        <td>Rs.19000.00</td>
                        <td><button class="btn btn-danger btn-sm">Remove</button></td>
                    </tr>
                    </tbody>
                </table>
                <h4>Total: Rs.27000.00</h4>
                <a href="index.php" class="btn btn-primary">Continue Shopping</a>
                <a href="checkout.php" class="btn btn-success">Checkout</a>
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
