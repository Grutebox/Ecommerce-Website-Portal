
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
           <meta charset="utf-8">
           <meta name="viewport" content="width=device-width, initial-scale=1">
           <link href="css/style.css" rel="stylesheet">
               <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
           <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
           <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
           <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.17.0/jquery.validate.min.js"></script>
           <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.17.0/additional-methods.min.js"></script>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
           <script src="javascript/script.js"></script>
        <!--   <script src="javascript/validation.js"></script>-->
                               <script>
                                 $(document).ready(function(){
                                   $('.slider').bxSlider({
                                     mode:'horizontal',
                                     auto:true,
                                   });
                                 });
                               </script>
       <title>Veggies Shop</title>
   </head>
   <body>
 <div id="wrapper">
   <div id="header">
 <!--subheader-->
     <div id="subheader">
     <div class="container">
       <p>One place stop for all your vegetables need</p>
   <a href="#">Help</a>
 <a href="#">Download App</a>
 <a href="#">Sign-up/login</a>
 </div>
   </div>
 <div id="main-header">
   <!--logo-->
   <div id="logo">
     <img src="images/gruteboxlogo.png" alt="logo">
   </div>
 <!--search bar -->
   <div id="search">
     <form action="">
       <input class="search-area" type="text" name="text" placeholder="Search your veggies here..........">
       <input class="search-button" type="image" src="images/searchimage.png" value="Search" >
 </div>
    <!--my basket and login section-->
 <div id="basket">
 <a href="#">
  <img src="images/basket.png" alt="mybasket">
 </a>
 </div>
 </div>
 </div>
