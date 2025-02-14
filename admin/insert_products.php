<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products-Admin Dashboard</title>
    <title>Admin Dashboard</title>

<!--bootstrap CSS link -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!--font awesome link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!--css file -->
<link rel="stylesheet" href="../style.css">

</head>
<body class="bg-light">
    <div class="container">
        <h1 class="text-center mt-3">Insert Products</h1>
    </div>

<!--form -->
<form action=""method="post" enctype="multipart/form-data">
    
<!--title -->
<div class="form-outline mb-4 w-50 m-auto">
    <label for="product_title" class="form-label">Product Title</label>
    <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter product title" autocomplete="off" required="required">
</div>

<!--description -->
<div class="form-outline mb-4 w-50 m-auto">
    <label for="description" class="form-label">Description</label>
    <input type="text" name="description" id="description" class="form-control" placeholder="Enter description" autocomplete="off" required="required">
</div>

<!--keywords -->
<div class="form-outline mb-4 w-50 m-auto">
    <label for="product_keywords" class="form-label">Product Keywords</label>
    <input type="text" name="product_keywords" id="product_keywords" class="form-control" placeholder="Enter product keyword" autocomplete="off" required="required">
</div>

<!--categories -->
<div class="form-outline mb-4 w-50 m-auto">
    <select name="product_categories" id="" class="form-select">
        <option value="">Men</option>
        <option value="">Women</option>
        <option value="">Kids</option>
    </select>
</div>

<!--item -->
<div class="form-outline mb-4 w-50 m-auto">
    <select name="product_items" id="" class="form-select">
        <option value="">T-shirt</option>
        <option value="">Trouser</option>
        <option value="">Dress</option>
    </select>
    </div>

    
<!--size -->
<div class="form-outline mb-4 w-50 m-auto">
    <select name="size" id="" class="form-select">
        <option value="">S</option>
        <option value="">M</option>
        <option value="">L</option>
    </select>
    </div>

    <!--colour -->
<div class="form-outline mb-4 w-50 m-auto">
    <label for="colour" class="form-label">Colour</label>
    <input type="text" name="colour" id="colour" class="form-control" placeholder="Enter colour" autocomplete="off" required="required">
</div>
    
    <!--image-->
<div class="form-outline mb-4 w-50 m-auto">
    <label for="product_image" class="form-label">Product Image</label>
    <input type="file" name="product_image" id="product_image" class="form-control" required="required">
</div>

<!--price -->
<div class="form-outline mb-4 w-50 m-auto">
    <label for="product_price" class="form-label">Product Price</label>
    <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter product price" autocomplete="off" required="required">
</div>

<!--price -->
<div class="form-outline mb-4 w-50 m-auto">
    <input type="submit" name="insert_prodcut" class="btn btn-info mb-3 px-3" value="Insert products">
 </div>

</form">

</div>

</body>
</html>