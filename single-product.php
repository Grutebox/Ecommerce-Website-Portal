<?php
  //single product page
  include("includes/function.php");
  include("header.php");
  include("navbar.php");
 //
 //  if(isset($_GET['pro_id'])){
 //    global $db;
 //    $product_id = $_GET['pro_id'];
 //    $query = "SELECT * FROM app_products WHERE product_id=$product_id";
 //    $result = $db->query($query);
 //    $row = $result->fetch_assoc();
 //      $product_qty = $row['quantity']; //it will be check in seller_product_details table
 //      //if the product s out of stock
 //
 //      $product_id = $row['product_id'];
 //      $product_name = $row['product_name'];
 //      $product_description = $row['description'];
 //      $product_price = $row['price'];
 //      $product_sellprice = $row['sellprice'];
 //      $product_unit = $row['unit'];
 //
 //      $image_result = $db->query("SELECT image FROM product_images WHERE product_id = $product_id LIMIT 1");
 //      $image_row = $image_result->fetch_assoc();
 //      $image = $image_row['image'];
 //      $discount = $product_price/$product_sellprice * 100 ;
 //      //$image = "potato.jpeg";
 //      echo "
 //      <li>
 //          <a href='product.php?pro_id=$product_id'>
 //          <img src='images/Products/$image' alt='$product_name'>
 //          </a>
 //           <h1 id='potato'>$product_name</h1>
 //          <p class='Price'>&#8377; $product_sellprice <span id='Discount'>&#8377; $product_price</span></p><br>
 //          <p>Flat $discount off</p>
 //
 //           $product_description
 //           <button>
 //             <img src='images/basketlogo.png' alt='logo' class='basketlogo'>
 //             Add</button>
 //
 //      </li>
 //          ";
 //
 //
 //
 //  }
 //
 // ?>
 <div class="prod-card">
 <div class="prod-image">
 <img src="images/Products/potato.jpeg" alt="images of potato">
 </div>
<div class="prod-info">
<h2>Potato</h2>
<span class=prod-price>MRP:25<inline class=price-discount>MRP:30</inline></span>

<span class="saving-desc">Total savings 5 Rs</span>
<span class=amount-title>Amount:</span>
<span>
<a href="#">1 Kg</a>
<a href="#">2 Kg</a>
<a href="#">3 Kg</a>
</span><br>
<span class="desc-title">Description:</span>
<span class="prod-description">
  potato po-tah-toh
</span>
<p><button>
  <img src="images/basketlogo.png" alt="logo" class="basketlogo">
  Add</button></p>

</div>
</div>
<div class="container">
  <div id="heading-block">
    <h2> What we offer? </h2>
  </div>
  <?php
  getCatagory("with_image")
  ?>

<?php include("footer.php"); ?>
