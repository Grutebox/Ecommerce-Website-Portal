<?php
  //single product page
  include("includes/function.php");
  include("header.php");
  include("navbar.php");

  if(isset($_GET['pro_id'])){
    global $db;
    $product_id = $_GET['pro_id'];
    $query = "SELECT * FROM app_products WHERE product_id=$product_id";
    $result = $db->query($query);
    $row = $result->fetch_assoc();
      $product_qty = $row['quantity']; //it will be check in seller_product_details table
      //if the product s out of stock

      $product_id = $row['product_id'];
      $product_name = $row['product_name'];
      $product_description = $row['description'];
      $product_price = $row['price'];
      $product_sellprice = $row['sellprice'];
      $product_unit = $row['unit'];

      $image_result = $db->query("SELECT image FROM product_images WHERE product_id = $product_id LIMIT 1");
      $image_row = $image_result->fetch_assoc();
      $image = $image_row['image'];
      $discount = $product_price/$product_sellprice * 100 ;
      //$image = "potato.jpeg";
      echo "
      <li>
          <a href='product.php?pro_id=$product_id'>
          <img src='images/Products/$image' alt='$product_name'>
          </a>
           <h1 id='potato'>$product_name</h1>
          <p class='Price'>&#8377; $product_sellprice <span id='Discount'>&#8377; $product_price</span></p><br>
          <p>Flat $discount off</p>
           <p>
           $product_description
           <button>
             <img src='images/basketlogo.png' alt='logo' class='basketlogo'>
             Add</button></p>

      </li>
          ";



  }
 ?>














<?php include("footer.php"); ?>
