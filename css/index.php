<?php
include("includes/function.php");
include("header.php");
include("navbar.php");
include("banner.php");

?>
<!-- header call -->


<!--navigation bar-->

<!-- logo slider-->
<!--banner section-->

<!--bannersection ends -->
<!--categories section-->
<div class="container">
  <div id="heading-block">
    <h2> What we offer? </h2>
  </div>
<!--first category-->
<?php
//   <a href="#">
// <div class="category">

  //  display category with images
  //display_category();
  getCatagory("with_image")
//
//     <img src="images/categories/fruits.jpeg" alt="fruits">
// <span>Fruits</span>
// </div>
// </a>
// <!--second category-->
// <a href="#">
// <div class="category">
//     <img src="images/categories/vegetables.jpg" alt="vegetables">
// <span>Veggies</span>
// </div>
// </a>
// <!--third category-->
//   <a href="#">
// <div class="category">
//     <img src="images/categories/ownveg.jpeg" alt="ownfarm">
// <span>Grow your own!</span>
// </div>
// </a>
// <!--fourth category-->
//   <a href="#">
// <div class="category">
//     <img src="images/categories/livewalls.jpg" alt="Live walls">
// <span>Vertical Walls</span>
// </div>
// </a>

 ?>
<!--Product main page section-->
<div id="heading-block">
  <h2> Products </h2>
</div>
<!--a href="#" -->
<!--first product-->
<div class="products-container">
  <ul class="yetanotherclass">
<!--  <div class="produ">-->
<li>
    <img src="images/Products/potato.jpeg" alt="potato">
  <!--   <div class="prod-trans">
  </div>-->
     <h1 id="potato">Potato</h1>
    <p class="Price">&#8377; 8/kg <span id="Discount">&#8377; 10/Kg</span></p><br>
    <p>Flat 20% off</p><br>
    <button>
  <span class="button-styling-add-to-cart-word">Add To Cart</span></button>

</li>
<?php  get_product() ?>
</ul>
<!-- footer section-->

</div>
<?php include ("footer.php"); ?>
