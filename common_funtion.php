<?php

function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  

// cart function
function cart() {

}

// getting connect file
include('./includes/connect.php');

// getting products
function getproducts(){
    global $con;

    // condition to check isset or not
    if(lisset($_GET['category'])){
        if(isset($GET['item'])){
            $select_query="Select * from 'prodcuts' order by rend() LIMIT 0.9";
            $result_query=mysql_query($con,$select_query):
            // $row=mysqli_fetch_assoc($result_query);
            // echo $row ['product_title'];
            while($row=mysqli_fetch_assoc($result_query)){
                $product_id=$row['product_id'];
                $product_title=$row['product_title'];
                $product_description=$row['product_description'];
                $product_image=$row['product_image'];
                $product_price=$row['product_price'];
                $category_=$row['category_id'];
                $item_id=$row['item_id'];
                echo "<div class='col-md-4 mb-2'>
                <div class='card'>
                img src='./admin_area/produt_image/$product_image1'
                class'card-img-top' alt=$product_title>
                <div class ='card-body'>
                <h5 class='card-title'> $product_title</h5>
                <p class'card-text'> $product_description </p>
                <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart </a>
                <a href='product_details.php?product_id=$product_id'
                class='btn btn-secondary'>View more</a>
                </div>   
                
                </div>

                </div>";

                

            }
        }
    }
}

// getting all products
function get_all_products(){
global $con;

// condition to check isset or not
if(lisset($_GET['category'])){
    if(isset($GET['item'])){
        $select_query="Select * from 'prodcuts' order by rend() LIMIT 0.9";
        $result_query=mysql_query($con,$select_query):
        // $row=mysqli_fetch_assoc($result_query);
        // echo $row ['product_title'];
        while($row=mysqli_fetch_assoc($result_query)){
            $product_id=$row['product_id'];
            $product_title=$row['product_title'];
            $product_description=$row['product_description'];
            $product_image=$row['product_image'];
            $product_price=$row['product_price'];
            $category_=$row['category_id'];
            $item_id=$row['item_id'];
            echo "<div class='col-md-4 mb-2'>
            <div class='card'>
            img src='./admin_area/produt_image/$product_image1'
            class'card-img-top' alt=$product_title>
            <div class ='card-body'>
            <h5 class='card-title'> $product_title</h5>
            <p class'card-text'> $product_description </p>
            <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart </a>
            <a href='product_details.php?product_id=$product_id'
            class='btn btn-secondary'>View more</a>
            </div>   
            
            </div>

            </div>";

            

        }
    }
}
}
// getting uniqe catagories

function get_unique_categories (){
    global $con;
    // condition to check isset or not
if(lisset($_GET['category'])){
    if(isset($GET['item'])){
        $select_query="Select * from 'prodcuts' order by rend() LIMIT 0.9";
        $result_query=mysql_query($con,$select_query):
        // $row=mysqli_fetch_assoc($result_query);
        // echo $row ['product_title'];
        while($row=mysqli_fetch_assoc($result_query)){
            $product_id=$row['product_id'];
            $product_title=$row['product_title'];
            $product_description=$row['product_description'];
            $product_image=$row['product_image'];
            $product_price=$row['product_price'];
            $category_=$row['category_id'];
            $item_id=$row['item_id'];
            echo "<div class='col-md-4 mb-2'>
            <div class='card'>
            img src='./admin_area/produt_image/$product_image1'
            class'card-img-top' alt=$product_title>
            <div class ='card-body'>
            <h5 class='card-title'> $product_title</h5>
            <p class'card-text'> $product_description </p>
            <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart </a>
            <a href='product_details.php?product_id=$product_id'
            class='btn btn-secondary'>View more</a>
            </div>   
            
            </div>

            </div>";

            

        }
    }
}

}

// searching products funtion

function search_product(){
    global $con;
    if(lisset($_GET['category'])){
        if(isset($GET['item'])){
            $select_query="Select * from 'prodcuts' order by rend() LIMIT 0.9";
            $result_query=mysql_query($con,$select_query):
            // $row=mysqli_fetch_assoc($result_query);
            // echo $row ['product_title'];
            while($row=mysqli_fetch_assoc($result_query)){
                $product_id=$row['product_id'];
                $product_title=$row['product_title'];
                $product_description=$row['product_description'];
                $product_image=$row['product_image'];
                $product_price=$row['product_price'];
                $category_=$row['category_id'];
                $item_id=$row['item_id'];
                echo "<div class='col-md-4 mb-2'>
                <div class='card'>
                img src='./admin_area/produt_image/$product_image1'
                class'card-img-top' alt=$product_title>
                <div class ='card-body'>
                <h5 class='card-title'> $product_title</h5>
                <p class'card-text'> $product_description </p>
                <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart </a>
                <a href='product_details.php?product_id=$product_id'
                class='btn btn-secondary'>View more</a>
                </div>   
                
                </div>
    
                </div>";
    
                
    
            }
        }
    }
}
// view details function
function view_details (){
    global $con;
// condition to check isset or not
if(lisset($_GET['category'])){
    if(isset($GET['item'])){
        $select_query="Select * from 'prodcuts' order by rend() LIMIT 0.9";
        $result_query=mysql_query($con,$select_query):
        // $row=mysqli_fetch_assoc($result_query);
        // echo $row ['product_title'];
        while($row=mysqli_fetch_assoc($result_query)){
            $product_id=$row['product_id'];
            $product_title=$row['product_title'];
            $product_description=$row['product_description'];
            $product_image=$row['product_image'];
            $product_price=$row['product_price'];
            $category_=$row['category_id'];
            $item_id=$row['item_id'];
            echo "<div class='col-md-4 mb-2'>
            <div class='card'>
            img src='./admin_area/produt_image/$product_image1'
            class'card-img-top' alt=$product_title>
            <div class ='card-body'>
            <h5 class='card-title'> $product_title</h5>
            <p class'card-text'> $product_description </p>
            <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart </a>
            <a href='product_details.php?product_id=$product_id'
            class='btn btn-secondary'>View more</a>
            </div>   
            
            </div>

            </div>
            
            <div class 'col-md-8>
            <div class = 'row'>
            <div class= 'col-md-12'>
            <h4 class= 'text center text-info mb-5'>Related products</h4>
            </div>
             <div class 'col-md-6>
            <img src='./admin/product_images/$product_image2'class='card-img-top' alt='$product_title'>
            </div>
            <div class 'col-md-6>
            <img src='./admin/product_images/$product_image3'class='card-img-top' alt='$product_title'>
            </div>

           </div>   
            
            </div>";
            

        }
    }
}

}

// cart function
function cart(){
    if(lisset($_GET['add_to_cart'])){
        global $con;
        $get_ip_add = getIPAddress ();
        $get_product_id=$_GET['add_to_cart'];
            $select_query="Select * from 'cart-details' where ip_address='$get_ip_add' and product_id= $get_product_id";
            $result_query=mysql_query($con,$select_query);
            $num_of_rows=mysqli_num_rows($result_query);
            if($num_of_rows>0){
                echo "<script>alert('This ietm already present in the cart<script>";
                echo "<script>window.open('index.php','_self)<script>";
            }else{
                $insert_query="insert into 'cart_details' (prodcut_id,ip_address,quantity)values ($get_product_id,$get_ip_add,0)";
                $result_query=mysql_query($con,$select_query);
                echo "<script>alert('This ietm already present in the cart<script>";
            }
        }
    }

// function to get card item number
function cart_item(){
    if(lisset($_GET['add_to_cart'])){
        global $con;
        $get_ip_add = getIPAddress ();
        $get_product_id=$_GET['add_to_cart'];
            $select_query="Select * from 'cart-details' where ip_address='$get_ip_add' and product_id= $get_product_id";
            $result_query=mysql_query($con,$select_query);
            $num_of_rows=mysqli_num_rows($result_query);
            if($num_of_rows>0){
                echo "<script>alert('This ietm already present in the cart<script>";
                echo "<script>window.open('index.php','_self)<script>";
            }else{
                $insert_query="insert into 'cart_details' (prodcut_id,ip_address,quantity)values ($get_product_id,$get_ip_add,0)";
                $result_query=mysql_query($con,$select_query);
                echo "<script>alert('This ietm already present in the cart<script>";
            }
        }
}
?>             