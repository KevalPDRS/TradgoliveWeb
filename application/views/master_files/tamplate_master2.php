<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
  <link href="images/favicon.png" rel="icon" />
  <title>Quickai - Recharge & Bill Payment, Booking HTML5 Template</title>
  <meta name="description" content="Quickai - Recharge & Bill Payment, Booking HTML5 Template">
  <meta name="author" content="harnishdesign.net">

  <!-- Web Fonts
============================================= -->
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Stylesheet
============================================= -->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/all.min.css" />
  <link rel="stylesheet" type="text/css" href="vendor/owl.carousel/assets/owl.carousel.min.css" />
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
  <?php if ($this->session->flashdata("type") != null) { ?>
    <script>
      swal("<?php echo $this->session->flashdata("type"); ?>", "<?php echo $this->session->flashdata("message") ?>", "<?php echo $this->session->flashdata("type"); ?>");
    </script>
  <?php } ?>
  <!-- Preloader -->
  <div id="preloader">
    <div data-loader="dual-ring"></div>
  </div>
  <!-- Preloader End -->

  <!-- Document Wrapper   
============================================= -->
  <div id="main-wrapper">

    <!-- Header
  ============================================= -->
    <header id="header">
      <div class="container">
        <div class="header-row">
          <div class="header-column justify-content-start">

            <!-- Logo
          ============================================= -->
            <div class="logo me-2 me-lg-3"> <a href="Dash" class="d-flex" title="TradGo"><img src="images/tradgo1.png"
                  height="65" width="65" alt="Tradgo" /></a> </div>
            <!-- Logo end -->


          </div>
          
          <div class="row" style="font-weight:bold; margin-left:-50%;">
            <div class="col-6">
              <label style="color:#1B1464;">Wallet:<br>₹<span style="color:#20A7DB; margin-left:5px;"
                  id="Wallet_Balance" name="Wallet_Balance" value=""></span></label>


            </div>
            <div class="col-6" style="margin-top:5%;">
              <label  ><a style="color:#1B1464;" href="Dash">Home</label>
            </div>

          </div>

          <div class="header-column justify-content-end">

            <!-- Primary Navigation
          ============================================= -->
            <!-- <nav class="primary-menu navbar navbar-expand-lg">
              <div id="header-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav">
                  <li class="dropdown active"> <a class="dropdown-toggle" href="#">Home</a>
                    <ul class="dropdown-menu">
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="Dash">Recharge or Bill
                          Payment</a>
                      </li>
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Booking</a>
                      </li>

                  </li>

                </ul>
                </li>
                <li class="dropdown"> <a class="dropdown-toggle" href="#">Recharge & Bill Payment</a>
                  <ul class="dropdown-menu dropdown-menu-sm">
                    <li>
                      <div class="row">
                        <div class="col-lg-12">
                          <ul class="dropdown-mega-submenu">
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Mobile</a>

                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">DTH</a>

                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Data Card</a>

                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Broadband</a>

                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Landline</a>

                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Cable TV</a>

                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle"
                                href="recharge_bill_electricity">Electricity</a>

                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Metro</a>

                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Gas</a>

                            </li>
                            <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Water</a>

                            </li>
                          </ul>
                        </div>

                      </div>
                    </li>Ac Ser
                  </ul>
                </li>
                <li class="dropdown dropdown-mega"> <a class="dropdown-toggle" href="#">Booking</a>
                  <ul class="dropdown-menu">
                    <li>
                      <div class="row">
                        <div class="col-lg"> <span class="sub-title">Home Services</Span>
                          <ul class="dropdown-mega-submenu">
                            <li><a class="dropdown-item" href="#">Plumber</a></li>
                            <li><a class="dropdown-item" href="#">Electrician</a></li>
                            <li><a class="dropdown-item" href="#">Carpenter</a></li>
                            <li><a class="dropdown-item" href="#">DTH Cable Services</a></li>
                            <li><a class="dropdown-item" href="#">TV Service And Repairs</a></li>
                            <li><a class="dropdown-item" href="#">Computer Service And Repaies</a></li>
                            <li><a class="dropdown-item" href="#">Ac Service And Repairs</a></li>
                            <li><a class="dropdown-item" href="#">Refrigerator Service And Repairs</a></li>
                          </ul>
                        </div>
                        <div class="col-lg"> <span class="sub-title">Hotels & Salon</Span>

                        </div>
                        <div class="col-lg"> <span class="sub-title">Cab</Span>

                        </div>
                        <div class="col-lg"> <span class="sub-title">Construction Material</Span>

                        </div>
                        <div class="col-lg"> <span class="sub-title">Real Estate</Span>

                        </div>
                        <div class="col-lg"> <span class="sub-title">Fitness & Health</Span>

                        </div>
                        <div class="col-lg"> <span class="sub-title">Food & Restaurant</Span>

                        </div>
                      </div>
                    </li>
                  </ul>
                </li>

                </ul>
              </div>
            </nav> -->

            <!-- Primary Navigation end -->

            <!-- Collapse Button
      =============================== -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#header-nav">
              <span></span> <span></span> <span></span> </button>

            <div class="vr mx-2 h-25 my-auto"></div>

            <!-- Login Signup
      =============================== -->
            <?php if ($this->session->userdata("usertype_name") == "Agent") {
              //display profile
              ?>
              <nav class="login-signup navbar navbar-expand">
                <ul class="navbar-nav">
                  <li class="profile dropdown active"><a class="pe-0 dropdown-toggle" href="#" title="My Profile"><span
                        class="d-none d-sm-inline-block"><b>
                          <?php echo $this->session->userdata["businessname"]; ?>
                        </b>
                        <br>
                        <b>
                          <?php echo $this->session->userdata["mobile_no"]; ?>
                        </b></span> <span class="d-flex"><img height="50" 
                          src="<?php echo base_url(); ?><?php echo $this->session->userdata["Avtar"]; ?> "></span></a>
                    <ul class="dropdown-menu">
                      <li class="text-center text-3 py-2">Hi,
                        <b style="color: #20A7DB;">
                          <?php echo $this->session->userdata["businessname"]; ?>
                        </b><b style="color: #20A7DB;">
                          <?php echo $this->session->userdata["mobile_no"]; ?>
                        </b>
                      </li>
                      <li class="dropdown-divider mx-n3"></li>
                      <li><a class="dropdown-item" href="profile">
                          <img src="<?php echo base_url(); ?>/images/serviceicon/ic_profileheadfile.PNG" width="30"
                            height="30" /><span style="margin-left: 10px; color: black;">My
                            Profile</span> </a></li>
                      <li><a class="dropdown-item" href="Report">
                          <img src="<?php echo base_url(); ?>/images/serviceicon/ic_policiesnew.PNG" width="30"
                            height="30" /><span style="margin-left: 10px; color: black;">Reports</span> </a></li>
                      <li><a class="dropdown-item" href="Contact_us"><img
                            src="<?php echo base_url(); ?>/images/serviceicon/ic__24x7.PNG" width="30" height="30" /><span
                            style="margin-left: 10px; color: black;"> 24x7 Help & Support</span></a></li>
                      <li><a class="dropdown-item" href="#"><img
                            src="<?php echo base_url(); ?>/images/serviceicon/ic_orderbooking.PNG" width="30"
                            height="30" /><span style="margin-left: 10px; color: black;">Orders & Bookings</span></a></li>
                      <li><a class="dropdown-item" href="#"><img
                            src="<?php echo base_url(); ?>/images/serviceicon/ic_buildingnew.PNG" width="30"
                            height="30" /><span style="margin-left: 10px; color: black;">List Youe Business</span></a>
                      </li>
                      <li><a class="dropdown-item" href="https://tradgo.in/TermsConditions"><img
                            src="<?php echo base_url(); ?>/images/serviceicon/ic_policiesnew.PNG" width="30"
                            height="30" /><span style="margin-left: 10px; color: black;">Policies</span></a></li>
                      <li><a class="dropdown-item" href="#"><img
                            src="<?php echo base_url(); ?>/images/serviceicon/ic_refre_earn.PNG" width="30"
                            height="30" /><span style="margin-left: 10px; color: black;">Refer & Earn</span></a></li>
                      <li><a class="dropdown-item" href="#"><img
                            src="<?php echo base_url(); ?>/images/serviceicon/ic_vouchernew.PNG" width="30"
                            height="30" /><span style="margin-left: 10px; color: black;">Cashback & Offerrs</span></a>
                      </li>
                      <li><a class="dropdown-item" href="#"><img
                            src="<?php echo base_url(); ?>/images/serviceicon/ic_helpsupport.PNG" width="30"
                            height="30" /><span style="margin-left: 10px; color: black;">Help
                            Tutorial</span></a></li>

                      <li><a class="dropdown-item" href="#"><img
                            src="<?php echo base_url(); ?>/images/serviceicon/ic_rate_review.PNG" width="30"
                            height="30" /><span style="margin-left: 10px; color: black;">Rate &
                            Review</span></a></li>
                      <li class="dropdown-divider mx-n3"></li>
                      <li><a class="dropdown-item" href="Login/logout"><img
                            src="<?php echo base_url(); ?>/images/serviceicon/ic_logoutnew.PNG" width="30"
                            height="30" /><span style="margin-left: 10px; color: black;">Log Out</span></a></li>
                    </ul>
                  </li>
                </ul>
              </nav>

              <?php
            } else {
              ?>
              <nav class="login-signup navbar navbar-expand">
                <ul class="navbar-nav">
                  <li class="profile"><a class="pe-0" data-bs-toggle="modal" data-bs-target="#login_modal" href="#"
                      title="Login / Sign up"><span class="d-none d-sm-inline-block">Login / Sign up</span> <span
                        class="user-icon ms-sm-2"><i class="fas fa-user"></i></span></a></li>

                </ul>
              </nav>
              <?php
            } ?>

          </div>
        </div>
      </div>
    </header>
    <!-- Header end -->

    <!-- Content
  ============================================= -->
    <div id="content">

      <!-- Secondary Navigation
    ============================================= -->
      <div class="bg-secondary">
        <div class="container">
          <?php
          $Money_Transfer = "";
         
          if ($this->uri->segment(1) == "Money_Transfer") {
            $Money_Transfer = "active";
          }
         
          ?>
          <ul class="nav secondary-nav">
            <li class="nav-item"> <a class="nav-link <?php echo $Money_Transfer; ?>" href="Money_Transfer"><span><i
                    class="fas fa-mobile-alt"></i></span>
                MONEY TRANSFER</a> </li>
                <li class="nav-item"> <a class="nav-link <?php //echo $Money_Transfer; ?>" href=""><span><i
                    class="fas fa-mobile-alt"></i></span>
                AEPS Payment</a> </li>
                

          </ul>

        </div>
      </div>
    </div>
    <!-- Secondary Navigation end -->
    <?php echo $contents; ?>
    <!-- Tabs
    ============================================= -->

    <!-- Tabs end -->



  </div>
  <!-- Content end -->

  <!-- Mobile App
    ============================================= -->

<!-- Mobile App end -->



  <!-- Footer
  ============================================= -->
  <footer id="footer">
      <section class="section bg-white shadow-md pt-4 pb-3">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-3">
              <div class="featured-box text-center">
                <div class="featured-box-icon"> <i class="fas fa-lock"></i> </div>
                <h4>100% Secure Payments</h4>
                <p>Moving your card details to a much more secured place.</p>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="featured-box text-center">
                <div class="featured-box-icon"> <i class="fas fa-thumbs-up"></i> </div>
                <h4>Trust pay</h4>
                <p>100% Payment Protection. Easy Return Policy.</p>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="featured-box text-center">
                <div class="featured-box-icon"> <i class="fas fa-bullhorn"></i> </div>
                <h4>Refer & Earn</h4>
                <p>Invite a friend to sign up and earn up to ₹150.</p>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="featured-box text-center">
                <div class="featured-box-icon"> <i class="far fa-life-ring"></i> </div>
                <h4>24X7 Support</h4>
                <p>We're here to help. Have a query and need help ? <a href="#">Click here</a></p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="container mt-4">
        <div class="row g-4">
          <div class="col-md-4">
            <p>Payment</p>
            <ul class="payments-types">
              <li><a href="#" target="_blank"> <img src="images/payment/visa.png" alt="visa"></a></li>
              <li><a href="#" target="_blank"> <img src="images/payment/discover.png" alt="discover"></a>
              </li>
              <li><a href="#" target="_blank"> <img src="images/payment/paypal.png" alt="paypal" title="PayPal"></a>
              </li>
              <li><a href="#" target="_blank"> <img src="images/payment/american.png" alt="american express"></a></li>
              <li><a href="#" target="_blank"> <img src="images/payment/mastercard.png" alt="discover"></a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <p>Subscribe</p>
            <div class="input-group newsletter">
              <input class="form-control" placeholder="Your Email Address" name="newsletterEmail" id="newsletterEmail"
                type="text">
              <button class="btn btn-secondary shadow-none px-3" type="submit">Subscribe</button>
            </div>
          </div>
          <div class="col-md-4 d-flex align-items-md-end flex-column">
            <p>Keep in touch</p>
            <ul class="social-icons">
              <li class="social-icons-facebook"><a href="https://m.facebook.com/tradgoindia" target="_blank"><i
                    class="fab fa-facebook-f"></i></a></li>
              <li class="social-icons-twitter"><a href="https://twitter.com/Tradgo2" target="_blank"><i
                    class="fab fa-twitter"></i></a></li>
              <li class="social-icons-youtube"><a href="https://www.youtube.com/@TradgoApp" target="_blank"><i
                    class="fab fa-youtube"></i></a></li>
              <li class="social-icons-instagram"><a href="https://www.instagram.com/tradgo_app/" target="_blank"><i
                    class="fab fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="footer-copyright">
          <ul class="nav justify-content-center">
            <li class="nav-item mb-2"> <a style="color: #252b33;" href="Policies.html">About Us</a> </li>
            <li class="nav-item mb-2"> <a style="color: #252b33;" href="Policies.html">Faq</a> </li>
            <li class="nav-item mb-2"> <a style="color: #252b33;" href="Policies.html">Contact</a> </li>
            <li class="nav-item mb-2"> <a style="color: #252b33;" href="Policies.html">Refund Policy</a> </li>
            <li class="nav-item mb-2"> <a style="color: #252b33;" href="Policies.html">Terms & Conditions</a> </li>
            <li class="nav-item mb-2"> <a style="color: #252b33;" href="Policies.html">Privacy Policy</a> </li>
          </ul>
          <p class="copyright-text">Copyright © 2022 <a href="#">Tradgo</a>. All Rights Reserved.</p>
        </div>
      </div>
    </footer>
  <!-- Footer end -->

  </div>
  <!-- Document Wrapper end -->

  <!-- Back to Top
============================================= -->
  <a id="back-to-top" data-bs-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i
      class="fa fa-chevron-up"></i></a>


  <div id="More" class="modal" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <!-- <h5 class="modal-title" style=" margin-left: 5px;">Select Category</h5>
          <img src="images/bbps.png" height="40px" style=" margin-left: 50%;" /> -->

          <div class="row">

            <h2 class="text-4" style="margin-left: 3%;">Select Category</h2>


          </div>
          <img src="images/bbps.png" height="30" style="margin-left: 40%;" /><br>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>


        </div>

        <div class="modal-body">
          <div id="content">
            <div class="row" style="margin: 5%;">
              <div class="col-3" style="text-align: center;">

                <a href="Dash"><span>
                    <img src="<?php echo base_url(); ?>/images/serviceicon/ic_mobilehome.PNG" width="30"
                      height="30" /></span><br><span> Mobile <br> Prepaid</span></a>
              </div>
              <div class="col-3" style="text-align: center;">

                <a href="Recharge_bill_dth"><span>
                    <img src="<?php echo base_url(); ?>/images/serviceicon/ic_dthhome.png" width="30"
                      height="30" /></span><br><span>DTH</span></a>
              </div>
              <div class="col-3" style="text-align: center;">
                <a href="Dash"><span>
                    <img src="<?php echo base_url(); ?>/images/serviceicon/ic_postpaid1.PNG" width="30"
                      height="30" /></span><br><span>Mobile <br> Postpaid</span></a>
              </div>
              <div class="col-3" style="text-align: center;">
                <a href="recharge_bill_electricity"><span>
                    <img src="<?php echo base_url(); ?>/images/serviceicon/electricity.png" width="30"
                      height="30" /></span><br><span>Electricity</span></a>
              </div>
              <div class="col-3" style="text-align: center;">
                <a href="Recharge_bill_fastag"><span>
                    <img src="<?php echo base_url(); ?>/images/serviceicon/ictolltaxhome.PNG" width="30"
                      height="30" /></span><br><span>FasTAG</span></a>
              </div>
              <div class="col-3" style="text-align: center;">
                <a href="recharge_bill_gas"><span>
                    <img src="<?php echo base_url(); ?>/images/serviceicon/gas.png" width="30"
                      height="30" /></span><br><span>GAS
                    <br>Cylinder</span></a>
              </div>
              <div class="col-3" style="text-align: center;">
                <a href="recharge_bill_piped_gas"><span>
                    <img src="<?php echo base_url(); ?>/images/serviceicon/ic_pipedgas_home.png" width="30"
                      height="30" /></span><br><span>Piped <br>GAS</span></a>
              </div>
              <div class="col-3" style="text-align: center;">
                <a href="recharge_bill_water"><span>
                    <img src="<?php echo base_url(); ?>/images/serviceicon/ic_null_home.PNG" width="30"
                      height="30" /></span><br><span>Water</span></a>
              </div>
              <div class="col-3" style="text-align: center;">
                <a href="Recharge_bill_loanrepayment"><span>
                    <img src="<?php echo base_url(); ?>/images/serviceicon/ic_loan_home.PNG" width="30"
                      height="30" /></span><br><span>Loan <br>Repayment</span></a>
              </div>
              <div class="col-3" style="text-align: center;">
                <a href="Recharge_bill_landline"><span>
                    <img src="<?php echo base_url(); ?>/images/serviceicon/ic_landline_home.PNG" width="30"
                      height="30" /></span><br><span>Landline</span></a>
              </div>
              <div class="col-3" style="text-align: center;">
                <a href="Recharge_bill_insurance"><span>
                    <img src="<?php echo base_url(); ?>/images/serviceicon/ic_insurance_home.PNG" width="30"
                      height="30" /></span><br><span>Insurance</span></a>
              </div>
              <div class="col-3" style="text-align: center;">
                <a href="Recharge_bill_cabletv"><span>
                    <img src="<?php echo base_url(); ?>/images/serviceicon/ic_cable_tv_home.PNG" width="30"
                      height="30" /></span><br><span>Cable<br> TV</span></a>
              </div>
              <div class="col-3" style="text-align: center;">
                <a href="Recharge_bill_broadband"><span>
                    <img src="<?php echo base_url(); ?>/images/serviceicon/ic_broadband_home.PNG" width="30"
                      height="30" /></span><br><span>Broadband</span></a>
              </div>
              <div class="col-3" style="text-align: center;">
                <a href="Recharge_bill_creditcard"><span>
                    <img src="<?php echo base_url(); ?>/images/serviceicon/ic_credit_card_home.PNG" width="30"
                      height="30" /></span> <br><span>Credit <br>Card</span></a>
              </div>
              <div class="col-3" style="text-align: center;">
                <a href="Recharge_bill_municipaltax"><span>
                    <img src="<?php echo base_url(); ?>/images/serviceicon/ic_municipal_tax_home.PNG" width="30"
                      height="30" /></span><br><span>Muncipal<br> TAX</span></a>
              </div>
              <div class="col-3" style="text-align: center;">
                <a href="Recharge_bill_housingsociety"><span>
                    <img src="<?php echo base_url(); ?>/images/serviceicon/ic_housing_society_home.PNG" width="30"
                      height="30" /></span><br><span>Housing <br>Society</span></a>
              </div>

              <div class="col-3" style="text-align: center;">
                <a href="Recharge_bill_clubs_associations"><span>
                    <img src="<?php echo base_url(); ?>/images/serviceicon/ic_club_and_associations.PNG" width="30"
                      height="30" /></span><br><span>Clubs <br>Associations</span></a>
              </div>
              <div class="col-3" style="text-align: center;">
                <a href="Recharge_bill_educationfees"><span>
                    <img src="<?php echo base_url(); ?>/images/serviceicon/ic_education_coast.PNG" width="30"
                      height="30" /></span><br><span>Education <br>Fees</span></a>
              </div>
              <div class="col-3" style="text-align: center;">
                <a href="Recharge_bill_hospital_pathology"><span>
                    <img src="<?php echo base_url(); ?>/images/serviceicon/hospital.png" width="30"
                      height="30" /></span> <br><span>Hospital <br> Pathology</span></a>
              </div>
              <div class="col-3" style="text-align: center;">
                <a href="Recharge_bill_subscriptionfees"><span>
                    <img src="<?php echo base_url(); ?>/images/serviceicon/ic_subscription.PNG" width="30"
                      height="30" /></span><br><span>Subscription <br>Fess</span></a>
              </div>
              <div class="col-3" style="text-align: center;">
                <a href="Recharge_bill_recurring_deposite"><span>
                    <img src="<?php echo base_url(); ?>/images/serviceicon/Recurring_deposit.png" width="30"
                      height="30" /></span><br><span>Recurring <br>Deposit</span></a>
              </div>
              <div class="col-3" style="text-align: center;">
                <a href="Recharge_bill_healthinsurance"><span>
                    <img src="<?php echo base_url(); ?>/images/serviceicon/ic_insurance_home.PNG" width="30"
                      height="30" /></span><br><span>Health <br>Insurance</span></a>
              </div>
              <div class="col-3" style="text-align: center;">
                <a href="Recharge_bill_lifeinsurance"><span>
                    <img src="<?php echo base_url(); ?>/images/serviceicon/ic_insurance_home.PNG" width="30"
                      height="30" /></span><br><span>Life <br>Insurance</span></a>
              </div>
              <div class="col-3" style="text-align: center;">
                <a href="Recharge_bill_muncipal_service"><span>
                    <img src="<?php echo base_url(); ?>/images/serviceicon/ic_municipal_tax_home.PNG" width="30"
                      height="30" /></span><br><span>Muncipal <br>Service</span></a>
              </div>



            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  </div>
  </div>
  <!-- Login Modal
=========================== -->
  <div id="login_modal" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content border-0">
        <div class="modal-body py-4 px-0">
          <button type="button" class="btn-close position-absolute top-0 end-0 mt-1 me-1 mt-sm-2 me-sm-2"
            data-bs-dismiss="modal" aria-label="Close"></button>
          <!-- Login Form
        ====================== -->
          <div class="row">
            <div class="col-11 col-md-10 mx-auto">
              <ul class="nav nav-tabs nav-justified mb-4" role="tablist">
                <li class="nav-item"> <a class="nav-link text-5 lh-lg ">Login</a> </li>
                <li class="nav-item"> <a class="nav-link text-5 lh-lg" href="" data-bs-toggle="modal"
                    data-bs-target="#signup-modal" data-bs-dismiss="modal">Sign Up</a> </li>
              </ul>
              <p class="text-4 fw-300 text-muted text-center mb-4">We are glad to see you again!</p>
              <form id="loginForm" method="post" action="<?php echo base_url(); ?>Login">
                <div class="mb-3">
                  <input class="form-control" id="txtUsername" name="txtUsername" maxlength="10" type="text"
                    placeholder="Username" autocomplete="off" required>
                </div>
                <div class="mb-3">
                  <input class="form-control" id="txtpassword" name="txtpassword" type="password" placeholder="Password"
                    autocomplete="off" required>
                </div>
                <div class="row my-4">
                  <div class="col">
                    <div class="form-check text-3">
                      <input id="remember-me" name="remember" class="form-check-input" type="checkbox">
                      <label class="form-check-label text-2" for="remember-me">Remember Me</label>
                    </div>
                  </div>
                  <div class="col text-2 text-end"><a class="btn-link" href="" data-bs-toggle="modal"
                      data-bs-target="#forgot-password-modal" data-bs-dismiss="modal">Forgot Password ?</a></div>
                </div>
                <div class="d-grid my-4">
                  <button class="btn btn-primary" type="submit">Login</button>
                </div>


                <input type="hidden" id="hidtempoidperatorname" name="hidtempoidperatorname" value="">
                <!-- <input type="hidden" id="hidtemprechargeordersuymmary" name="hidtemprechargeordersuymmary" value=""> -->
                <input type="hidden" id="hidtempnumber" name="hidtempnumber" value="">
                <!-- <input type="hidden" id="hidtempoperator" name="hidtempoperator" value=""> -->
                <input type="hidden" id="hidtempamount" name="hidtempamount" value="">
                <input type="hidden" id="hidtempcustomer_mobile" name="hidtempcustomer_mobile" value="">
                <input type="hidden" id="hidtempoption1" name="hidtempoption1" value="">
                <input type="hidden" id="hidtempMobile_No_label" name="hidtempMobile_No_label" value="">
                <input type="hidden" id="hidtempcustomername" name="hidtempcustomername" value="">
                <input type="hidden" id="hidtempoperatorcode" name="hidtempoperatorcode" value="">
                <input type="hidden" id="hidtempRedirect" name="hidtempRedirect" value="Dash">



              </form>
              <div class="d-flex align-items-center my-3">
                <hr class="flex-grow-1">
                <span class="mx-2 text-2 text-muted">Or Login with Social Profile</span>
                <hr class="flex-grow-1">
              </div>
              <div class="d-flex  flex-column align-items-center mb-3">
                <ul class="social-icons social-icons-colored social-icons-circle">
                  <li class="social-icons-facebook"><a href="#" data-bs-toggle="tooltip" title="Log In with Facebook"><i
                        class="fab fa-facebook-f"></i></a></li>
                  <li class="social-icons-twitter"><a href="#" data-bs-toggle="tooltip" title="Log In with Twitter"><i
                        class="fab fa-twitter"></i></a></li>
                  <li class="social-icons-google"><a href="#" data-bs-toggle="tooltip" title="Log In with Google"><i
                        class="fab fa-google"></i></a></li>
                  <li class="social-icons-linkedin"><a href="#" data-bs-toggle="tooltip" title="Log In with Linkedin"><i
                        class="fab fa-linkedin-in"></i></a></li>
                </ul>
              </div>
              <p class="text-2 text-center mb-0">New to Quickai? <a class="btn-link" href="" data-bs-toggle="modal"
                  data-bs-target="#signup-modal" data-bs-dismiss="modal">Sign Up</a></p>
            </div>
          </div>
          <!-- Login Form End -->
        </div>
      </div>
    </div>
  </div>
  <!-- Login Modal End -->

  <!-- Sign Up Modal
=========================== -->
  <div id="signup-modal" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content border-0">
        <div class="modal-body py-4 px-0">
          <button type="button" class="btn-close position-absolute top-0 end-0 mt-1 me-1 mt-sm-2 me-sm-2"
            data-bs-dismiss="modal" aria-label="Close"></button>
          <!-- Sign Up Form
        ====================== -->
          <div class="row">
            <div class="col-11 col-md-10 mx-auto">
              <ul class="nav nav-tabs nav-justified mb-4" role="tablist">
                <li class="nav-item"> <a class="nav-link text-5 lh-lg" href="" data-bs-toggle="modal"
                    data-bs-target="#login_modal" data-bs-dismiss="modal">Log In</a> </li>
                <li class="nav-item"> <a class="nav-link text-5 lh-lg active">Sign Up</a> </li>
              </ul>
              <p class="text-4 fw-300 text-muted text-center mb-4">Looks like you're new here!</p>
              <form id="signupForm" method="post">
                <div class="mb-3">
                  <input type="text" class="form-control" id="fullName" required placeholder="Your Name">
                </div>
                <div class="mb-3">
                  <input type="email" class="form-control" id="emailAddress" required placeholder="Email Id">
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control" id="loginPassword" required placeholder="Password">
                </div>
                <div class="form-check text-3 my-4">
                  <input id="agree" name="agree" class="form-check-input" type="checkbox">
                  <label class="form-check-label text-2" for="agree">I agree to the <a href="#">Terms</a> and <a
                      href="#">Privacy Policy</a>.</label>
                </div>
                <div class="d-grid my-4">
                  <button class="btn btn-primary" type="submit">Sign Up</button>
                </div>
              </form>
              <div class="d-flex align-items-center my-3">
                <hr class="flex-grow-1">
                <span class="mx-2 text-2 text-muted">Or Sign Up with Social Profile</span>
                <hr class="flex-grow-1">
              </div>
              <div class="d-flex  flex-column align-items-center mb-3">
                <ul class="social-icons social-icons-colored social-icons-circle">
                  <li class="social-icons-facebook"><a href="#" data-bs-toggle="tooltip"
                      title="Sign Up with Facebook"><i class="fab fa-facebook-f"></i></a></li>
                  <li class="social-icons-twitter"><a href="#" data-bs-toggle="tooltip" title="Sign Up with Twitter"><i
                        class="fab fa-twitter"></i></a></li>
                  <li class="social-icons-google"><a href="#" data-bs-toggle="tooltip" title="Sign Up with Google"><i
                        class="fab fa-google"></i></a></li>
                  <li class="social-icons-linkedin"><a href="#" data-bs-toggle="tooltip"
                      title="Sign Up with Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
              </div>
              <p class="text-2 text-center mb-0">Already have an account? <a class="btn-link" href=""
                  data-bs-toggle="modal" data-bs-target="#login_modal" data-bs-dismiss="modal">Log In</a></p>
            </div>
          </div>
          <!-- Sign Up Form End -->
        </div>
      </div>
    </div>
  </div>
  <!-- Sign Up Modal End -->

  <!-- Forgot Password Modal
============================== -->
  <div id="forgot-password-modal" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content border-0">
        <div class="modal-body py-4 px-0">
          <button type="button" class="btn-close position-absolute top-0 end-0 mt-1 me-1 mt-sm-2 me-sm-2"
            data-bs-dismiss="modal" aria-label="Close"></button>
          <!-- Forgot Password Form
        =========================== -->
          <div class="row">
            <div class="col-11 col-md-10 mx-auto">
              <h3 class="text-center mt-3 mb-4">Forgot your password?</h3>
              <p class="text-center text-3 text-muted">Enter your Email or Mobile and we’ll help you reset your
                password.</p>
              <form id="forgotForm" class="form-border" method="post">
                <div class="mb-3">
                  <input type="text" class="form-control" id="emailAddress" required
                    placeholder="Enter Email or Mobile Number">
                </div>
                <div class="d-grid my-4">
                  <button class="btn btn-primary" type="submit">Continue</button>
                </div>
              </form>
              <p class="text-center mb-0"><a class="btn-link" href="" data-bs-toggle="modal"
                  data-bs-target="#login_modal" data-bs-dismiss="modal">Return to Log In</a> <span
                  class="text-muted mx-3">|</span> <a class="btn-link" href="" data-bs-toggle="modal"
                  data-bs-target="#otp-modal" data-bs-dismiss="modal">Request OTP</a></p>
            </div>
          </div>
          <!-- Forgot Password Form End -->
        </div>
      </div>
    </div>
  </div>
  <!-- Forgot Password Modal End -->

  <!-- OTP Modal
============================== -->
  <div id="otp-modal" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content border-0">
        <div class="modal-body py-4 px-0">
          <button type="button" class="btn-close position-absolute top-0 end-0 mt-1 me-1 mt-sm-2 me-sm-2"
            data-bs-dismiss="modal" aria-label="Close"></button>
          <!-- OTP Form
        =========================== -->
          <div class="row">
            <div class="col-11 col-md-10 mx-auto">
              <h3 class="text-center mt-3 mb-4">Two-Step Verification</h3>
              <p class="text-center"><img class="img-fluid" src="images/otp-icon.png" alt="verification"></p>
              <p class="text-muted text-3 text-center">Please enter the OTP (one time password) to verify your account.
                A Code has been sent to <span class="text-dark text-4">+1*******179</span></p>
              <form id="otp-screen" class="form-border" method="post">
                <div class="row gx-3">
                  <div class="col">
                    <input type="text" class="form-control text-center text-6 px-0 py-2" maxlength="1" required
                      autocomplete="off">
                  </div>
                  <div class="col">
                    <input type="text" class="form-control text-center text-6 px-0 py-2" maxlength="1" required
                      autocomplete="off">
                  </div>
                  <div class="col">
                    <input type="text" class="form-control text-center text-6 px-0 py-2" maxlength="1" required
                      autocomplete="off">
                  </div>
                  <div class="col">
                    <input type="text" class="form-control text-center text-6 px-0 py-2" maxlength="1" required
                      autocomplete="off">
                  </div>
                </div>
                <div class="d-grid my-4">
                  <button class="btn btn-primary" type="submit">Verify</button>
                </div>
              </form>
              <p class="text-2 text-center">Not received your code? <a class="btn-link" href="#">Resend code</a></p>
              <p class="text-2 text-center mb-0"><a class="btn-link" href="#">Call me</a></p>
            </div>
          </div>
          <!-- OTP Form End -->
        </div>
      </div>
    </div>
  </div>
  <!-- OTP Modal End -->

  <!-- Script -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="js/theme.js"></script>
  <script>
    $(document).ready(function () {
      getwallet();
    });
    function getwallet() {
      $.ajax({
        url: "<?php echo base_url(); ?>Dash/getwalletbalance",
        type: "GET",
        cache: false,
        
        success: function (response) {
          //alert(response);
          document.getElementById('Wallet_Balance').innerHTML = response;
          
        }

      });
    }

  </script>

</body>

</html>