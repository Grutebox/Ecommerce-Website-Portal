$(function(){
          $("#fname_error_message").hide();
          $("#lname_error_message").hide();
          $("#mob_error_message").hide();
         $("#pin_error_message").hide();


          var error_fname = false;
          var error_lname = false;
          var error_mob = false;
          var error_pin = false;

          $("#form_fname").focusout(function(){
              check_fname();
          });

          $("#form_lname").focusout(function(){
              check_lname();
          });

          $("#form_mob").focusout(function(){
              check_mob();
          });
           
          $("#form_pin").focusout(function(){
              check_pin();
          });


          function check_fname(){
                  var fname_length = $("#form_fname").val().length;
                  if(fname_length < 5 || fname_length > 20 || ''){
                     $("#fname_error_message").html("Should be between 5-20 characters");
                     $("#fname_error_message").show();
                     error_fname =true;
                   } else{
                      $("#fname_error_message").hide();
                   }
          }

          function check_lname(){
                  var lname_length = $("#form_lname").val().length;
                  if(lname_length < 5 || lname_length > 20){
                     $("#lname_error_message").html("Should be between 5-20 characters");
                     $("#lname_error_message").show();
                     error_lname =true;
                   } else{
                      $("#lname_error_message").hide();
                   }
          }

          function check_mob(){
                  /*var pattern = new RegExp(/\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/);*/
                    if(/^(\d{10})$/.test($("#form_mob").val())){
                     $("#mob_error_message").hide();
                   } else{                                     
                     $("#mob_error_message").html("Please provide a valid number");
                     $("#mob_error_message").show();
                     error_mob = true;
                   }

          }
      
         function check_pin(){
                  /*var pattern = new RegExp(//);*/
                    if(/^(\d{6})$/.test($("#form_pin").val())){
                     $("#pin_error_message").hide();
                   } else{                                     
                     $("#pin_error_message").html("Invalide Postal Code");
                     $("#pin_error_message").show();
                     error_pin = true;
                   }

          }


   });
