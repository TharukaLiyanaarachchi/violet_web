<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

<!--bootstrap CSS link -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!--font awesome link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!--css file -->
<link rel="stylesheet" href="../style.css">

.footer{
    position:absolute;
    bottom:0;
}

</style>

</head>
<body>
<!--navbar -->
    <div class="container-fluid p-0">
        <!--First child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
            <img src="../images/images.png" alt="" class="image">
                <nav class="navbar navbar-expand-lg">
                    <ul class= "navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">Welcome guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>

<!--Second child -->

<div class="bg-light">
    <h3 class="text-center p-2">Manage Details</h3>
</div>

<!--third child -->
<div class="row">
    <div class="col mb-12 bg-secondary p-1 d-flex align-items-center">
        <div class="px-5">
            <p class="text-light text-center">Admin Name</p>
        </div>
<!--button*10>a.nav-link.text-light.bg-info-my-1 -->
        <div class="button text-center">
            <button class="my-3"><a href="insert_products.php" class="nav-link text-light bg-info my-1">Insert Prodcuts</a></button>
            <button><a href="" class="nav-link text-light bg-info my-1">View Products</a></button>
            <button><a href="index.php? insert_category" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
            <button><a href="" class="nav-link text-light bg-info my-1">View Catergories</a></button>
            <button><a href="index.php? insert_item" class="nav-link text-light bg-info my-1">Insert Items</a></button>
            <button><a href="" class="nav-link text-light bg-info my-1">View Items</a></button>
            <button><a href="" class="nav-link text-light bg-info my-1">All Orders</a></button>
            <button><a href="" class="nav-link text-light bg-info my-1">All Payments</a></button>
            <button><a href="" class="nav-link text-light bg-info my-1">List Users</a></button>
            <button><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
        </div>
    </div>
</div>

<!--fourth child -->
<div class="container my-5">
    <?php
   if(isset($_GET['insert_category'])){
    include('insert_categories.php');
   }
   if(isset($_GET['insert_item'])){
    include('insert_items.php');
   }
   ?>

</div>


<!--last child -->
<div class="bg-info p-3 text-center footer">
    <p>All right reserved © Designed by Tharuka 2025</p>
</div>

</div>


 <!--bootstrap JS link -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>