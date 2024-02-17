<?php

include("../user-area/user/dashboard/includes/connection.php");
ob_start();
session_start();

if(isset($_POST['submit'])){
  $online_id= $_POST['online_id'];
  $password= $_POST['password'];

  $sql = "SELECT * FROM users WHERE online_id='$online_id' AND password = '$password'";
  $result = mysqli_query($con, $sql);
  $twofact = rand(999999, 100000);
  if($result->num_rows > 0){
      $row = mysqli_fetch_assoc($result);
     $_SESSION['online_id'] = $row['online_id'];
     
     
      header("location: ../user-area/user/dashboard/2fa.php?two=$twofact");

  }else{
      echo "<script>alert('whoops! Online ID or Password is incorrect')</script>";
  }
  
}
?>


<!doctype html>
<html lang="zxx">
    
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS --> 
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!-- Animate CSS --> 
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="../assets/css/meanmenu.css">
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="../assets/css/boxicons.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="../assets/css/flaticon.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="../assets/css/nice-select.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <!-- Owl Carousel Default CSS -->
    <link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">
    <!-- Odometer CSS -->
    <link rel="stylesheet" href="../assets/css/odometer.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="../assets/css/magnific-popup.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link href="../assets/dashboard/icon_fonts_assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <title>Sign In - Swiss Holding Bank</title>

    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <style>
    .credit-card-area.bg-ffffff .row {
    background-color: #4865FE;
   
    }
    .location-maps-image .location a::before {
    border: 5px solid #4865FE;
    }
    .fun-facts-area::before {
    background-image: url(../assets/img/bg2.jpg);
    }
    .open-account-area::before {
    background-image: url(https://swissholdingbank.com/xassets/img/bg-2.jpg?);
    background-color: #4865ff;
    }
    
    .main-banner-item.banner-item-two {
    background-image: url(assets/img/main-banner/banner-bg-2.jpg);}
    </style>
</head>
<body>
    
    <!-- Start Preloader Area -->
    <div class="preloader bg-4865ff">
        <div class="loader">
            <div class="shadow"></div>
            <div class="box"></div>
        </div>
    </div>
    <!-- End Preloader Area -->

    <!-- Start Top Header Area -->
    <div class="top-header-area bg-color">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <ul class="top-header-information">
                        <li>
                            <i class='bx bx-envelope'></i>
                            <a href="mailto:support@swissholdingbank.com">support@swissholdingbank.com</a>
                        </li>

                        <li>
                            <i class='bx bxs-phone'></i>
                            <a href="tel:+447776704159">+447776704159</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-6 text-right">
                    <ul class="top-header-others color-two">
                        <li>
                            <i class='bx bxs-map'></i>
                            <a href="../page/view/atm-and-bank-locations.html">ATMs location</a>
                        </li>

                        

                        <li>
                            <i class='bx bx-user'></i>
                            <a href="login.html">Sign In</a>
                        </li>
                        <li class="languages-list">
                             <div id="google_translate_element"></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Header Area -->

    <!-- Start Navbar Area -->
    <div class="navbar-area navbar-color-two">
        <div class="main-responsive-nav">
            <div class="container">
                <div class="main-responsive-menu">
                    <div class="logo">
                        <a href="../index.htm">
                            <img src="../assets/img/logo.png" alt="image">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-navbar">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="../index.htm">
                        <img src="../assets/img/logo.png" alt="image">
                    </a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="../index.htm" class="nav-link active">
                                    Home 
                                </a>
                                
                            </li>

                            <li class="nav-item">
                                <a href="../page/view/credit-cards.html" class="nav-link">
                                    Credit Cards
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="../page/view/open-account.php" class="nav-link">
                                    Banking
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="../page/view/contacts.html" class="nav-link">
                                    Loans
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="../page/view/contacts.html" class="nav-link">
                                    Contact
                                </a>
                            </li>

                             <li class="nav-item">
                                <a href="../page/view/atm-and-bank-locations.html" class="nav-link">
                                     ATM and Bank Locations
                                </a>
                            </li>



                                               
                                            
                        </ul>

                        <div class="others-options d-flex align-items-center">
                            

                            <div class="option-item">
                                <a href="../page/view/open-account.php" class="default-btn">Open account</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="others-option-for-responsive color-two">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>
                
                <div class="container">
                    <div class="option-inner">
                        <div class="others-options d-flex align-items-center">
                            

                            <div class="option-item">
                                <a href="../page/view/open-account.php" class="default-btn">Open account</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->


         <section class="open-account-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <h2 class="text-uppercase">Account Login</h2>
                    <p></p>
                </div>

                <div class="open-account-form">
                    <form id="" action="" method="post">
                                           <div class="form-response alert alert-danger" style="display: none;"></div>
                       <div class="form-group use-icon">
                          <input type="text" autocomplete="off" name="online_id" placeholder="Online ID" class="form-control" required=""> <!----> 
                          
                       </div>
                       <div class="form-group use-icon">
                          <input placeholder="Password" name="password" type="password" class="form-control" required=""> 
                            
                       </div>
                       <input type="hidden" name="login" id="login" value="login">
                       <div style="float: none; margin: auto; width: 50%;">
                         <button type="submit" name="submit" class="btn-sm btn-primary">Sign In</button>
                       </div>
                       
                    </form>
                    <!-- <form id="2auth_form" method="post" style="display: none;">
                       <div class="form-response-auth alert alert-danger" style="display: none;"></div>
                       <div style="margin: 0 auto;  white-space: none; font-size: 12.25px;font-weight: 400;" class="left message text-muted">We have sent a message to your email address on file with an authentication code.<br>Once you receive it enter the code below to complete your login</div><br>

                       <div class="form-group use-icon">
                          <input placeholder="Enter 2 factor code" name="code" type="text" class="form-control"> 
                          
                       </div>
                       
                       <input type="hidden" name="btn-2factor" id="2factor-login" value="btn-2factor">
                       <div style="float: none; margin: auto; width: 50%;">
                         <button type="submit" class="btn btn-primary">Submit</button>
                       </div>
                       
                    </form> -->
                </div>
            </div>
        </section>
<!-- Start Footer Area -->
        <section class="footer-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <div class="footer-logo">
                                <h2><a href="../index.htm">Swiss Holding Bank</a></h2>

                                <p>Swiss Holding Bank Online is an online bank platform operating in CA, USA.</p>

                                <ul class="social">
                                    <li>
                                        <a href="" class="facebook" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../send.html?phone=" class="twitter" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../index-1.htm" class="pinterest" target="_blank">
                                            <i class='bx bxl-whatsapp'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="linkedin" target="_blank">
                                            <i class='bx bxl-linkedin'></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h3>Contact</h3>

                            <ul class="footer-contact-info">
                                <li>
                                    <i class='bx bxs-phone'></i>
                                    <span>Phone</span>
                                    <a href="tel:+1(415)-151-2641-357">+1(415)-151-2641</a>
                                </li>
                                <li>
                                    <i class='bx bx-envelope'></i>
                                    <span>Email</span>
                                    <a href="mailto:support@swissholdingbank.com">support@swissholdingbank.com</a>
                                </li>
                                <li>
                                    <i class='bx bx-map'></i>
                                    <span>Address</span>
                                    67  Finance Road, Wilts, CA, US                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget pl-5">
                            <h3>Services</h3>
    
                            <ul class="quick-links">
                                
                                <li>
                                    <a href="../page/view/credit-cards.html">Credit cards</a>
                                </li>
                                <li>
                                    <a href="../page/view/contacts.html">Loans</a>
                                </li>
                                
                                <li>
                                    <a href="login.html">Online banking</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h3>Help & guidance</h3>
    
                            <ul class="quick-links">
                                
                                <li>
                                    <a href="../page/view/faq.html">Online banking help</a>
                                </li>
                                <li>
                                    <a href="page/view/contacts">Help centre</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Footer Area -->

        <!-- Start Copy Right Area -->
        <div class="copyright-area">
            <div class="container">
                <div class="copyright-area-content">
                    <p>
                        <i class='bx bx-copyright'></i>
                       © 2021. All rights reserved by Swiss Holding Bank                    </p>
                </div>
            </div>
        </div>
        <!-- End Copy Right Area -->

        <!-- Start Go Top Area -->
        <div class="go-top">
            <i class='bx bx-up-arrow-alt'></i>
        </div>
        <!-- End Go Top Area -->
        
        <!-- Jquery Slim JS -->
        <script src="../assets/js/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="../assets/js/popper.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="../assets/js/bootstrap.min.js"></script>
        <!-- Meanmenu JS -->
        <script src="../assets/js/jquery.meanmenu.js"></script>
        <!-- Nice Select JS -->
        <script src="../assets/js/jquery.nice-select.min.js"></script>
        <!-- Owl Carousel JS -->
        <script src="../assets/js/owl.carousel.min.js"></script>
        <!-- Magnific Popup JS -->
        <script src="../assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Odometer JS -->
        <script src="../assets/js/odometer.min.js"></script>
        <!-- Jquery Appear JS -->
        <script src="../assets/js/jquery.appear.min.js"></script>
        <!-- Ajaxchimp JS -->
        <script src="../assets/js/jquery.ajaxchimp.min.js"></script>
        <!-- Form Validator JS -->
       <script src="../assets/js/form-validator.min.js"></script>
        <!-- Contact JS -->
        <script src="../assets/js/contact-form-script.js"></script>
        <!-- Wow JS -->
        <script src="../assets/js/wow.min.js"></script>
        <!-- Custom JS -->
        <script src="../assets/js/main.js"></script>
        <script type="text/javascript">
    $(function(){
      $("a[id='account-register']").click(function(e){
        $("#account-register-section").show();
        $("#header-back").show();
        $("#account-login-section").hide();
        

      });
      $("a[id='account-login']").click(function(e){
        $("#header-register").hide();
        $("#account-register-section").hide();
        $("#account-login-section").show();
        $("#account-reset-section").hide();
        $("#header-back").hide();
      });
      $("a[id='account-password']").click(function(e){
        $("#account-reset-section").show();
        $("#header-back").show();
        $("#account-login-section").hide();

      });
      $("a[id='resend-verification']").click(function(e){
        $("#resend-v").html('<span class="fa fa-spinner fa-spin " role="status" aria-hidden="true"></span>');
        $.ajax({
          type: "GET",
          url: "https://swissholdingbank.com/post/verify_email_send"
        }).done(function( data )
        {
          var rData = $.trim(data);
          if (rData != '') {
            $("#resend-v").html(rData);
          }
        });
      });
    });

    //start login
    $(function()
    {
      function login_form_submitted(data) 
      {
        if(data.result == 'success')
        {
          //toastr.success(data.message);
          $(location).attr('href', 'https://swissholdingbank.com/user/dashboard');
        }

        else if(data.result == '2auth')
        {
           //toastr.warning(data.message);
           $("#login_form").hide();
           $("#check").hide();
           $("#2auth_form").show();

        }

        else if(data.result == 'verify')
        {
         $('.form-response').show().html(data.message);
          $(location).attr('href', 'https://swissholdingbank.com/user/verify/email');
          //reverse the response on the button
          $('button[type="button"]', $form).each(function()
          {
            $btn = $(this);
            label = $btn.prop('orig_label');
            if(label)
            {
              $btn.prop('type','submit' ); 
              $btn.text(label);
              $btn.prop('orig_label','');
            }
          });
          
        }

        else {
        
          $('.form-response').show().html(data.message);
          
                //reverse the response on the button
                $('button[type="button"]', $form).each(function()
                {
                  $btn = $(this);
                  label = $btn.prop('orig_label');
                  if(label)
                  {
                    $btn.prop('type','submit' ); 
                    $btn.text(label);
                    $btn.prop('orig_label','');
                  }
                });
                
            }//else
          }

          $('#login_form').submit(function(e)
          {
            e.preventDefault();
            
            $form = $(this);
            //show some response on the button
            $('button[type="submit"]', $form).each(function()
            {
              $btn = $(this);
              $btn.prop('type','button' ); 
              $btn.prop('orig_label',$btn.text());
              $btn.html('<span class="fa fa-spinner fa-spin " role="status" aria-hidden="true"></span>');
               
              });
            

            $.ajax({
              type: "POST",
              url: 'https://swissholdingbank.com/post/login',
              data: $form.serialize(),
              success: login_form_submitted,
              dataType: 'json',
               error: function() {
                    $('.form-response').show().html('Unable to process your request at this time. Please try again later');
                 
                       //reverse the response on the button
                       $('button[type="button"]', $form).each(function()
                       {
                         $btn = $(this);
                         label = $btn.prop('orig_label');
                         if(label)
                         {
                           $btn.prop('type','submit' ); 
                           $btn.text(label);
                           $btn.prop('orig_label','');
                         }
                       });
               }
            });        
            
          });   
          
        });

    //Register
    $(function()
    {
    function register_form_submitted(data) 
      {
       var register = $( '#register' ).val ();
        if(data.result == 'success')
        {
        
        ////toastr.success(data.message);
        $(location).attr('href', 'https://swissholdingbank.com/user/verify/email');
        }

        else {
        
        //toastr.error(data.message);
       
                //reverse the response on the button
                $('button[type="button"]', $form).each(function()
                {
                  $btn = $(this);
                  label = $btn.prop('orig_label');
                  if(label)
                  {
                    $btn.prop('type','submit' ); 
                    $btn.text(label);
                    $btn.prop('orig_label','');
                  }
                });
                
            }//else
          }

          
          $('#register_form').submit(function(e)
          {
            e.preventDefault();
            
            $form = $(this);
            //show some response on the button
            $('button[type="submit"]', $form).each(function()
            {
              $btn = $(this);
              $btn.prop('type','button' ); 
              $btn.prop('orig_label',$btn.text());
              $btn.html('<span class="fa fa-spinner fa-spin " role="status" aria-hidden="true"></span>');
               
              });
            

            $.ajax({
              type: "POST",
              url: 'https://swissholdingbank.com/post/register',
              data: $form.serialize(),
              success: register_form_submitted,
              dataType: 'json' 
            });        
        
          });   
        });
    
    //Register
    $(function()
    {
    function two_factor_form(data) 
      {
       
        if(data.result == 'success')
        {
        
        ////toastr.success(data.message);
        $(location).attr('href', 'https://swissholdingbank.com/user/dashboard');
        }

        else {
        
        $('.form-response-auth').show().html(data.message);
       
                //reverse the response on the button
                $('button[type="button"]', $form).each(function()
                {
                  $btn = $(this);
                  label = $btn.prop('orig_label');
                  if(label)
                  {
                    $btn.prop('type','submit' ); 
                    $btn.text(label);
                    $btn.prop('orig_label','');
                  }
                });
                
            }//else
          }

          
          $('#2auth_form').submit(function(e)
          {
            e.preventDefault();
            
            $form = $(this);
            //show some response on the button
            $('button[type="submit"]', $form).each(function()
            {
              $btn = $(this);
              $btn.prop('type','button' ); 
              $btn.prop('orig_label',$btn.text());
              $btn.html('<span class="fa fa-spinner fa-spin " role="status" aria-hidden="true"></span>');
               
              });
            

            $.ajax({
              type: "POST",
              url: 'https://swissholdingbank.com/post/two_factor',
              data: $form.serialize(),
              success: two_factor_form,
              dataType: 'json',
              error: function() {
                    $('.form-response-auth').show().html('Unable to process your request at this time. Please try again later');
                 
                       //reverse the response on the button
                       $('button[type="button"]', $form).each(function()
                       {
                         $btn = $(this);
                         label = $btn.prop('orig_label');
                         if(label)
                         {
                           $btn.prop('type','submit' ); 
                           $btn.text(label);
                           $btn.prop('orig_label','');
                         }
                       });
               }
            });        
        
          });   
        });
    
    //verification
    $(function()
    {
      function verify_email(data) 
      {
        if(data.result == 'success')
        {
         $("#account-verify-section").hide();
         $("#header-front").hide();
         $("#header-back").hide();
         $("#account-verified-section").show();
         
          
        }
       

        else {
        
          $('#notice-text').html(data.message);
          //toastbox('notification', 10000);
          

          $('#logerror_message').html(data.message);

          $('#logsuccess_message').hide();
          $('#logerror_message').show();
          
                //reverse the response on the button
                $('button[type="button"]', $form).each(function()
                {
                  $btn = $(this);
                  label = $btn.prop('orig_label');
                  if(label)
                  {
                    $btn.prop('type','submit' ); 
                    $btn.text(label);
                    $btn.prop('orig_label','');
                  }
                });
                
            }//else
          }

          $('#verify_form').submit(function(e)
          {
            e.preventDefault();
            
            $form = $(this);
            //show some response on the button
            $('button[type="submit"]', $form).each(function()
            {
              $btn = $(this);
              $btn.prop('type','button' ); 
              $btn.prop('orig_label',$btn.text());
              $btn.html('<span class="fa fa-spinner fa-spin " role="status" aria-hidden="true"></span>');
               
              });
            

            $.ajax({
              type: "POST",
              url: 'https://swissholdingbank.com/post/verify_email',
              data: $form.serialize(),
              success: verify_email,
              dataType: 'json' 
            });        
            
          });   
          
        });

    //password reset
    $(function()
    {
      
      function fpw_form_submitted(data) 
      {
        if(data.result == 'success')
        {
          $("#account-reset-section").hide();
          $("#account-reset2-section").show();
          $("#header-back").hide();
          $("#header-back2").show();
          $("#header-front").show();
          var reset_email = $('#femail').val();
          $('#remail').val(reset_email);

          
        }

        else {
        
          $('#notice-text').html(data.message);
          ////toastbox('notification', 10000);
         
          
                //reverse the response on the button
                $('button[type="button"]', $form).each(function()
                {
                  $btn = $(this);
                  label = $btn.prop('orig_label');
                  if(label)
                  {
                    $btn.prop('type','submit' ); 
                    $btn.text(label);
                    $btn.prop('orig_label','');
                  }
                });
                
            }//else
          }

          $('#fpw_form').submit(function(e)
          {
            e.preventDefault();
            
            $form = $(this);
            //show some response on the button
            $('button[type="submit"]', $form).each(function()
            {
              $btn = $(this);
              $btn.prop('type','button' ); 
              $btn.prop('orig_label',$btn.text());
              $btn.html('<span class="fa fa-spinner fa-spin " role="status" aria-hidden="true"></span>');
               
              });
            

            $.ajax({
              type: "POST",
              url: 'https://swissholdingbank.com/post/password_reminder',
              data: $form.serialize(),
              success: fpw_form_submitted,
              dataType: 'json' 
            });        
            
          });

      function rpw_form_submitted(data) 
      {
        if(data.result == 'success')
        {
         
          $("#account-reset3-section").show();
          $("#account-reset2-section").hide();
          $("#header-back2").hide();
          var reset_email = $('#remail').val();
          var reset_code = $('#rcode').val();
          $('#nemail').val(reset_email);
          $('#ncode').val(reset_code);
         
        }

        else {
        
          $('#notice-text').html(data.message);
         // //toastbox('notification', 10000);
         

          
                //reverse the response on the button
                $('button[type="button"]', $form).each(function()
                {
                  $btn = $(this);
                  label = $btn.prop('orig_label');
                  if(label)
                  {
                    $btn.prop('type','submit' ); 
                    $btn.text(label);
                    $btn.prop('orig_label','');
                  }
                });
                
            }//else
          }

          $('#rpw_form').submit(function(e)
          {
            e.preventDefault();
            
            $form = $(this);
            //show some response on the button
            $('button[type="submit"]', $form).each(function()
            {
              $btn = $(this);
              $btn.prop('type','button' ); 
              $btn.prop('orig_label',$btn.text());
              $btn.html('<span class="fa fa-spinner fa-spin " role="status" aria-hidden="true"></span>');
               
              });
            

            $.ajax({
              type: "POST",
              url: 'https://swissholdingbank.com/post/password_code',
              data: $form.serialize(),
              success: rpw_form_submitted,
              dataType: 'json' 
            });        
            
          });   
       function npw_form_submitted(data) 
      {
        if(data.result == 'success')
        {
         
          $("#account-reset3-section").hide();
          $("#account-login-section").show();
          $('#notice-text').html(data.message);
          //toastbox('notification', 10000);
         
        }

        else {
        
          $('#notice-text').html(data.message);
         // //toastbox('notification', 10000);
         

          
                //reverse the response on the button
                $('button[type="button"]', $form).each(function()
                {
                  $btn = $(this);
                  label = $btn.prop('orig_label');
                  if(label)
                  {
                    $btn.prop('type','submit' ); 
                    $btn.text(label);
                    $btn.prop('orig_label','');
                  }
                });
                
            }//else
          }

          $('#npw_form').submit(function(e)
          {
            e.preventDefault();
            
            $form = $(this);
            //show some response on the button
            $('button[type="submit"]', $form).each(function()
            {
              $btn = $(this);
              $btn.prop('type','button' ); 
              $btn.prop('orig_label',$btn.text());
              $btn.html('<span class="fa fa-spinner fa-spin " role="status" aria-hidden="true"></span>');
               
              });
            

            $.ajax({
              type: "POST",
              url: 'https://swissholdingbank.com/post/password_new',
              data: $form.serialize(),
              success: npw_form_submitted,
              dataType: 'json' 
            });        
            
          });   
          
        });

    </script>        <script type="text/javascript">
            function jacct() {
                var jAcct = $("input[id='joint_account_radio']:checked").length > 0;
                if (jAcct) 
                {
                    var jAcctV = $("input[id='joint_account_radio']:checked").val();
                    if(jAcctV == 1 ){   
                      $('#joint_account').show();
                     }  
                    else {
                     $('#joint_account').hide();
                   } 
                } 

            }
        </script>
          <script type="text/javascript">
        function googleTranslateElementInit() {
          new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
        }
        </script>

        <script type="text/javascript" src="../translate_a/element.js?cb=googleTranslateElementInit"></script>
       
   <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/612aa1b8649e0a0a5cd36eee/1fe78ff7b';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    </body>

</html> 
 
