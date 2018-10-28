<?php
  //signup page
include("includes/function.php");
include("header.php");
include("navbar.php");
?>

<div class="signup-form">
   <form action="yolo.php" method="post">
   <h2>Create an Account</h2>
   <p class="hint-text">Sign up with your social media account or email address</p>
   <div class="social-btn text-center">
     <a href="#" class="btn btn-primary btn-lg"><i class="fa fa-facebook"></i> Facebook</a>
         <a href="#" class="btn btn-danger btn-lg"><i class="fa fa-google"></i> Google</a>
   </div>
   <div class="or-seperator"><b>or</b></div>
       <div class="form-group">
         <input type="text" class="form-control input-lg" name="username" placeholder="Username" required="required">
       </div>
   <div class="form-group">
         <input type="email" class="form-control input-lg" name="email" placeholder="Email Address" required="required">
       </div>
   <div class="form-group">
           <input type="password" class="form-control input-lg" name="password" placeholder="Password" required="required">
       </div>
   <div class="form-group">
           <input type="password" class="form-control input-lg" name="confirm_password" placeholder="Confirm Password" required="required">
       </div>
       <div class="wthree-text">
           <label class="anim">
             <input type="checkbox" class="checkboxterms" required="required">
             <span class"agreement">I Agree To The Terms & Conditions and the use of cookies.</span>
           </label>
           <div class="clear"> </div>
         </div>


       <div class="form-group" style="padding-left:70px;">
         <a href="#" class="button-position2-class ">
           <button class="place-order-class" style="background-color:#e67e22;border-radius:20px;" >
             <span>Sign Up</span>
           </button>
         </a>
       </div>
   </form>
   <div class="text-center">Already a GruteBox member? <a href="#">Login here</a></div>
</div>
