<?php
include('../includes/connect.php');

if(isset($_POST['insert_cat'])) {
    $category_title = mysqli_real_escape_string($con, $_POST['cat_title']); 

    $insert_query = "INSERT INTO categories (category_title) VALUES (?)";
    $stmt = mysqli_prepare($con, $insert_query);
    mysqli_stmt_bind_param($stmt, "s", $category_title);
    $result = mysqli_stmt_execute($stmt);
    if($result) {
        echo "<script>alert('Category has been inserted successfully');</script>";
    } else {
        echo "<script>alert('Error inserting category: " . mysqli_error($con) . "');</script>";
    }
}
?>

<h2 class="text-center">Insert Categories</h2>
<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">
    <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  </div>
  <input type="text" class="form-control"name="cat_title" placeholder="Insert categories" aria-label="categories" aria-describedby="basic-addon1">
</div>

<div class="input-group w-10 mb-2 m-auto">
    
 <input type="submit" class="bg-info border-0 p-2 my-3"name="insert_cat" value="Insert Catergories" >


</div>

</form>