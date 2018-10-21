<?php
  //cart section
  include("includes/function.php");
  include("header.php");
 include("navbar.php");
?>



<div class="flex-container-main-cart-grid">
<div class="box cart-section"> <!--all the other section except the "my cart" word-->
<div class="my-cart-word-and-pincode-flexbox">

  <div class="mycartpart">
  My Cart
  </div>



    <div class="pincode-button">
      <form method="post" action="action_page.php">
  <span class="pinword">  Pin code: </span><input type="text" name="pin_code" class="text-box">
    <input type="submit" value="Check">
    </form>
    </div>

  </div>

      <div class="product-add-section"><!--place where product added will be displayed -->

        <div class="prod-added1">  <ol>  <span class="prod-added">
<li>Potato</li>
<li>Tomatoes</li> </span></div>
            <div class="qty">
            <ul class="defining-list-style"><li>5Kgs</li>
            <li>2kgs</li></div><!--here the final quantity will be shown-->
</ol>
      </div>

 <div class="incrementor"> <!-- where the incrementor function is placed max=qlimit -->
   <span class="incrementor-quantity">Quantity(kgs)</span>
   <input class="incrementor-button-styling" type="number" name="quantity" min="0.5"  max="100" step="0.5" value="0.5">
</div>
<!-- buttons are placed here-->
<div class="buttons-flexbox">
<a href="#" class="button-position1-class">
  <button class="continue-shop-button">

<span>Continue Shopping</span>
</button>
</a>
<a href="#" class="button-position2-class ">
  <button class="place-order-class">
    <span>Place Order</span>
  </button>
</a>
</div>

<!--<div class="place-order-continue-shop-button">
    <a href="#">Place Order</a>
 <a href="#" class="continue-shop-button">Continue Shopping</a>
</div> -->

</div>
<div class="box price-details-column"><!--the right part of cart section is designed here-->
      <div class="price-details">
        Price Details
      </div>
<div class=price-container>
 <div class="pricequote">
Price <span>
      100 Rs.</span> </div>
      <div class="pricequote">
     Delivery Charges <span>
           30 Rs.</span> </div>
           <div class="amountpayable">
<div class="pricequote">
          Amount Payable <span>
                160 Rs.</span></div></div>
              </div><!--

  </div>
</div>
