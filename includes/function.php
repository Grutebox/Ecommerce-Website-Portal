<?php
include("config.php");







//further change required  .... select seller id first then fetch the product- available
//to that seller and seller price also
function get_product(){
	global $db;
	$query = "SELECT * FROM app_products";
	$result = $db->query($query);
	while($row = $result->fetch_assoc()){
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
				 <p><button>
					 <img src='images/basketlogo.png' alt='logo' class='basketlogo'>
					 Add</button></p>

		</li>
				";

		echo "
		<div class='pprods prods-card1'>
	<div class='badge'>
	FLAT 20% OFF
	<img src=images/staricon.png alt='star icon'>
	</div>
		 <div class='prods-image'>
		 	<a href='#'>
			<img src='images/Products/allvegetables/$image' alt=$product_name>
			</a>
		</div>
			<div class='prods-info'> $product_name<br>
				<span class='price-per-kg-line'>Rs. $product_sellprice<span class='original-price'>Rs. $product_price</span></span><br>
				<span>
				<a href='#'>1 Kg</a>
				<a href='#'>2 Kg</a>
				<a href='#'>3 Kg</a>
				</span>
			 </div>
			<div class='adddbutton'>
			<button>
		<span class='button-styling-add-to-cart-word'>Add To Cart</span></button>
			</div>
		</div>

		";

	}

}




//Get all the category name & display it in list in header.php file
function getCatagory($variable ){
	global $db;
	$query = "SELECT * FROM app_category";
	$run_cats = $db->query($query);
	//$run_cats = mysqli_query($db, $get_cats);

	if($variable=="none"){
	while ($row_cats=$run_cats->fetch_assoc()){
		$cat_id = $row_cats['cat_id'];
		$category_name = $row_cats['category_name'];

	echo "<a href='index.php?cat=$cat_id'>$category_name</a>";
		}
	}else if($variable=="with_image"){
		while ($row_cats=mysqli_fetch_array($run_cats)){
			$cat_id = $row_cats['cat_id'];
			$category_name = $row_cats['category_name'];
			$category_image = $row_cats['category_image'];

			echo "
			<a href='category.php?cat_id=$cat_id'>
			<div class='category'>
			    <img src='images/categories/$category_image' alt='$category_name'>
			<span>$category_name</span>
			</div>
			</a>
			";

						}
				}
}

//Fetching the banner to the index page ===> app_slider_image
//all banner images will be inside images/app_slider
function getBanner(){
  global $db;
  $query = "SELECT product_id,image FROM app_slider";
  $get_banner = $db->query($query);
  while($row = $get_banner->fetch_assoc()){
    $image_name = $row['image'];
    $product_id = $row['product_id'];
    echo "<a href='single.php?pro=$product_id'> <li><img src='images/app_slider_image/$image_name'></li></a>";
  }
}



//Get the IP address of the user to save temporary data if the user is not registered yet
function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];

    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }

    return $ip;
}

 ?>
