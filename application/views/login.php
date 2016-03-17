<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Forexlot theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/owl.carousel.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
     <style>
         footer {
             margin: 0;
         }
    </style>
</head>

    <body class="cd-container">

  <section>
     <header class="header-space clearfix">
         <nav class="navbar navbar-default" role="navigation">
             <div class="container">
                 <!-- Brand and toggle get grouped for better mobile display -->
                 <div class="navbar-header">
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                         <span class="sr-only">Toggle navigation</span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                     </button>
                     <a class="navbar-brand" href="<?php echo base_url(); ?>"><img class="logo" src="<?php echo base_url(); ?>img/logo/logo2.png" alt="brand" style="max-width:170px; margin-top: -7px;"></a>
                 </div>

                 <!-- Collect the nav links, forms, and other content for toggling -->
                 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                     <ul class="nav navbar-nav">
<!--
                         <li  ><a href="index.html">HOME</a></li>
                         <li><a href="#">Link</a></li>
-->

                     </ul>

                     <ul class="nav navbar-nav navbar-right">
                         <li><a href="<?php echo base_url(); ?>">Home</a></li>
                         <li><a href="<?php echo base_url(); ?>about">About</a></li>
                         <li><a href="<?php echo base_url(); ?>contact">CONTACT</a></li>
                          <li><a href="<?php echo base_url(); ?>register">Sign Up</a></li>
                         <li class="dropdown">
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other pages <span class="caret"></span></a>
                             <ul class="dropdown-menu" role="menu">
                                 <li><a href="#">Action</a></li>
                                 <li><a href="#">Another action</a></li>
                                 <li><a href="#">Something else here</a></li>
                                 <li class="divider"></li>
                                 <li><a href="<?php echo base_url(); ?>login">login</a></li>
                             </ul>
                         </li>
                     </ul>
                 </div><!-- /.navbar-collapse -->
             </div><!-- /.container-fluid -->
         </nav>

     </header>
 
 </section>
        
<!--
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="owl-carousel-auto" class="owl-carousel owl-theme ">

                    <div class="item"><img src="img/slider/fullimage1.jpg" alt="The Last of us"></div>
                    <div class="item"><img src="img/slider/fullimage2.jpg" alt="GTA V"></div>
                    <div class="item"><img src="img/slider/fullimage3.jpg" alt="Mirror Edge"></div>
                    <div class="item"><img src="img/slider/fullimage4.jpg" alt="Mirror Edge"></div>
                    <div class="item"><img src="img/slider/fullimage5.jpg" alt="Mirror Edge"></div>
                </div>

            </div>
                </div>
    
        </div>         
     </section>
-->
 
    <!-- Page Content -->
   
   <section class="login">
       <!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="login-holder">
   <div class="form-group">
       <label>44444</label>
   </div>
    <form action="<?php echo base_url(); ?>auth/check_login" method="POST">
     <div class="form-group ">
      <label class="control-label requiredField" for="email">
       Email
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="email" name="email" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="number">
      Password
      </label>
      <input class="form-control" id="password" name="password" valu="password" type="text"/>
     </div>
     <div class="form-group">
      <div>
      <div class="checkbox">
            <label>
                <input type="checkbox">
                Remember Me
            </label>
           <a href="<?php echo base_url(); ?>login/forget_password" class="forgot-pass pull-right">Forgot Password</a>
        </div>
       <button class="btn btn-primary " name="submit" type="submit">
        Submit
       </button>
      </div>
     </div>
    </form>
   </div>
  </div>
 </div>
</div>
   </section>

        <!-- Footer -->
        <footer>
           <footer id="footer-area">
    <!-- Footer Links Starts -->
        <div class="footer-links">
        <!-- Container Starts -->
            <div class="container">
                <!-- Information Links Starts -->
                    <div class="col-md-2 col-sm-6">
                        <h5>Information</h5>
                        <ul>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="#">Delivery Information</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms &amp; Conditions</a></li>
                        </ul>
                    </div>
                <!-- Information Links Ends -->
                <!-- My Account Links Starts -->
                    <div class="col-md-2 col-sm-6">
                        <h5>My Account</h5>
                        <ul>
                            <li><a href="#">My orders</a></li>
                            <li><a href="#">My merchandise returns</a></li>
                            <li><a href="#">My credit slips</a></li>
                            <li><a href="#">My addresses</a></li>
                            <li><a href="#">My personal info</a></li>
                        </ul>
                    </div>
                <!-- My Account Links Ends -->                  
                <!-- Customer Service Links Starts -->
                    <div class="col-md-2 col-sm-6">
                        <h5>Service</h5>
                        <ul>
                            <li><a href="contact.html">Contact Us</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Site Map</a></li>
                            <li><a href="#">Affiliates</a></li>
                            <li><a href="#">Specials</a></li>
                        </ul>
                    </div>
                <!-- Customer Service Links Ends -->
                <!-- Follow Us Links Starts -->
                    <div class="col-md-2 col-sm-6">
                        <h5>Follow Us</h5>
                        <ul>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">RSS</a></li>
                            <li><a href="#">YouTube</a></li>
                        </ul>
                    </div>
                <!-- Follow Us Links Ends -->
                <!-- Contact Us Starts -->
                    <div class="col-md-4 col-sm-12 last">
                        <h5>Contact Us</h5>
                        <ul>
                            <li>My Company</li>
                            <li>
                                3016 Tyler Avenue - Florida
                            </li>
                            <li>
                                Email: <a href="#">info@demolink.com</a>
                            </li> 
                            <li>
                                <p>  Tel: <span class="coral">305-336-2932</span></p>    
                            </li>                              
                        </ul>
                         
                    </div>
                <!-- Contact Us Ends -->
            </div>
        <!-- Container Ends -->
        </div>
    <!-- Footer Links Ends -->

    </footer>
        </footer>

        </div> <a href="#0" class="cd-top">Top</a>
    <!-- /.container -->
    <!-- Copyright Area Starts -->
        <div class="copyright">
        <!-- Container Starts -->
            <div class="container-fluid ">
            <!-- Starts -->
                <p class="pull-left">
                    © 2016 your company name here. Designed By <a class="author" href="#">Arham Sanzid</a>
                </p>
            <!-- Ends -->
            <!-- Payment Gateway Links Starts -->
                <ul class="pull-right list-inline">
                    <li>
                        <img src="<?php echo base_url(); ?>img/payment-icon/cirrus.png" alt="PaymentGateway">
                    </li>
                    <li>
                        <img src="<?php echo base_url(); ?>img/payment-icon/paypal.png" alt="PaymentGateway">
                    </li>
                    <li>
                        <img src="<?php echo base_url(); ?>img/payment-icon/visa.png" alt="PaymentGateway">
                    </li>
                    <li>
                        <img src="<?php echo base_url(); ?>img/payment-icon/mastercard.png" alt="PaymentGateway">
                    </li>
                    <li>
                        <img src="<?php echo base_url(); ?>img/payment-icon/americanexpress.png" alt="PaymentGateway">
                    </li>
                </ul>
            <!-- Payment Gateway Links Ends -->
            </div>
        <!-- Container Ends -->
        </div>
    <!-- Copyright Area Ends -->
   
    <!-- jQuery -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>js/owl.carousel.js"></script>
    <script src="<?php echo base_url(); ?>js/custom.js"></script>
    <script src="<?php echo base_url(); ?>js/main.js"></script>
</body>

</html>
