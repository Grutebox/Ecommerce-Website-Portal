<?php
  //checkout page: address, phone number verification page etc. section
include("includes/function.php");
include("header.php");
include("navbar.php");
?>
<br><br><br>

<div class="container-fluid"><span class="checkout">Checkout details:</span>
 <div class="checkout-details-cont col-md-10 col-sm-12 col-lg-10 ">
   <form action="action_page.php" method="get" id="checkout-form">
    <div class="delivery-address-container" >

      <div class="row-1">
        <div class="col-md-10 ">
          1.Personel Details:
        </div>

        <div class="col-md-3 col-sm-12 col-lg-3">
         <label for="f-name">First Name:</label><span class="compulsory">*</span>
         <input type="text" class="form-control" id="form_fname" placeholder="First Name">
         <span class="error_form" id="fname_error_message"></span>
       </div>

       <div class="col-md-3 col-sm-12 col-lg-3">
         <label for="l-name">Last Name:</label>
         <input type="text" class="form-control" id="form_lname" placeholder="Last Name">
         <span class="error_form" id="lname_error_message"></span>
       </div>

       <div class="col-md-6 col-sm-12 col-lg-6">
         <label for="">Mobile Number:</label><span class="compulsory">*</span>
         <input type="text" class="form-control" id="form_mob" placeholder="Mobile Number">
         <span class="error_form" id="mob_error_message"></span>
       </div>

         <div class="col-md-10">
        Address Details:
        </div><br>
       <div class="col-md-3 col-sm-12 col-lg-3">
        <label for="">House No.:</label>
        <input type="text" class="form-control" id="" placeholder="House no.">
       </div>

      <div class="col-md-3 col-sm-12 col-lg-3">
        <label for="">Area name:</label>
        <input type="text" class="form-control" id="" placeholder="Area name">
      </div>

      <div class="col-md-6 col-sm-12 col-lg-6">
        <label for="">Street details:</label>
        <input type="text" class="form-control" id="" placeholder="Street details">
      </div>

      <div class="col-md-3 col-sm-12 col-lg-3">
        <label for="">Landmarks(Optional):</label>
        <input type="text" class="form-control" id="" placeholder="Landmarks">
      </div>

      <div class="col-md-3 col-sm-12 col-lg-3">
        <label for="">City:</label>
        <input type="text" class="form-control" id="" placeholder="City">
      </div>

      <div class="col-md-6 col-sm-12 col-lg-6">
       <label for="">Pincode:</label>
       <input type="text" class="form-control" id="form_pin" placeholder="Pincode" >
       <span class="error_form" id="pin_error_message"></span>
     </div>

     <div class="col-md-11">
             <label class="checkbox-1">Home
              <input type="checkbox" checked="checked">
              <span class="checkmark"></span>
            </label>

            <label class="checkbox-1">Office
              <input type="checkbox">
              <span class="checkmark"></span>
            </label>
    </div>

      <div class="col-md-12">
               <input type="submit" class="btno btn1" value="Add Address">
               <!-- <button class="btno btn1"> Add Address </button> -->
               <input type="submit" class="btno btn2" value="Continue Shopping">
             </form>
     </div>



    </div>
</div>

            <div class="time-slot-cont">
              <div class="col-md-11">
                2.Time Slot:<br>
                <label class="checkbox-11">7AM - 9AM
                 <input type="checkbox" checked="checked">
                 <span class="checkmark"></span>
               </label>

               <label class="checkbox-11">7PM - 9PM
                 <input type="checkbox">
                 <span class="checkmark"></span>
               </label>
             </div>
            </div>

<div class="payment-option-cont"><img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
  3.Payment Methods:<br>
  <form action="">
    <input type="radio" name="methods" value="credit"> Credit Card<br>
    <input type="radio" name="methods" value="debit"> Debit<br>
    <input type="radio" name="methods" value="cod"> COD
    <div class="col-md-12">
      <input type="submit" class="btno btn1" value="Review and Place Order">
      <!-- <button class="btno btn1"> Add Address </button> -->
      <input type="submit" class="btno btn2" value="Continue Shopping">
    </form>
  </div>



</form>
</div>

</div>


<!-- <div class="order-summary-cont col-md-2 col-sm-12 col-lg-2">baby</div> -->
</div>
