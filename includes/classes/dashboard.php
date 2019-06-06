<?php
/**
 * Created by PhpStorm.
 * User: R'ben
 * Date: 26/May/2019
 * Time: 23:48
 */
//include_once 'popups.php';

class dashboard{
    public function template($title = "2020 Impact Sourcing Summit", $sub = "", $content = 'Welcome To The 2020 Impact Sourcing Summit'){
        echo '<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Basic Page Needs ================================================== -->
   <meta charset="utf-8">

   <!-- Mobile Specific Metas ================================================== -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

   <!-- Site Title -->
   <title>2020 Impact Sourcing Summit</title>



   <!-- CSS
         ================================================== -->
   <!-- Bootstrap -->
   <link rel="stylesheet" href="'.ROOT.'/includes/css/bootstrap.min.css">

   <!-- FontAwesome -->
   <link rel="stylesheet" href="'.ROOT.'/includes/css/font-awesome.min.css">
   <!-- Animation -->
   <link rel="stylesheet" href="'.ROOT.'/includes/css/animate.css">
   <!-- magnific -->
   <link rel="stylesheet" href="'.ROOT.'/includes/css/magnific-popup.css">
   <!-- carousel -->
   <link rel="stylesheet" href="'.ROOT.'/includes/css/owl.carousel.min.css">
   <!-- isotop -->
   <link rel="stylesheet" href="'.ROOT.'/includes/css/isotop.css">
   <!-- ico fonts -->
   <link rel="stylesheet" href="'.ROOT.'/includes/css/xsIcon.css">
   <!-- Template styles-->
   <link rel="stylesheet" href="'.ROOT.'/includes/css/style.css">
   <!-- Responsive styles-->
   <link rel="stylesheet" href="'.ROOT.'/includes/css/responsive.css">

   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn\'t work if you view the page via file:// -->
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

</head>

<body>
   <div class="body-inner">

      <!-- Header start -->
      <header id="header" class="header header-transparent">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
               <!-- logo-->
               <!-- <a class="navbar-brand" href="'.ROOT.'">
                  <img src="'.ROOT.'/includes/images/logos/logo-v2.png" alt="">
               </a> -->
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                  aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"><i class="icon icon-menu"></i></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNavDropdown">
                  <ul class="navbar-nav ml-auto">
                     <li class="dropdown nav-item active">
                        <a href="'.ROOT.'">Home</a>
                     </li>
                     <li class="dropdown nav-item">
                        <a href="#" class="" data-toggle="dropdown">About <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu" role="menu">
                           <li><a href="#popup_about_summit" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">Summit</a></li>
                           <li><a href="#popup_speakers" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">Speakers</a></li>
                           <li><a href="#popup_partners" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">Partners</a></li>
                           <li><a href="#popup_sponsors" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">Sponsors</a></li>
                           <li><a href="#popup_host" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">Host</a></li>
                           <li><a href="#popup_venue" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">Venue</a></li>

'.about::viewAboutSummit().about::viewAllSpeakers().about::viewAllPartners().about::viewAllSponsors().'
   <!-- ============================= =================-->
   <!-- Sponsor Categories -->
   <!-- ================================================= -->
               <div class="row">
                  <div class="col-lg-12 mx-auto">
                     <div class="general-btn text-center">
            <!-- popup start-->
            <section class="ts-pricing gradient" style="background-image: url('.ROOT.'/includes/images/pricing/pricing_img.jpg)">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                        <h2 class="section-title white">
                           <span>Pricing Plans</span>
                           Get your Sponsor Ticket 
                        </h2>
                     </div><!-- section title end-->
                  </div><!-- col end-->
<!-- ====================================================== -->
                  <div class="row">
                     <div class="col-lg-4">
                        <div class="pricing-item ">
                           <img class="pricing-dot " src="'.ROOT.'/includes/images/pricing/dot.png" alt="">
                           <div class="ts-pricing-box">
      
                              <div class="ts-pricing-header">
                                 <h2 class="ts-pricing-name">REGULAR</h2>
                                 <h3 class="ts-pricing-price">
                                    <span class="currency">$</span>219
                                 </h3>
                              </div>
                              <div class="ts-pricing-progress">
                                 <p class="amount-progres-text">Available tickets for this price</p>
                                 <div class="ts-progress">
                                    <div class="ts-progress-inner" style="width: 100%"></div>
                                 </div>
                                 <p class="ts-pricing-value">500/500</p>
                              </div>
                              <div class="promotional-code">
                                 <!-- <p class="promo-code-text">Enter Promotional Code</p> -->
                                 <!-- <a href="#" class="btn pricing-btn">Buy Ticket</a> -->
                                 <a href="#popup_become_sponsor?id=regular" class="view-speaker ts-image-popup btn pricing-btn" data-effect="mfp-zoom-in">Become Sponsor</a>
                                 <p class="vate-text">All prices exclude 25% VAT</p>
                              </div>
                           </div><!-- ts pricing box-->
                           <img class="pricing-dot1 " src="'.ROOT.'/includes/images/pricing/dot.png" alt="">
                        </div>
                     </div><!-- col end-->
<!-- ====================================================== -->
                     <div class="col-lg-4">
                        <div class="pricing-item">
                           <img class="pricing-dot " src="'.ROOT.'/includes/images/pricing/dot.png" alt="">
                           <div class="ts-pricing-box">
                              <span class="big-dot"></span>
                              <div class="ts-pricing-header">
                                 <h2 class="ts-pricing-name">GOLD</h2>
                                 <h3 class="ts-pricing-price">
                                    <span class="currency">$</span>399
                                 </h3>
                              </div>
                              <div class="ts-pricing-progress">
                                 <p class="amount-progres-text">Available tickets for this price</p>
                                 <div class="ts-progress">
                                    <div class="ts-progress-inner" style="width: 75%"></div>
                                 </div>
                                 <p class="ts-pricing-value">350/500</p>
                              </div>
                              <div class="promotional-code">
                                 <!-- <p class="promo-code-text">Enter Promotional Code</p> -->
                                 <!-- <a href="#" class="btn pricing-btn">Buy Ticket</a> -->
                                 <a href="#popup_become_sponsor?id=gold" class="view-speaker ts-image-popup btn pricing-btn" data-effect="mfp-zoom-in">Become Sponsor</a>
                                 <p class="vate-text">All prices exclude 25% VAT</p>
                              </div>
                           </div><!-- ts pricing box-->
                           <img class="pricing-dot1 " src="'.ROOT.'/includes/images/pricing/dot.png" alt="">
                        </div>
                     </div><!-- col end-->
<!-- ====================================================== -->
                     <div class="col-lg-4">
                        <div class="pricing-item">
                           <img class="pricing-dot " src="'.ROOT.'/includes/images/pricing/dot.png" alt="">
                           <div class="ts-pricing-box">
                              <span class="big-dot"></span>
                              <div class="ts-pricing-header">
                                 <h2 class="ts-pricing-name">PLATINUM</h2>
                                 <h3 class="ts-pricing-price">
                                    <span class="currency">$</span>699
                                 </h3>
                              </div>
                              <div class="ts-pricing-progress">
                                 <p class="amount-progres-text">Available tickets for this price</p>
                                 <div class="ts-progress">
                                    <div class="ts-progress-inner" style="width: 50%"></div>
                                 </div>
                                 <p class="ts-pricing-value">250/500</p>
                              </div>
                              <div class="promotional-code">
                                 <!-- <p class="promo-code-text">Enter Promotional Code</p> -->
                                 <!-- <a href="#" class="btn pricing-btn">Buy Ticket</a> -->
                                 <a href="#popup_become_sponsor" class="view-speaker ts-image-popup btn pricing-btn" data-effect="mfp-zoom-in">Become Sponsor</a>
                                 <p class="vate-text">All prices exclude 25% VAT</p>
                              </div>
                           </div><!-- ts pricing box-->
                           <img class="pricing-dot1 " src="'.ROOT.'/includes/images/pricing/dot.png" alt="">
                        </div>
                     </div><!-- col end-->
                  </div>
               </div><!-- container end-->
               <div class="speaker-shap">
                  <img class="shap2" src="'.ROOT.'/includes/images/shap/pricing_memphis1.png" alt="">
               </div>
            </section>
            <!-- popup end-->              
                        </div>
    <!-- ======================================================== -->
                  </div>
               </div>
               <!--/ Content row 3 end -->
            </div>
            <!--/ Container end -->
         </section>
         <!-- Sponsors end -->
   <!-- row end-->
   </div>
   <!-- popup end-->
   
   <!-- popup start-->
        <div id="popup_become_sponsor" class="container ts-speaker-popup mfp-hide">
                     <div class="col-lg-4 offset-lg-1">
                        <div class="hero-form-content">
                           <h2>Register</h2>
                           <p>Welcome, Register Now To Become A Sponsor For Our Summit:</p>
                           <form action="#" method="POST" class="hero-form">
                              <input class="form-control form-control-name" placeholder="Name" name="name" id="name" type="text" required="">
                              <input class="form-control form-control-phone" placeholder="Phone" name="phone" id="phone" type="number">
                              <input class="form-control form-control-email" placeholder="Email" name="email" id="email" type="email" required="">
      
                              <select name="ticket" id="ticket">
                                   <option value="1">REGULAR</option>
                              </select>
                              <button class="btn" type="submit"> Register Now</button>
                           </form>
                        </div>
                     </div>
                      </div><!-- popup end-->
 <!-- ======================================================================= -->
<!-- host --> 
<!-- ======================================================================== -->
<!-- popup start-->
<div id="popup_host" class="container ts-speaker-popup mfp-hide">
 <!-- <a class="navbar-brand" href="index-5.html">
                  <img src="'.ROOT.'/includes/images/logos/logo-v2.png" alt="">
               </a> -->
      
     <div class="row">
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-img">
                              <img src="'.ROOT.'/includes/images/speakers/work3.jpg" alt="">
                           </div>
                        </div><!-- col end-->
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-content">
                              <h3 class="ts-title">MUNU TECHNOLOGIES</h3>
                              <!-- <span class="speakder-designation">Cheif Architecture</span> -->
                              <img class="company-logo" src="'.ROOT.'/includes/images/sponsors/logo-v2.png" alt="">
                              <p>
                                 World is committed to making participation in the event a harass ment free experience
                                 for everyone, regardless of level experience gender, gender identity and expression
                              </p>
                              <h4 class="session-name">
                                 Sessions by David
                              </h4>
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="speaker-session-info">
                                       <h4>Day 1</h4>
                                       <span>
                                                         10.30 - 11.30 am
                                                   </span>
                                       <p>
                                          Marketing Matters
                                       </p>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="speaker-session-info">
                                       <h4>Day 1</h4>
                                       <span>
                                                            10.30 - 11.30 am
                                                      </span>
                                       <p>
                                          Marketing Matters
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="ts-speakers-social">
                                 <a href="#"><i class="fa fa-facebook"></i></a>
                                 <a href="#"><i class="fa fa-twitter"></i></a>
                                 <a href="#"><i class="fa fa-instagram"></i></a>
                                 <a href="#"><i class="fa fa-google-plus"></i></a>
                                 <a href="#"><i class="fa fa-linkedin"></i></a>
                              </div>
                           </div><!-- ts-speaker-popup-content end-->
                        </div><!-- col end-->
                     </div>
      <!-- End faq section --><!-- row end-->
   </div>
   <!-- popup end-->
<!-- ================================================================= -->
                           <!-- sponsors -->
<!--===================================================================-->
 <!-- popup start-->
 <div id="popup_sponsors" class="container ts-speaker-popup mfp-hide">
   <div class="row">
      <div class="col-lg-6">
         <div class="ts-speaker-popup-img">
            <img src="'.ROOT.'/includes/images/speakers/speaker1.jpg" alt="">
         </div>
      </div><!-- col end-->
      <div class="col-lg-6">
         <div class="ts-speaker-popup-content">
            <h3 class="ts-title">David Robert</h3>
            <span class="speakder-designation">Cheif Architecture</span>
            <img class="company-logo" src="'.ROOT.'/includes/images/sponsors/sponsor-6.png" alt="">
            <p>
               World is committed to making participation in the event a harass ment free experience
               for everyone, regardless of level experience gender, gender identity and expression
            </p>
            <h4 class="session-name">
               Sessions by David
            </h4>
            <div class="row">
               <div class="col-lg-6">
                  <div class="speaker-session-info">
                     <h4>Day 1</h4>
                     <span>
                                       10.30 - 11.30 am
                                 </span>
                     <p>
                        Marketing Matters
                     </p>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="speaker-session-info">
                     <h4>Day 1</h4>
                     <span>
                                          10.30 - 11.30 am
                                    </span>
                     <p>
                        Marketing Matters
                     </p>
                  </div>
               </div>
            </div>
            <div class="ts-speakers-social">
               <a href="#"><i class="fa fa-facebook"></i></a>
               <a href="#"><i class="fa fa-twitter"></i></a>
               <a href="#"><i class="fa fa-instagram"></i></a>
               <a href="#"><i class="fa fa-google-plus"></i></a>
               <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
         </div><!-- ts-speaker-popup-content end-->
      </div><!-- col end-->
   </div><!-- row end-->
</div><!-- popup end-->
<!-- ================================================================== -->
                           <!-- Venue -->
<!-- ====================================================================================== -->
 <!-- popup start-->
 <div id="popup_venue" class="container ts-speaker-popup mfp-hide">
   
      <div id="page-banner-area" class="page-banner-area" style="background-image:url('.ROOT.'/includes/images/hero_area/banner_bg.jpg)">
         <!-- Subpage title start -->
         <div class="page-banner-title">
            <div class="text-center">
               <h2>Event Venue</h2>
               <ol class="breadcrumb">
                  <li>
                     <a href="#">Exibit /</a>
                  </li>
                  <li>
                        Venue
                  </li>
               </ol>
            </div>
         </div><!-- Subpage title end -->
      </div><!-- Page Banner end -->

      <!-- ts intro start -->
      <section class="ts-intro-content">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <h2 class="column-title">
                        <span>COnference Hall</span>
                        Brighton Waterfront Hotel,
                        Brighton, London
                     </h2>
                  <div class="intro-content-text">
                     <p>
                           World is committed to making participation in the event a harassment free experience for everyone, regardless of level of experience, gender, gender identity and expression
                     </p>
                     <a href="#">www.brightonwaterfront.com</a>
                  </div><!-- single intro text end-->
               </div><!-- col end-->
               <div class="col-lg-6">
                  <div class="intro-content-img">
                        <img src="'.ROOT.'/includes/images/venue/event-hall.jpg" alt="">
                  </div>
               </div><!-- col end-->
            </div><!-- row end-->
         </div><!-- container end-->
      </section>
      <!-- ts intro end-->

      <section class="ts-venue section-bg">
         <div class="container">
            <div class="row">
                  <div class="col-lg-12">
                     <h2 class="section-title">
                        <span>Hall View</span>
                        Leacture Halls
                     </h2>
                  </div><!-- col end-->
               </div>
            <div class="row">
               <div class="col-lg-3 col-md-6">
                  <div class="venue-img">
            <a href="'.ROOT.'/includes/images/venue/venue-1.jpg" class="ts-popup"><img src="'.ROOT.'/includes/images/venue/venue-1.jpg" alt="" /></a>
                  </div>
               </div><!-- Col end -->
               <div class="col-lg-3 col-md-6">
                  <div class="venue-img">
            <a href="'.ROOT.'/includes/images/venue/venue-2.jpg" class="ts-popup"><img src="'.ROOT.'/includes/images/venue/venue-2.jpg" alt="" /></a>
                  </div>
               </div><!-- Col end -->
               <div class="col-lg-3 col-md-6">
                  <div class="venue-img">
            <a href="'.ROOT.'/includes/images/venue/venue-3.jpg" class="ts-popup"><img src="'.ROOT.'/includes/images/venue/venue-3.jpg" alt="" /></a>
                  </div>
               </div><!-- Col end -->
               <div class="col-lg-3 col-md-6">
                  <div class="venue-img">
            <a href="'.ROOT.'/includes/images/venue/venue-4.jpg" class="ts-popup"><img src="'.ROOT.'/includes/images/venue/venue-4.jpg" alt="" /></a>
                  </div>
               </div><!-- Col end -->

            </div>
         </div>
      </section>
      <!-- Venue end -->

      <section class="ts-venue-feature gradient">
         <div class="container">
            <div class="row">
                  <div class="col-lg-12">
                     <h2 class="section-title white">
                        <span>Stay Info</span>
                        Others Facilities
                     </h2>
                  </div><!-- col end-->
               </div>
            <div class="row">
               <div class="col-lg-4">
                  <div class="single-venue-content text-center">
                        <i class="icon-cycle"></i>
                        <h3 class="ts-venue-title">Transportation</h3>
                        <p>
                           How  you transform your business as technology, consumer, habits industry dynamic
                        </p>
                        <a href="#" class="btn-link-box">Read More</a>
                     </div>
               </div><!-- Col end -->
               <div class="col-lg-4">
                  <div class="single-venue-content text-center">
                        <i class="icon-hotel"></i>
                        <h3 class="ts-venue-title">Accommodation</h3>
                        <p>
                           How  you transform your business as technology, consumer, habits industry dynamic
                        </p>
                        <a href="#" class="btn-link-box">Read More</a>
                     </div>
               </div><!-- Col end -->
               <div class="col-lg-4">
                  <div class="single-venue-content text-center">
                        <i class="icon-food"></i>
                        <h3 class="ts-venue-title">Healthy Food</h3>
                        <p>
                           How  you transform your business as technology, consumer, habits industry dynamic
                        </p>
                        <a href="#" class="btn-link-box">Read More</a>
                     </div>
               </div><!-- Col end -->

            </div>
         </div>
      </section>
      <!--- Venue Feature --->
   <!-- row end-->
</div><!-- popup end-->
</ul>
<!-- ====================================================================================== -->
                <!-- Others -->
<!-- ====================================================================================== -->
                      <li class="dropdown nav-item">
                      <a href="#" class="" data-toggle="dropdown">Others <i class="fa fa-angle-down"></i></a>
                      <ul class="dropdown-menu" role="menu">
                          <!-- <li><a href="about-us.html">About Us</a></li> -->
                          <li><a href="#popup_about" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">More About Uganda</a></li>
                          <li><a href="#popup_tourism" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">Tourism</a></li>
                          <li><a href="#popup_culture" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">Food & Culture</a></li>
                          <li><a href="#popup_entertainment" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">Entertainment</a></li>
                          <li><a href="#popup_transport" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">Transportation</a></li>
                      </ul>
                      </li>
 <!-- ====================================================================================== -->
                      <!-- About Uganda -->
<!-- ====================================================================================== -->
                      <!-- popup start-->
                      <div id="popup_about" class="container ts-speaker-popup mfp-hide">
                          <div class="row">
                              <div class="col-lg-6">
                                  <div class="ts-speaker-popup-img">
                                      <img src="'.ROOT.'/includes/images/speakers/speaker1.jpg" alt="">
                                  </div>
                              </div><!-- col end-->

                              <div class="col-lg-6">
                                  <div class="ts-speaker-popup-content">
                                      <h3 class="ts-title">More About Uganda</h3>

                                      <!--img class="company-logo" src="'.ROOT.'/includes/images/sponsors/sponsor-6.png" alt=""-->
                                      <p>
                                          Uganda is an African country found in the Eastern part of the continent and it\'s dubbed "he Pearl of Africa" because of the beautiful sights and sceneries

                                          <span class="speakder-designation">Visas and Passes</span>
                                      <p> Need a visa to travel to Uganda? Learn more at https://www.immigration.go.ug/content/visas-and-passes</p>
                                      <p>  Apply for a visa at https://visas.immigration.go.ug/</p>
                                      <p> Learn about the visa fees at https://visas.immigration.go.ug/#/help/visa</p>
                                          USD 50 - Uganda tourist Visa
                                          USD 100 - Tourist East African Visa
                                     <p> Visa on Arrival will be issued to delegates with the requirements listed below:

                                      Have a valid passport
                                      Invitation letter from host.
                                      Hotel reservation.
                                      Air Ticket
                                      USD 50 for Uganda tourist Visa.
                                         USD 100 for the tourist East African Visa</p>
                                      </p>
                                      <div class="ts-speakers-social">
                                          <a href="#"><i class="fa fa-facebook"></i></a>
                                          <a href="#"><i class="fa fa-twitter"></i></a>
                                          <a href="#"><i class="fa fa-instagram"></i></a>
                                          <a href="#"><i class="fa fa-google-plus"></i></a>
                                          <a href="#"><i class="fa fa-linkedin"></i></a>
                                      </div>
                                  </div><!-- ts-speaker-popup-content end-->
                              </div><!-- col end-->
                          </div><!-- row end-->
                      </div><!-- popup end-->
<!-- ================================================= -->
                      <!-- Tourism -->
 <!-- ====================================================================================== -->
                      <!-- popup start-->
                      <div id="popup_tourism" class="container ts-speaker-popup mfp-hide">
                          <div class="row">
                              <div class="col-lg-6">
                                  <div class="ts-speaker-popup-img">
                                      <img class="company-logo" src="'.ROOT.'/includes/images/tourism/images (4).jpg" alt="">
                                     <img class="company-logo" src="'.ROOT.'/includes/images/tourism/images (3).jpg" alt="">
                                      <!--img src="'.ROOT.'/includes/images/speakers/speaker1.jpg" alt=""-->
                                  </div>
                              </div><!-- col end-->
                              <div class="col-lg-6">
                                  <div class="ts-speaker-popup-img">
                                      <img class="company-logo" src="'.ROOT.'/includes/images/tourism/images(1).jpg" alt="">
                                     <img class="company-logo" src="'.ROOT.'/includes/images/tourism/images (2).jpg" alt="">
                                      <!--img src="'.ROOT.'/includes/images/speakers/speaker1.jpg" alt=""-->
                                  </div>
                              </div><!-- col end-->
                              <div class="col-lg-6">
                                  <div class="ts-speaker-popup-content">
                                      <h3 class="ts-title">Tourism</h3>
                                      <span class="speakder-designation">Places of attractions in Kampala are:</span>

                                      <p>
                                      <ul>
                                          <li>The Bulange and Lubiri. Bulange is the Buganda Kingdom’s parliament and the Lubiri the King Kabaka’s residence</li>
                                          <li>Kasubi Tombs, which are UNESCO World Heritage</li>
                                          <li> Lake Victoria, the second largest freshwater lake in the world</li>
                                          <li>Uganda National Museum, the biggest and oldest museum in Kampala</li>
                                          <li>Gadhafi Mosque, the national mosque in Uganda</li>
                                      </ul>
                                      </p>
                                      <span class="speakder-designation">Fun facts about Kampala:</span>
                                      <ul>
                                          <li>The Bulange and Lubiri. Bulange is the Buganda Kingdom’s parliament and the Lubiri the King Kabaka’s residence</li>
                                          <li>Kasubi Tombs, which are UNESCO World Heritage</li>
                                          <li> Lake Victoria, the second largest freshwater lake in the world</li>
                                          <li>Uganda National Museum, the biggest and oldest museum in Kampala</li>
                                          <li>Gadhafi Mosque, the national mosque in Uganda</li>
                                      </ul>

                                      <div class="ts-speakers-social">
                                          <a href="#"><i class="fa fa-facebook"></i></a>
                                          <a href="#"><i class="fa fa-twitter"></i></a>
                                          <a href="#"><i class="fa fa-instagram"></i></a>
                                          <a href="#"><i class="fa fa-google-plus"></i></a>
                                          <a href="#"><i class="fa fa-linkedin"></i></a>
                                      </div>
                                  </div><!-- ts-speaker-popup-content end-->
                              </div><!-- col end-->

                          </div><!-- row end-->
                      </div><!-- popup end-->
<!-- ====================================================================================== -->
                      <!-- Food and Culture -->
<!-- ====================================================================================== -->
                      <!-- popup start-->
                      <div id="popup_culture" class="container ts-speaker-popup mfp-hide">
                          <div class="row">
                              <div class="col-lg-6">
                                  <div class="ts-speaker-popup-img">
                                      <img src="'.ROOT.'/includes/images/tourism/rakaraka.jpg" alt="">
                                      <!--img src="'.ROOT.'/includes/images/speakers/speaker1.jpg" alt=""-->
                                  </div>
                              </div><!-- col end-->
                              <div class="col-lg-6">
                                  <div class="ts-speaker-popup-content">
                                      <h3 class="ts-title">Food & Culture</h3>
                                      <span class="speaker-designation">Ethincity:</span>

                                      <p>
                                          Ugandan culture is made up of a diverse range of ethnic groups which comprises of Bantu-speaking people,
                                          Nilotics like the Langi, Acholi, Iteso and Karamojong.

                                          In Uganda, the kanzu is the national dress of men in the country. Women from central and eastern Uganda wear a dress with a
                                          sash tied around the waist and large exaggerated shoulders called a gomesi. Women from the west and north-west drape a long
                                          cloth around their waists and shoulders called suuka. Women from the south-west wear a long baggy skirt and tie a short
                                          matching cloth across their shoulders. Women also wear a floor-length dress called a busuti, which was introduced by
                                          the 19th-century missionaries

                                      </p>
                                      <span class="speaker-designation">Language:</span>
                                      <p>
                                          Being ethnologically diverse country with at least
                                          40 languages in usage,the official languages in Uganda are Swahili and English and Luganda is the most common language spoken.
                                      </p>
                                      <span class="speaker-designation">Religion:</span>
                                      <p>
                                          Uganda is a religious country with almost 85.2 percent of Uganda\'s population subscribing to christianity.
                                      </p>
                                      <div class="ts-speakers-social">
                                          <a href="#"><i class="fa fa-facebook"></i></a>
                                          <a href="#"><i class="fa fa-twitter"></i></a>
                                          <a href="#"><i class="fa fa-instagram"></i></a>
                                          <a href="#"><i class="fa fa-google-plus"></i></a>
                                          <a href="#"><i class="fa fa-linkedin"></i></a>
                                      </div>
                                  </div><!-- ts-speaker-popup-content end-->
                              </div><!-- col end-->

                          </div><!-- row end-->
                      </div><!-- popup end-->
<!-- ================================================= -->
                      <!-- Entertainment -->
<!-- ====================================================================================== -->
                      <!-- popup start-->
                      <div id="popup_entertainment" class="container ts-speaker-popup mfp-hide">
                          <div class="row">
                              <div class="col-lg-6">
                                  <div class="ts-speaker-popup-img">
                                      <img src="'.ROOT.'/includes/images/tourism/rakaraka.jpg" alt="">
                                      <!--img src="'.ROOT.'/includes/images/speakers/speaker1.jpg" alt=""-->
                                  </div>
                              </div><!-- col end-->
                              <div class="col-lg-6">
                                  <div class="ts-speaker-popup-content">
                                      <h3 class="ts-title">Entertainment</h3>
                                      <span class="speakder-designation">Night Life:</span>

                                      <p>
                                          Ugandan culture is made up of a diverse range of ethnic groups which comprises of Bantu-speaking people,
                                          Nilotics like the Langi, Acholi, Iteso and Karamojong.

                                          In Uganda, the kanzu is the national dress of men in the country. Women from central and eastern Uganda wear a dress with a
                                          sash tied around the waist and large exaggerated shoulders called a gomesi. Women from the west and north-west drape a long
                                          cloth around their waists and shoulders called suuka. Women from the south-west wear a long baggy skirt and tie a short
                                          matching cloth across their shoulders. Women also wear a floor-length dress called a busuti, which was introduced by
                                          the 19th-century missionaries

                                      </p>
                                      <span class="speakder-designation">Language:</span>
                                      <p>
                                          Being ethnologically diverse country with at least
                                          40 languages in usage,the official languages in Uganda are Swahili and English and Luganda is the most common language spoken.
                                      </p>
                                      <span class="speakder-designation">Religion:</span>
                                      <p>
                                          Uganda is a religious country with almost 85.2 percent of Uganda\'s population subscribing to christianity.
                                      </p>
                                      <div class="ts-speakers-social">
                                          <a href="#"><i class="fa fa-facebook"></i></a>
                                          <a href="#"><i class="fa fa-twitter"></i></a>
                                          <a href="#"><i class="fa fa-instagram"></i></a>
                                          <a href="#"><i class="fa fa-google-plus"></i></a>
                                          <a href="#"><i class="fa fa-linkedin"></i></a>
                                      </div>
                                  </div><!-- ts-speaker-popup-content end-->
                              </div><!-- col end-->

                          </div><!-- row end-->
                      </div><!-- popup end-->
<!-- ================================================= -->
                      <!-- Transportation-->
<!-- ============================================================= -->
                      <!-- popup start-->
                      <div id="popup_transport" class="container ts-speaker-popup mfp-hide">
                          <div class="row">
                              <div class="col-lg-6">
                                  <div class="ts-speaker-popup-img">
                                      <img src="'.ROOT.'/includes/images/tourism/rakaraka.jpg" alt="">
                                      <!--img src="'.ROOT.'/includes/images/speakers/speaker1.jpg" alt=""-->
                                  </div>
                              </div><!-- col end-->
                              <div class="col-lg-6">
                                  <div class="ts-speaker-popup-content">
                                      <h3 class="ts-title">Transportation</h3>
                                      <p>
                                          The main means of transport in the Ugandan public transport are small mini bussesalso commonly known as "taxis" to most nationals. These vehicles are approved for 14 people and are low priced. Nationwide they are distinguished by their blue chequered markings.
                                          The other commonest means of transport is Boda-boda. These are motor bikes  which are lincensed to carry two passengers and that’s inclusive of the rider. They are popular because there are used to beat the heavy traffic jam on some narrow roads. These boda-boda bikes can be accessed using mobile applications which designed to show the user how much they’re supposed to pay after a journey’s ride.
                                          The other transport option is car hire which also be accessed using phone applications.
                                      </p>
                                      <div class="ts-speakers-social">
                                          <a href="#"><i class="fa fa-facebook"></i></a>
                                          <a href="#"><i class="fa fa-twitter"></i></a>
                                          <a href="#"><i class="fa fa-instagram"></i></a>
                                          <a href="#"><i class="fa fa-google-plus"></i></a>
                                          <a href="#"><i class="fa fa-linkedin"></i></a>
                                      </div>
                                  </div><!-- ts-speaker-popup-content end-->
                              </div><!-- col end-->
                          </div><!-- row end-->
                      </div><!-- popup end-->
<!-- ================================================= -->
<!-- Schedule -->
<!-- ================================================== -->
<li class="dropdown nav-item">
      <li><a href="#popup_schedule" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">Schedule</a></li>               
</li>
<!-- popup start-->
                  <div id="popup_schedule" class="container ts-speaker-popup mfp-hide">
                     <!-- ts schedule start-->
      <section class="ts-schedule">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 mx-auto">
                  <h2 class="section-title">
                     <span>Schedule Details</span>
                     Event Schedules
                  </h2>
                  <div class="ts-schedule-nav">
                     <ul class="nav nav-tabs justify-content-center" role="tablist">
                        <li class="nav-item">
                           <a class="active" title="Click Me" href="#date1" role="tab" data-toggle="tab">
                              <h3>5th June</h3>
                              <span>Friday</span>
                            </a>
                        </li>
                        <li class="nav-item">
                           <a class="" href="#date2" title="Click Me" role="tab" data-toggle="tab">        <h3>6th June</h3>
                               <span>Saturday</span>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="" href="#date3" title="Click Me" role="tab" data-toggle="tab">
                              <h3>7th June</h3>
                              <span>Sunday</span>
                           </a>
                        </li>
                     </ul>
                     <!-- Tab panes -->
                  </div>
               </div><!-- col end-->

            </div><!-- row end-->
            <div class="row">
               <div class="col-lg-12">
                  <div class="tab-content schedule-tabs schedule-tabs-item">
                     <div role="tabpanel" class="tab-pane active" id="date1">
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-left">
                                 <img class="schedule-slot-speakers" src="'.ROOT.'/includes/images/speakers/speaker1.jpg" alt="">
                                 <span class="schedule-slot-time">10.30 - 11.30 AM</span>
                                 <h3 class="schedule-slot-title">Marketing Matters</h3>
                                 <h4 class="schedule-slot-name">@ Henrikon Rebecca</h4>
                                 <p>
                                    How you transform your business technolog consumer habits industry dynamics change
                                    Find out from those leading the charge How you
                                 </p>
                              </div>
                           </div><!-- col end-->
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-right">
                                    <img class="schedule-slot-speakers" src="'.ROOT.'/includes/images/speakers/speaker2.jpg" alt="">
                                 <span class="schedule-slot-time">11.30 - 12.30 PM</span>
                                 <h3 class="schedule-slot-title">Reinventing Experiences</h3>
                                 <h4 class="schedule-slot-name">@ Johnson Agaton</h4>
                                 <p>
                                    How you transform your business technolog consumer habits industry dynamics change
                                    Find out from those leading the charge How you
                                 </p>
                              </div>
                           </div><!-- col end-->
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-left">
                                    <img class="schedule-slot-speakers" src="'.ROOT.'/includes/images/speakers/speaker3.jpg" alt="">
                                 <span class="schedule-slot-time">12.30 - 01.30 PM</span>
                                 <h3 class="schedule-slot-title">Cultures of Creativity</h3>
                                 <h4 class="schedule-slot-name">@ Lundryn Melisa</h4>
                                 <p>
                                    How you transform your business technolog consumer habits industry dynamics change
                                    Find out from those leading the charge How you
                                 </p>
                              </div>
                           </div><!-- col end-->
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-right">
                                    <img class="schedule-slot-speakers" src="'.ROOT.'/includes/images/speakers/speaker4.jpg" alt="">
                                 <span class="schedule-slot-time">01.30 - 02.30 PM</span>
                                 <h3 class="schedule-slot-title">Human Centered Design</h3>
                                 <h4 class="schedule-slot-name">@ Fredric Martinson</h4>
                                 <p>
                                    How you transform your business technolog consumer habits industry dynamics change
                                    Find out from those leading the charge How you
                                 </p>
                              </div>
                           </div><!-- col end-->
                        </div><!-- row end-->
                        <div class="schedule-listing-btn">
                           <a href="#" class="btn">More Details</a>
                        </div>
                     </div><!-- tab pane end-->

                     <div role="tabpanel" class="tab-pane" id="date2">
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-left">
                                    <img class="schedule-slot-speakers" src="'.ROOT.'/includes/images/speakers/speaker5.jpg" alt="">
                                 <span class="schedule-slot-time">02.30 - 03.30 PM</span>
                                 <h3 class="schedule-slot-title">Marketing Matters</h3>
                                 <h4 class="schedule-slot-name">@ Rebecca Henrikon</h4>
                                 <p>
                                    How you transform your business technolog consumer habits industry dynamics change
                                    Find out from those leading the charge How you
                                 </p>
                              </div>
                           </div><!-- col end-->
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-right">
                                    <img class="schedule-slot-speakers" src="'.ROOT.'/includes/images/speakers/speaker6.jpg" alt="">
                                 <span class="schedule-slot-time">03.30 - 04.30 PM</span>
                                 <h3 class="schedule-slot-title">Reinventing Experiences</h3>
                                 <h4 class="schedule-slot-name">@ Hall Building</h4>
                                 <p>
                                    How you transform your business technolog consumer habits industry dynamics change
                                    Find out from those leading the charge How you
                                 </p>
                              </div>
                           </div><!-- col end-->
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-left">
                                    <img class="schedule-slot-speakers" src="'.ROOT.'/includes/images/speakers/speaker7.jpg" alt="">
                                 <span class="schedule-slot-time">04.30 - 05.30 PM</span>
                                 <h3 class="schedule-slot-title">Cultures of Creativity</h3>
                                 <h4 class="schedule-slot-name">@ Hall Building</h4>
                                 <p>
                                    How you transform your business technolog consumer habits industry dynamics change
                                    Find out from those leading the charge How you
                                 </p>
                              </div>
                           </div><!-- col end-->
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-right">
                                    <img class="schedule-slot-speakers" src="'.ROOT.'/includes/images/speakers/speaker8.jpg" alt="">
                                 <span class="schedule-slot-time">05.30 - 06.30 PM</span>
                                 <h3 class="schedule-slot-title">Human Centered Design</h3>
                                 <h4 class="schedule-slot-name">@ Hall Building</h4>
                                 <p>
                                    How you transform your business technolog consumer habits industry dynamics change
                                    Find out from those leading the charge How you
                                 </p>
                              </div>
                           </div><!-- col end-->
                        </div><!-- row end-->
                        <div class="schedule-listing-btn">
                           <a href="#" class="btn">More Details</a>
                        </div>
                     </div>
                     <div role="tabpanel" class="tab-pane" id="date3">
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-left">
                                    <img class="schedule-slot-speakers" src="'.ROOT.'/includes/images/speakers/speaker1.jpg" alt="">
                                 <span class="schedule-slot-time">10.30 - 11.30 AM</span>
                                 <h3 class="schedule-slot-title">Marketing Matters</h3>
                                 <h4 class="schedule-slot-name">@ Hall Building</h4>
                                 <p>
                                    How you transform your business technolog consumer habits industry dynamics change
                                    Find out from those leading the charge How you
                                 </p>
                              </div>
                           </div><!-- col end-->
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-right">
                                    <img class="schedule-slot-speakers" src="'.ROOT.'/includes/images/speakers/speaker2.jpg" alt="">
                                 <span class="schedule-slot-time">11.30 - 12.30 PM</span>
                                 <h3 class="schedule-slot-title">Reinventing Experiences</h3>
                                 <h4 class="schedule-slot-name">@ Hall Building</h4>
                                 <p>
                                    How you transform your business technolog consumer habits industry dynamics change
                                    Find out from those leading the charge How you
                                 </p>
                              </div>
                           </div><!-- col end-->
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-left">
                                    <img class="schedule-slot-speakers" src="'.ROOT.'/includes/images/speakers/speaker3.jpg" alt="">
                                 <span class="schedule-slot-time">01.30 - 02.30 PM</span>
                                 <h3 class="schedule-slot-title">Cultures of Creativity</h3>
                                 <h4 class="schedule-slot-name">@ Hall Building</h4>
                                 <p>
                                    How you transform your business technolog consumer habits industry dynamics change
                                    Find out from those leading the charge How you
                                 </p>
                              </div>
                           </div><!-- col end-->
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-right">
                                    <img class="schedule-slot-speakers" src="'.ROOT.'/includes/images/speakers/speaker4.jpg" alt="">
                                 <span class="schedule-slot-time">03.30 - 04.30 PM</span>
                                 <h3 class="schedule-slot-title">Human Centered Design</h3>
                                 <h4 class="schedule-slot-name">@ Henrikon Rebecca</h4>
                                 <p>
                                    How you transform your business technolog consumer habits industry dynamics change
                                    Find out from those leading the charge How you
                                 </p>
                              </div>
                           </div><!-- col end-->
                        </div><!-- row end-->
                        <div class="schedule-listing-btn">
                           <a href="#" class="btn">More Details</a>
                        </div>
                     </div>
                  </div>

               </div>
            </div>
         </div><!-- container end-->
      </section>
      <!-- ts schedule end-->
                  </div><!-- popup end-->
<!-- ================================================= -->
                     
                     <li class="nav-item">                        
                        <a href="#popup_faq" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">FAQS
                     </li>
 <!-- ====================================================================== -->
               <!-- faq -->
 <!-- ====================================================================== -->
  <!-- popup start-->
  <div id="popup_faq" class="container ts-speaker-popup mfp-hide">
      <section class="ts-faq-sec">
         <div class="container">
            <div class="row">
               <div class="col-lg-8">
                  <div class="faq-content mb-70">
                     <h2 class="column-title">
                        General FAQ\'s
                     </h2>
                     <div class="panel-group faq-item" id="accordion" role="tablist" aria-multiselectable="true">
   
                        <div class="panel faq-list panel-default">
                           <div class="panel-heading" role="tab" id="headingOne">
                              <h4 class="panel-title">
                                 <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                          1. When does Exhibit Conference 2020 will occur?
                                       </a>
                              </h4>
                           </div>
                           <div id="collapseOne" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingOne">
                              <div class="panel-body">
                                    How  you transform your business as technology, consumer, habits industry dynamic
                                    s change? Find out from those leading the charge.
                              </div>
                           </div>
                        </div>
   
                        <div class="panel faq-list panel-default">
                           <div class="panel-heading" role="tab" id="headingTwo">
                              <h4 class="panel-title">
                                 <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                          2. Where does Eventime take place?
                                       </a>
                              </h4>
                           </div>
                           <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                              <div class="panel-body">
                                    How  you transform your business as technology, consumer, habits industry dynamic
                                    s change? Find out from those leading the charge.
                              </div>
                           </div>
                        </div>
   
                        <div class="panel faq-list panel-default">
                           <div class="panel-heading" role="tab" id="headingThree">
                              <h4 class="panel-title">
                                 <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                          <i class="more-less glyphicon glyphicon-plus"></i>
                                          3. How can I get the latest news on Exhibit 2020?
                                       </a>
                              </h4>
                           </div>
                           <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                              <div class="panel-body">
                                 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson
                                 ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                 quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on
                                 it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                 helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                 excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                 aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore
                                 sustainable VHS.
                              </div>
                           </div>
                        </div>
                        <div class="panel faq-list panel-default">
                              <div class="panel-heading" role="tab" id="headingFour">
                                 <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                             4. How can my company sponsor this Event 2018?
                                          </a>
                                 </h4>
                              </div>
                              <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                 <div class="panel-body">
                                       How  you transform your business as technology, consumer, habits industry dynamic
                                       s change? Find out from those leading the charge.
                                 </div>
                              </div>
                           </div>
   
                     </div><!-- panel-group -->
   
                  </div>
                 
               </div><!-- col end -->
               <div class="col-lg-4">
                  <div class="sidebar-widgets">
                     <div class="widget asq-form">
                        <form action="#" method="POST"  class="ts-form">
                           <input type="text" class="form-control" name="name" placeholder="Your Name" id="ts_contact_name">
                           <input type="email" class="form-control" name="email" placeholder="Your Email" id="ts_contact_email">
                           <textarea name="massage" placeholder="Your Question" id="x_contact_massage" class="form-control message-box"
                              cols="30" rows="10"></textarea>
                           <div class="ts-btn-wraper">
                              <input type="submit" class="btn" id="ts_contact_submit" value="SEND QUESTION">
                           </div>
                        </form>
                     </div>
                     <div class="widget social-box">
                        <h4 class="widget-title">Follow Us On:</h4>
                        <ul>
                           <li class="ts-facebook">
                              <a href="#"><i class="fa fa-facebook"></i> </a>
                           </li>
                           <li class="ts-twitter">
                              <a href="#"><i class="fa fa-twitter"></i></a>
                           </li>
                           <li class="ts-google-plus">
                              <a href="#"><i class="fa fa-google-plus"></i></a>
                           </li>
                           <li class="ts-linkedin">
                              <a href="#"><i class="fa fa-linkedin"></i></a>
                           </li>
                           <li class="ts-instagram">
                              <a href="#"><i class="fa fa-instagram"></i></a>
                           </li>
                           <li class="ts-youtube">
                              <a href="#"><i class="fa fa-youtube"></i></a>
                           </li>
   
                        </ul>
                     </div><!-- .widget end -->
   
   
                  </div>
               </div><!-- col end-->
   
            </div><!-- row end-->
         </div><!-- .container end -->
      </section><!-- End faq section -->
   
   </div><!-- popup end-->
   
 <!-- ======================================================================= -->

                     <li class="nav-item">                        
                        <a href="#popup_contact" class="btnview-speaker ts-image-popup" data-effect="mfp-zoom-in">Contact
                     </li>
                     <!-- =================================== -->
                      <!-- popup start-->
                  <div id="popup_contact" class="container ts-speaker-popup mfp-hide">
                     <div class="row">
                        
                        <section class="ts-contact">
                           <div class="container">
                              <div class="row">
                                 <div class="col-lg-8 mx-auto">
                                    <h2 class="section-title text-center">
                                       <span>Get Information</span>
                                       Contact Information
                                    </h2>
                                 </div><!-- col end-->
                              </div>
                              <div class="row">
                                 <div class="col-lg-4">
                                    <div class="single-intro-text single-contact-feature">
                                       <h3 class="ts-title">Tickets info</h3>
                                       <p>
                                          <strong>Name:</strong> Ronaldo König
                                       </p>
                                       <p>
                                          <strong>Phone:</strong> 009-215-5595
                                       </p>
                                       <p>
                                          <strong>Email:</strong> info@example.com
                                       </p>
                                       <span class="count-number fa fa-paper-plane"></span>
                                    </div><!-- single intro text end-->
                                    <div class="border-shap left"></div>
                                 </div><!-- col end-->
                                 <div class="col-lg-4">
                                    <div class="single-intro-text single-contact-feature">
                                       <h3 class="ts-title">Partnerships info</h3>
                                       <p>
                                          <strong>Name:</strong> Ronaldo König
                                       </p>
                                       <p>
                                          <strong>Phone:</strong> 009-215-5595
                                       </p>
                                       <p>
                                          <strong>Email:</strong> info@example.com
                                       </p>
                                       <span class="count-number fa fa-paper-plane"></span>
                                    </div><!-- single intro text end-->
                                    <div class="border-shap left"></div>
                                 </div><!-- col end-->
                                 <div class="col-lg-4">
                                    <div class="single-intro-text single-contact-feature">
                                       <h3 class="ts-title">Programme Details</h3>
                                       <p>
                                          <strong>Name:</strong> Ronaldo König
                                       </p>
                                       <p>
                                          <strong>Phone:</strong> 009-215-5595
                                       </p>
                                       <p>
                                          <strong>Email:</strong> info@example.com
                                       </p>
                                       <span class="count-number fa fa-paper-plane"></span>
                                    </div><!-- single intro text end-->
                                    <div class="border-shap left"></div>
                                 </div><!-- col end-->
                  
                              </div><!-- row end-->
                           </div><!-- container end-->
                           <div class="speaker-shap">
                                 <img class="shap2" src="'.ROOT.'/includes/images/shap/home_schedule_memphis1.png" alt="">
                              </div>
                        </section>
                        <!-- ts contact end-->
                  
                        <section class="ts-contact-map no-padding">
                           <div class="container-fluid">
                              <div class="row">
                                 <div class="col-lg-12 no-padding">
                                    <div class="mapouter">
                                       <div class="gmap_canvas">
                                          <!-- <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Park%20Street%2C%20Jacksonville%2C%20IL%2C%20USA&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                             frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe> -->
                                             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4238.075542978786!2d-0.14258530106536377!3d50.83163078652512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487585765dd0f7f3%3A0x5a144a31ef19ef9d!2sJurys+Inn+Brighton!5e0!3m2!1sen!2sbd!4v1541576429082" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                             <!-- <a href="https://www.pureblack.de">werbeagentur</a></div> -->
                             
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </section>
                  
                        <section class="ts-contact-form">
                           <div class="container">
                              <div class="row">
                                 <div class="col-lg-8 mx-auto">
                                    <h2 class="section-title text-center">
                                       <span>Have Questions?</span>
                                       Send Message
                                    </h2>
                                 </div><!-- col end-->
                              </div>
                              <div class="row">
                                 <div class="col-lg-8 mx-auto">
                                    <form id="contact-form" class="contact-form" action="contact-form.php" method="post">
                                       <div class="error-container"></div>
                                       <div class="row">
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <input class="form-control form-control-name" placeholder="First Name" name="name" id="f-name"
                                                   type="text" required>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <input class="form-control form-control-name" placeholder="Last Name" name="name" id="l-name"
                                                   type="text" required>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <input class="form-control form-control-subject" placeholder="Subject" name="subject" id="subject"
                                                   required>
                                             </div>
                                          </div>
                                          <div class="col-md-6">
                                             <div class="form-group">
                                                <input class="form-control form-control-email" placeholder="Email" name="email" id="email"
                                                   type="email" required>
                                             </div>
                                          </div>
                  
                                       </div>
                                       <div class="form-group">
                                          <textarea class="form-control form-control-message" name="message" id="message" placeholder="Your message...*"
                                             rows="6" required></textarea>
                                       </div>
                                       <div class="text-center"><br>
                                          <button class="btn" type="submit"> Send Message</button>
                                       </div>
                                    </form><!-- Contact form end -->
                                 </div>
                              </div>
                           </div>
                           <div class="speaker-shap">
                              <img class="shap1" src="'.ROOT.'/includes/images/shap/home_schedule_memphis2.png" alt="">
                           </div>
                        </section>
                        
                     </div><!-- row end-->
                  </div><!-- popup end-->
                     <!-- =================================== -->
                     <li class="header-ticket nav-item">                        
                        <a href="#popup_buy_ticket" class="ticket-btn btnview-speaker ts-image-popup" data-effect="mfp-zoom-in">Buy  Ticket
                        </a>
                     </li>
                     <!-- ==================================== -->
                     <!-- popup start-->
                  <div id="popup_buy_ticket" class="container ts-speaker-popup mfp-hide">
                     <section class="ts-pricing gradient" style="background-image: url('.ROOT.'/includes/images/pricing/pricing_img.jpg)">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <h2 class="section-title white">
                     <span>Pricing Plans</span>
                     Get your Ticket
                  </h2>
               </div><!-- section title end-->
            </div><!-- col end-->
            <!-- row end-->
            <div class="row">
               <div class="col-lg-4">
                  <div class="pricing-item ">
                     <img class="pricing-dot " src="'.ROOT.'/includes/images/pricing/dot.png" alt="">
                     <div class="ts-pricing-box">

                        <div class="ts-pricing-header">
                           <h2 class="ts-pricing-name">Early Bird</h2>
                           <h3 class="ts-pricing-price">
                              <span class="currency">$</span>219
                           </h3>
                        </div>
                        <div class="ts-pricing-progress">
                           <p class="amount-progres-text">Available tickets for this price</p>
                           <div class="ts-progress">
                              <div class="ts-progress-inner" style="width: 100%"></div>
                           </div>
                           <p class="ts-pricing-value">500/500</p>
                        </div>
                        <div class="promotional-code">
                           <p class="promo-code-text">Enter Promotional Code</p>
                           <!-- <a href="#" class="btn pricing-btn">Buy Ticket</a> -->
                           <a href="#popup_buy" class="view-speaker ts-image-popup btn pricing-btn" data-effect="mfp-zoom-in">Buy  Ticket</a>

                           <!-- ========================= -->
                              <!-- popup start-->
                  <div id="popup_buy" class="container ts-speaker-popup mfp-hide">
                     
                  <div class="col-lg-4 offset-lg-1">
                     <div class="hero-form-content">
                        <h2>Register Now</h2>
                        <p>
                           How you transform your business as tech consumer, habits industry
                        </p>
                        <form action="./includes/classes/register.php?reg=guest" method="POST" class="hero-form">
                           <input class="form-control form-control-name" placeholder="Name"  name="guestName" id="guestName" type="text" required="">
                           <input class="form-control form-control-name" placeholder="Designation"  name="guestTitle" id="guestTitle" type="text" required="">
                              <input class="form-control form-control-name" placeholder="Company" name="guestCompany" id="guestCompany" type="text" required="">
                           <input class="form-control form-control-phone" placeholder="Phone" name="guestPhone" id="guestPhone" type="number">
                           <input class="form-control form-control-email" placeholder="Email" name="guestEmail" id="guestEmail" type="email" required="">

                           <select name="guestTicket" id="guestTicket">
                              <option value="1">EARLY BIRD </option>
                              <!-- <option value="ticket">REGULAR</option>
                              <option value="ticket">PLATINUM </option> -->
                           </select>

                           <button class="btn" type="submit"> Register Now</button>

                        </form>
                     </div>
                  </div>
                   </div><!-- popup end-->
                           <!-- ========================= -->

                           <p class="vate-text">All prices exclude 25% VAT</p>
                        </div>
                     </div><!-- ts pricing box-->
                     <img class="pricing-dot1 " src="'.ROOT.'/includes/images/pricing/dot.png" alt="">
                  </div>
               </div><!-- col end-->
               <div class="col-lg-4">
                  <div class="pricing-item">
                     <img class="pricing-dot " src="'.ROOT.'/includes/images/pricing/dot.png" alt="">
                     <div class="ts-pricing-box">
                        <span class="big-dot"></span>
                        <div class="ts-pricing-header">
                           <h2 class="ts-pricing-name">Regular</h2>
                           <h3 class="ts-pricing-price">
                              <span class="currency">$</span>399
                           </h3>
                        </div>
                        <div class="ts-pricing-progress">
                           <p class="amount-progres-text">Available tickets for this price</p>
                           <div class="ts-progress">
                              <div class="ts-progress-inner" style="width: 75%"></div>
                           </div>
                           <p class="ts-pricing-value">350/500</p>
                        </div>
                        <div class="promotional-code">
                           <p class="promo-code-text">Enter Promotional Code</p>
                           <!-- <a href="#" class="btn pricing-btn">Buy Ticket</a> -->
                           <a href="#popup_buy1" class="view-speaker ts-image-popup btn pricing-btn" data-effect="mfp-zoom-in">Buy  Ticket</a>
         <div id="popup_buy1" class="container ts-speaker-popup mfp-hide">
                     
                  <div class="col-lg-4 offset-lg-1">
                     <div class="hero-form-content">
                        <h2>Register Now</h2>
                        <p>
                           How you transform your business as tech consumer, habits industry
                        </p>
                        <form action="#" method="POST" class="hero-form">
                           <input class="form-control form-control-name" placeholder="Name" name="name" id="f-name"
                              type="text" required="">
                           <input class="form-control form-control-name" placeholder="Job Title" name="job-title" id="job-title"
                              type="text" required="">
                              <input class="form-control form-control-name" placeholder="Company" name="company-name" id="company-name"
                              type="text" required="">
                           <input class="form-control form-control-phone" placeholder="Phone" name="phone" id="f-phone"
                              type="number">
                           <input class="form-control form-control-email" placeholder="Email" name="email" id="f-email"
                              type="email" required="">

                           <select name="ticket" id="ticket">
                             
                            <option value="ticket">REGULAR</option>
                           
                           </select>

                           <button class="btn" type="submit"> Register Now</button>

                        </form>
                     </div>
                  </div>
                   </div><!-- popup end-->

                           <p class="vate-text">All prices exclude 25% VAT</p>
                        </div>
                     </div><!-- ts pricing box-->
                     <img class="pricing-dot1 " src="'.ROOT.'/includes/images/pricing/dot.png" alt="">
                  </div>
               </div><!-- col end-->
               <div class="col-lg-4">
                  <div class="pricing-item">
                     <img class="pricing-dot " src="'.ROOT.'/includes/images/pricing/dot.png" alt="">
                     <div class="ts-pricing-box">
                        <span class="big-dot"></span>
                        <div class="ts-pricing-header">
                           <h2 class="ts-pricing-name">Platinum</h2>
                           <h3 class="ts-pricing-price">
                              <span class="currency">$</span>699
                           </h3>
                        </div>
                        <div class="ts-pricing-progress">
                           <p class="amount-progres-text">Available tickets for this price</p>
                           <div class="ts-progress">
                              <div class="ts-progress-inner" style="width: 50%"></div>
                           </div>
                           <p class="ts-pricing-value">250/500</p>
                        </div>
                        <div class="promotional-code">
                           <p class="promo-code-text">Enter Promotional Code</p>
                           <!-- <a href="#" class="btn pricing-btn">Buy Ticket</a> -->
                           <a href="#popup_buy2" class="view-speaker ts-image-popup btn pricing-btn" data-effect="mfp-zoom-in">Buy  Ticket</a>
                  <div id="popup_buy2" class="container ts-speaker-popup mfp-hide">
                     
                  <div class="col-lg-4 offset-lg-1">
                     <div class="hero-form-content">
                        <h2>Register Now</h2>
                        <p>
                           How you transform your business as tech consumer, habits industry
                        </p>
                        <form action="#" method="POST" class="hero-form">
                           <input class="form-control form-control-name" placeholder="Name" name="name" id="f-name"
                              type="text" required="">
                           <input class="form-control form-control-name" placeholder="Job Title" name="job-title" id="job-title"
                              type="text" required="">
                              <input class="form-control form-control-name" placeholder="Company" name="company-name" id="company-name"
                              type="text" required="">
                           <input class="form-control form-control-phone" placeholder="Phone" name="phone" id="f-phone"
                              type="number">
                           <input class="form-control form-control-email" placeholder="Email" name="email" id="f-email"
                              type="email" required="">

                           <select name="ticket" id="ticket">
                              <option value="ticket">PLATINUM </option>
                           </select>

                           <button class="btn" type="submit"> Register Now</button>

                        </form>
                     </div>
                  </div>
                   </div><!-- popup end-->
                           <p class="vate-text">All prices exclude 25% VAT</p>
                        </div>
                     </div><!-- ts pricing box-->
                     <img class="pricing-dot1 " src="'.ROOT.'/includes/images/pricing/dot.png" alt="">
                  </div>
               </div><!-- col end-->
            </div>
         </div><!-- container end-->
         <div class="speaker-shap">
            <img class="shap2" src="'.ROOT.'/includes/images/shap/pricing_memphis1.png" alt="">
         </div>
      </section>
                  </div><!-- popup end-->
                     <!-- ==================================== -->
                  </ul>
               </div>
            </nav>
         </div><!-- container end-->
      </header>
      <!--/ Header end -->

      <!-- banner start-->
      <section class="hero-area hero-speakers">
         <div class="banner-item overlay" style="background-image:url('.ROOT.'/includes/images/hero_area/banner7.jpg)">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8">
                     <div class="banner-content-wrap">

                        <p class="banner-info wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">16 to 19 July 2019, Lake Victoria Serena, Kampala</p>
                        <h1 class="banner-title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="700ms">Impact Sourcing Summit</h1>

                        <div class="countdown wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="800ms">
                           <div class="counter-item">
                              <i class="icon icon-ring-1Asset-1"></i>
                              <span class="days">00</span>
                              <div class="smalltext">Days</div>

                           </div>
                           <div class="counter-item">
                              <i class="icon icon-ring-4Asset-3"></i>
                              <span class="hours">00</span>
                              <div class="smalltext">Hours</div>
                           </div>
                           <div class="counter-item">
                              <i class="icon icon-ring-3Asset-2"></i>
                              <span class="minutes">00</span>
                              <div class="smalltext">Minutes</div>
                           </div>
                           <div class="counter-item">
                              <i class="icon icon-ring-4Asset-3"></i>
                              <span class="seconds">00</span>
                              <div class="smalltext">Seconds</div>
                           </div>
                        </div>
                        <!-- Countdown end -->
                        <div class="banner-btn wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="800ms">
                           <a href="#" class="btn">Buy Ticket</a>
                        </div>

                     </div>
                     <!-- Banner content wrap end -->
                  </div><!-- col end-->
                  
               </div><!-- row end-->
            </div-->
            <!-- Container end -->
         </div>
      </section>
      <!-- banner end-->

      <!-- ts intro start -->
      <section class="ts-event-outcome event-intro">
         <div class="container">
            <div class="row">
               <div class="col-lg-4">
                  <div class="">
                     <div class="outcome-content ts-exp-content">
                        <h2 class="column-title">
                           <span>Event Outcomes</span>
                           Learn new things and
                           connect people
                        </h2>
                        <p>
                           How you transform your business technology consumer, habits industry dynamic change the Find
                           out from those leading
                        </p>
                        <a href="#" class="btn">Leanr More</a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="outcome-content">
                     <div class="outcome-img overlay">
                        <img class="" src="'.ROOT.'/includes/images/about/learn_img.jpg" alt="">
                     </div>
                     <h3 class="img-title text-white"><a href="#" class="text-white">Learn Things</a></h3>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="outcome-content">
                     <div class="outcome-img overlay">
                        <img class="" src="'.ROOT.'/includes/images/about/connect_img.jpg" alt="">
                     </div>
                     <h3 class="img-title"><a href="#" class="text-white">connect People</a></h3>
                  </div>
               </div>

            </div>
         </div>
      </section>
      <!-- ts intro end-->
      <!-- ts funfact start-->
      <section class="ts-funfact" style="background-image: url('.ROOT.'/includes/images/funfact_bg.jpg)">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-6">
                  <div class="ts-single-funfact">
                     <h3 class="funfact-num"><span class="counterUp" data-counter="43">43</span>+</h3>
                     <h4 class="funfact-title">Our Visionary
                        Speakers</h4>
                  </div>
               </div><!-- col end-->
               <div class="col-lg-3 col-md-6">
                  <div class="ts-single-funfact">
                     <h3 class="funfact-num"><span class="counterUp" data-counter="62">62</span></h3>
                     <h4 class="funfact-title">International Sponsors</h4>
                  </div>
               </div><!-- col end-->
               <div class="col-lg-3 col-md-6">
                  <div class="ts-single-funfact">
                     <h3 class="funfact-num"><span class="counterUp" data-counter="28">28</span>+</h3>
                     <h4 class="funfact-title">Workshops
                        We offer</h4>
                  </div>
               </div><!-- col end-->
               <div class="col-lg-3 col-md-6">
                  <div class="ts-single-funfact">
                     <h3 class="funfact-num"><span class="counterUp" data-counter="950">950</span>+</h3>
                     <h4 class="funfact-title">Event
                        Participants</h4>
                  </div>
               </div><!-- col end-->
            </div><!-- row end-->
         </div><!-- container end-->
      </section>
      <!-- ts funfact end-->
      <!-- ts speaker start-->
      <section id="ts-speakers" class="ts-speakers" style="background-image:url('.ROOT.'/includes/images/speakers/speaker_bg.png)">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 mx-auto">
                  <h2 class="section-title text-center">
                     <span>Listen to the</span>
                     Event Speakers
                  </h2>
               </div><!-- col end-->
            </div><!-- row end-->
            <div class="row">
               <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                  <div class="ts-speaker">
                     <div class="speaker-img">
                        <img class="img-fluid" src="'.ROOT.'/includes/images/speakers/speaker1.jpg" alt="">
                        <a href="#popup_1" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">
                                    <i class="icon icon-plus"></i>
                                </a>
                     </div>
                     <div class="ts-speaker-info">
                        <h3 class="ts-title"><a href="#">Fredric Martinsson</a></h3>
                        <p>
                           Founder, Edilta
                        </p>
                     </div>
                  </div>
                  <!-- popup start-->
                  <div id="popup_1" class="container ts-speaker-popup mfp-hide">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-img">
                              <img src="'.ROOT.'/includes/images/speakers/speaker1.jpg" alt="">
                           </div>
                        </div><!-- col end-->
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-content">
                              <h3 class="ts-title">David Robert</h3>
                              <span class="speakder-designation">Cheif Architecture</span>
                              <img class="company-logo" src="'.ROOT.'/includes/images/sponsors/sponsor-6.png" alt="">
                              <p>
                                 World is committed to making participation in the event a harass ment free experience
                                 for everyone, regardless of level experience gender, gender identity and expression
                              </p>
                              <h4 class="session-name">
                                 Sessions by David
                              </h4>
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="speaker-session-info">
                                       <h4>Day 1</h4>
                                       <span>
                                                   10.30 - 11.30 am
                                             </span>
                                       <p>
                                          Marketing Matters
                                       </p>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="speaker-session-info">
                                       <h4>Day 1</h4>
                                       <span>
                                                      10.30 - 11.30 am
                                                </span>
                                       <p>
                                          Marketing Matters
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="ts-speakers-social">
                                 <a href="#"><i class="fa fa-facebook"></i></a>
                                 <a href="#"><i class="fa fa-twitter"></i></a>
                                 <a href="#"><i class="fa fa-instagram"></i></a>
                                 <a href="#"><i class="fa fa-google-plus"></i></a>
                                 <a href="#"><i class="fa fa-linkedin"></i></a>
                              </div>
                           </div><!-- ts-speaker-popup-content end-->
                        </div><!-- col end-->
                     </div><!-- row end-->
                  </div><!-- popup end-->
               </div> <!-- col end-->
               
               <!-- col end-->
               <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="900ms">
                  <div class="ts-speaker">
                     <div class="speaker-img">
                        <img class="img-fluid" src="'.ROOT.'/includes/images/speakers/speaker6.jpg" alt="">
                        <a href="#popup_6" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">
                                    <i class="icon icon-plus"></i>
                                </a>
                     </div>
                     <div class="ts-speaker-info">
                        <h3 class="ts-title"><a href="#">Lundryn Melisa </a></h3>
                        <p>
                           Lead Designer, Payol
                        </p>
                     </div>
                  </div>
                  <!-- popup start-->
                  <div id="popup_6" class="container ts-speaker-popup mfp-hide">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-img">
                              <img src="'.ROOT.'/includes/images/speakers/speaker1.jpg" alt="">
                           </div>
                        </div><!-- col end-->
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-content">
                              <h3 class="ts-title">David Robert</h3>
                              <span class="speakder-designation">Cheif Architecture</span>
                              <img class="company-logo" src="'.ROOT.'/includes/images/sponsors/sponsor-6.png" alt="">
                              <p>
                                 World is committed to making participation in the event a harass ment free experience
                                 for everyone, regardless of level experience gender, gender identity and expression
                              </p>
                              <h4 class="session-name">
                                 Sessions by David
                              </h4>
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="speaker-session-info">
                                       <h4>Day 1</h4>
                                       <span>
                                                         10.30 - 11.30 am
                                                   </span>
                                       <p>
                                          Marketing Matters
                                       </p>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="speaker-session-info">
                                       <h4>Day 1</h4>
                                       <span>
                                                            10.30 - 11.30 am
                                                      </span>
                                       <p>
                                          Marketing Matters
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="ts-speakers-social">
                                 <a href="#"><i class="fa fa-facebook"></i></a>
                                 <a href="#"><i class="fa fa-twitter"></i></a>
                                 <a href="#"><i class="fa fa-instagram"></i></a>
                                 <a href="#"><i class="fa fa-google-plus"></i></a>
                                 <a href="#"><i class="fa fa-linkedin"></i></a>
                              </div>
                           </div><!-- ts-speaker-popup-content end-->
                        </div><!-- col end-->
                     </div><!-- row end-->
                  </div><!-- popup end-->
               </div> <!-- col end-->
               <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1000ms">
                  <div class="ts-speaker">
                     <div class="speaker-img">
                        <img class="img-fluid" src="'.ROOT.'/includes/images/speakers/speaker7.jpg" alt="">
                        <a href="#popup_7" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">
                           <i class="icon icon-plus"></i>
                        </a>
                     </div>
                     <div class="ts-speaker-info">
                        <h3 class="ts-title"><a href="#">Johnsson Agaton </a></h3>
                        <p>
                           Developer Expert
                        </p>
                     </div>
                  </div>
                  <!-- popup start-->
                  <div id="popup_7" class="container ts-speaker-popup mfp-hide">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-img">
                              <img src="'.ROOT.'/includes/images/speakers/speaker7.jpg" alt="">
                           </div>
                        </div><!-- col end-->
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-content">
                              <h3 class="ts-title">David Robert</h3>
                              <span class="speakder-designation">Cheif Architecture</span>
                              <img class="company-logo" src="'.ROOT.'/includes/images/sponsors/sponsor-6.png" alt="">
                              <p>
                                 World is committed to making participation in the event a harass ment free experience
                                 for everyone, regardless of level experience gender, gender identity and expression
                              </p>
                              <h4 class="session-name">
                                 Sessions by David
                              </h4>
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="speaker-session-info">
                                       <h4>Day 1</h4>
                                       <span>
                                                         10.30 - 11.30 am
                                                   </span>
                                       <p>
                                          Marketing Matters
                                       </p>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="speaker-session-info">
                                       <h4>Day 1</h4>
                                       <span>
                                                            10.30 - 11.30 am
                                                      </span>
                                       <p>
                                          Marketing Matters
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="ts-speakers-social">
                                 <a href="#"><i class="fa fa-facebook"></i></a>
                                 <a href="#"><i class="fa fa-twitter"></i></a>
                                 <a href="#"><i class="fa fa-instagram"></i></a>
                                 <a href="#"><i class="fa fa-google-plus"></i></a>
                                 <a href="#"><i class="fa fa-linkedin"></i></a>
                              </div>
                           </div><!-- ts-speaker-popup-content end-->
                        </div><!-- col end-->
                     </div><!-- row end-->
                  </div><!-- popup end-->
               </div> <!-- col end-->

               <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1100ms">
                  <div class="ts-speaker">
                     <div class="speaker-img">
                        <img class="img-fluid" src="'.ROOT.'/includes/images/speakers/speaker8.jpg" alt="">
                        <a href="#popup_8" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">
                                    <i class="icon icon-plus"></i>
                                </a>
                     </div>
                     <div class="ts-speaker-info">
                        <h3 class="ts-title"><a href="#">Henrikon Rebecca </a></h3>
                        <p>
                           Founder, Cards
                        </p>
                     </div>
                  </div>
                  <!-- popup start-->
                  <div id="popup_8" class="container ts-speaker-popup mfp-hide">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-img">
                              <img src="'.ROOT.'/includes/images/speakers/speaker8.jpg" alt="">
                           </div>
                        </div><!-- col end-->
                        <div class="col-lg-6">
                           <div class="ts-speaker-popup-content">
                              <h3 class="ts-title">David Robert</h3>
                              <span class="speakder-designation">Cheif Architecture</span>
                              <img class="company-logo" src="'.ROOT.'/includes/images/sponsors/sponsor-6.png" alt="">
                              <p>
                                 World is committed to making participation in the event a harass ment free experience
                                 for everyone, regardless of level experience gender, gender identity and expression
                              </p>
                              <h4 class="session-name">
                                 Sessions by David
                              </h4>
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="speaker-session-info">
                                       <h4>Day 1</h4>
                                       <span>
                                                         10.30 - 11.30 am
                                                   </span>
                                       <p>
                                          Marketing Matters
                                       </p>
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="speaker-session-info">
                                       <h4>Day 1</h4>
                                       <span>
                                                            10.30 - 11.30 am
                                                      </span>
                                       <p>
                                          Marketing Matters
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              <div class="ts-speakers-social">
                                 <a href="#"><i class="fa fa-facebook"></i></a>
                                 <a href="#"><i class="fa fa-twitter"></i></a>
                                 <a href="#"><i class="fa fa-instagram"></i></a>
                                 <a href="#"><i class="fa fa-google-plus"></i></a>
                                 <a href="#"><i class="fa fa-linkedin"></i></a>
                              </div>
                           </div><!-- ts-speaker-popup-content end-->
                        </div><!-- col end-->
                     </div><!-- row end-->
                  </div><!-- popup end-->
               </div> <!-- col end-->
            </div><!-- row end-->
         </div><!-- container end-->

         <!-- shap img-->
         <div class="speaker-shap">
            <img class="shap1" src="'.ROOT.'/includes/images/shap/home_speaker_memphis1.png" alt="">
            <img class="shap2" src="'.ROOT.'/includes/images/shap/home_speaker_memphis2.png" alt="">
            <img class="shap3" src="'.ROOT.'/includes/images/shap/home_speaker_memphis3.png" alt="">
         </div>
         <!-- shap img end-->
      </section>
      <!-- ts speaker end-->

      <!-- ts experience start-->
      <section id="ts-experiences" class="ts-experiences">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-6 no-padding">
                  <div class="exp-img" style="background-image:url('.ROOT.'/includes/images/cta_img.jpg)">
                     <!-- <img class="img-fluid" src="'.ROOT.'/includes/images/cta_img.jpg" alt=""> -->
                  </div>
               </div><!-- col end-->
               <div class="col-lg-6 no-padding align-self-center wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
                  <div class="ts-exp-wrap">
                     <div class="ts-exp-content">
                        <h2 class="column-title">
                           <span>Get Experience</span>
                           Shift your perspective on
                           digital business
                        </h2>
                        <p>
                           How you transform your business as technology, consumer, habits industry dynamic s change?
                           Find out from those leading the charge.
                        </p>
                     </div>
                  </div>

               </div><!-- col end-->
            </div><!-- row end-->
         </div><!-- container fluid end-->
      </section>
      <!-- ts experience end-->

      <!-- ts experience start-->
      <section class="ts-schedule">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 mx-auto">
                  <h2 class="section-title">
                     <span>Schedule Details</span>
                     Event Schedules
                  </h2>
                  <div class="ts-schedule-nav">
                     <ul class="nav nav-tabs justify-content-center" role="tablist">
                        <li class="nav-item">
                           <a class="active" title="Click Me" href="#date1" role="tab" data-toggle="tab">
                                 <h3>5th June</h3>
                                 <span>Friday</span>
                               </a>
                        </li>
                        <li class="nav-item">
                           <a class="" href="#date2" title="Click Me" role="tab" data-toggle="tab">        <h3>6th June</h3>
                                  <span>Saturday</span>
                              </a>
                        </li>
                        <li class="nav-item">
                           <a class="" href="#date3" title="Click Me" role="tab" data-toggle="tab">
                                 <h3>7th June</h3>
                                 <span>Sunday</span>
                              </a>
                        </li>
                     </ul>
                     <!-- Tab panes -->
                  </div>
               </div><!-- col end-->

            </div><!-- row end-->
            <div class="row">
               <div class="col-lg-12">
                  <div class="tab-content schedule-tabs schedule-tabs-item">
                     <div role="tabpanel" class="tab-pane active" id="date1">
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-left">
                                 <img class="schedule-slot-speakers" src="'.ROOT.'/includes/images/speakers/speaker1.jpg" alt="">
                                 <span class="schedule-slot-time">10.30 - 11.30 AM</span>
                                 <h3 class="schedule-slot-title">Marketing Matters</h3>
                                 <h4 class="schedule-slot-name">@ Henrikon Rebecca</h4>
                                 <p>
                                    How you transform your business technolog consumer habits industry dynamics change
                                    Find out from those leading the charge How you
                                 </p>
                              </div>
                           </div><!-- col end-->
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-right">
                                 <img class="schedule-slot-speakers" src="'.ROOT.'/includes/images/speakers/speaker2.jpg" alt="">
                                 <span class="schedule-slot-time">11.30 - 12.30 PM</span>
                                 <h3 class="schedule-slot-title">Reinventing Experiences</h3>
                                 <h4 class="schedule-slot-name">@ Johnsson Agaton</h4>
                                 <p>
                                    How you transform your business technolog consumer habits industry dynamics change
                                    Find out from those leading the charge How you
                                 </p>
                              </div>
                           </div><!-- col end-->
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-left">
                                 <img class="schedule-slot-speakers" src="'.ROOT.'/includes/images/speakers/speaker3.jpg" alt="">
                                 <span class="schedule-slot-time">12.30 - 01.30 PM</span>
                                 <h3 class="schedule-slot-title">Cultures of Creativity</h3>
                                 <h4 class="schedule-slot-name">@ Lundryn Melisa</h4>
                                 <p>
                                    How you transform your business technolog consumer habits industry dynamics change
                                    Find out from those leading the charge How you
                                 </p>
                              </div>
                           </div><!-- col end-->
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-right">
                                 <img class="schedule-slot-speakers" src="'.ROOT.'/includes/images/speakers/speaker4.jpg" alt="">
                                 <span class="schedule-slot-time">01.30 - 02.30 PM</span>
                                 <h3 class="schedule-slot-title">Human Centered Design</h3>
                                 <h4 class="schedule-slot-name">@ Fredric Martinsson</h4>
                                 <p>
                                    How you transform your business technolog consumer habits industry dynamics change
                                    Find out from those leading the charge How you
                                 </p>
                              </div>
                           </div><!-- col end-->
                        </div><!-- row end-->
                        <div class="schedule-listing-btn">
                           <a href="#" class="btn">More Details</a>
                        </div>
                     </div><!-- tab pane end-->

                     <div role="tabpanel" class="tab-pane" id="date2">
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-left">
                                 <img class="schedule-slot-speakers" src="'.ROOT.'/includes/images/speakers/speaker5.jpg" alt="">
                                 <span class="schedule-slot-time">02.30 - 03.30 PM</span>
                                 <h3 class="schedule-slot-title">Marketing Matters</h3>
                                 <h4 class="schedule-slot-name">@ Rebecca Henrikon</h4>
                                 <p>
                                    How you transform your business technolog consumer habits industry dynamics change
                                    Find out from those leading the charge How you
                                 </p>
                              </div>
                           </div><!-- col end-->
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-right">
                                 <img class="schedule-slot-speakers" src="'.ROOT.'/includes/images/speakers/speaker6.jpg" alt="">
                                 <span class="schedule-slot-time">03.30 - 04.30 PM</span>
                                 <h3 class="schedule-slot-title">Reinventing Experiences</h3>
                                 <h4 class="schedule-slot-name">@ Fredric Martinsson</h4>
                                 <p>
                                    How you transform your business technolog consumer habits industry dynamics change
                                    Find out from those leading the charge How you
                                 </p>
                              </div>
                           </div><!-- col end-->
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-left">
                                 <img class="schedule-slot-speakers" src="'.ROOT.'/includes/images/speakers/speaker7.jpg" alt="">
                                 <span class="schedule-slot-time">04.30 - 05.30 PM</span>
                                 <h3 class="schedule-slot-title">Cultures of Creativity</h3>
                                 <h4 class="schedule-slot-name">@ Melisa Lundryn</h4>
                                 <p>
                                    How you transform your business technolog consumer habits industry dynamics change
                                    Find out from those leading the charge How you
                                 </p>
                              </div>
                           </div><!-- col end-->
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-right">
                                 <img class="schedule-slot-speakers" src="'.ROOT.'/includes/images/speakers/speaker8.jpg" alt="">
                                 <span class="schedule-slot-time">05.30 - 06.30 PM</span>
                                 <h3 class="schedule-slot-title">Human Centered Design</h3>
                                 <h4 class="schedule-slot-name">@ Agaton Johnsson</h4>
                                 <p>
                                    How you transform your business technolog consumer habits industry dynamics change
                                    Find out from those leading the charge How you
                                 </p>
                              </div>
                           </div><!-- col end-->
                        </div><!-- row end-->
                        <div class="schedule-listing-btn">
                           <a href="#" class="btn">More Details</a>
                        </div>
                     </div>
                     <div role="tabpanel" class="tab-pane" id="date3">
                        <div class="row">
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-left">
                                 <img class="schedule-slot-speakers" src="'.ROOT.'/includes/images/speakers/speaker1.jpg" alt="">
                                 <span class="schedule-slot-time">10.30 - 11.30 AM</span>
                                 <h3 class="schedule-slot-title">Marketing Matters</h3>
                                 <h4 class="schedule-slot-name">@ Rebecca Henrikon</h4>
                                 <p>
                                    How you transform your business technolog consumer habits industry dynamics change
                                    Find out from those leading the charge How you
                                 </p>
                              </div>
                           </div><!-- col end-->
                           <div class="col-lg-6">
                              <div class= <div class="row">
                                 <div class="col-lg-6">
                                    <div class="schedule-listing-item schedule-left">
                                       <img class="schedule-slot-speakers" src="'.ROOT.'/includes/images/speakers/speaker1.jpg" alt="">
                                       <span class="schedule-slot-time">10.30 - 11.30 AM</span>
                                       <h3 class="schedule-slot-title">Marketing Matters</h3>
                                       <h4 class="schedule-slot-name">@ Rebecca Henrikon</h4>
                                       <p>
                                          How you transform your business technolog consumer habits industry dynamics change
                                          Find out from those leading the charge How you
                                       </p>
                                    </div>"schedule-listing-item schedule-right">
                                 <img class="schedule-slot-speakers" src="'.ROOT.'/includes/images/speakers/speaker2.jpg" alt="">
                                 <span class="schedule-slot-time">11.30 - 12.30 PM</span>
                                 <h3 class="schedule-slot-title">Reinventing Experiences</h3>
                                 <h4 class="schedule-slot-name">@ Hall Building</h4>
                                 <p>
                                    How you transform your business technolog consumer habits industry dynamics change
                                    Find out from those leading the charge How you
                                 </p>
                              </div>
                           </div><!-- col end-->
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-left">
                                 <img class="schedule-slot-speakers" src="'.ROOT.'/includes/images/speakers/speaker3.jpg" alt="">
                                 <span class="schedule-slot-time">01.30 - 02.30 PM</span>
                                 <h3 class="schedule-slot-title">Cultures of Creativity</h3>
                                 <h4 class="schedule-slot-name">@ Fredric Martinsson</h4>
                                 <p>
                                    How you transform your business technolog consumer habits industry dynamics change
                                    Find out from those leading the charge How you
                                 </p>
                              </div>
                           </div><!-- col end-->
                           <div class="col-lg-6">
                              <div class="schedule-listing-item schedule-right">
                                 <img class="schedule-slot-speakers" src="'.ROOT.'/includes/images/speakers/speaker4.jpg" alt="">
                                 <span class="schedule-slot-time">03.30 - 04.30 PM</span>
                                 <h3 class="schedule-slot-title">Human Centered Design</h3>
                                 <h4 class="schedule-slot-name">@ Henrikon Rebecca</h4>
                                 <p>
                                    How you transform your business technolog consumer habits industry dynamics change
                                    Find out from those leading the charge How you
                                 </p>
                              </div>
                           </div><!-- col end-->
                        </div><!-- row end-->
                        <div class="schedule-listing-btn">
                           <a href="#" class="btn">More Details</a>
                        </div>
                     </div>
                  </div>

               </div>
            </div>
         </div><!-- container end-->
      </section>
      <!-- ts experience end-->

      <!-- ts pricing start-->
      
      <!-- ts pricing end-->
      <!-- ts blog start-->
      <section class="ts-blog section-bg">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <h2 class="section-title">
                     <span>Info Update</span>
                     Latest News
                  </h2>
               </div><!-- col end-->
            </div><!-- row end-->
            <div class="row">
               <div class="col-lg-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                  <div class="post">
                     <div class="post-media post-image">
                        <a href="#"><img src="'.ROOT.'/includes/images/blog/blog1.jpg" class="img-fluid" alt=""></a>
                     </div>

                     <div class="post-body">
                        <div class="post-meta">
                           <span class="post-author">
                             <a href="#">BY Admin</a>
                           </span>

                           <div class="post-meta-date">
                              October 8, 2018
                           </div>
                        </div>
                        <div class="entry-header">
                           <h2 class="entry-title">
                              <a href="#">Check upcoming Events</a>
                           </h2>
                        </div><!-- header end -->

                        <div class="entry-content">
                           <p>How you transform your business asap technology, consumer,</p>
                        </div>

                        <div class="post-footer">
                           <a href="news-single.html" class="btn-link">Read More <i class="icon icon-arrow-right"></i></a>
                        </div>

                     </div><!-- post-body end -->
                  </div><!-- post end-->
               </div><!-- col end-->
               <div class="col-lg-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
                  <div class="post">
                     <div class="post-media post-image">
                        <a href="#"><img src="'.ROOT.'/includes/images/blog/blog2.jpg" class="img-fluid" alt=""></a>
                     </div>

                     <div class="post-body">
                        <div class="post-meta">
                           <span class="post-author">
                                <a href="#">BY Admin</a>
                              </span>

                           <div class="post-meta-date">
                              October 8, 2018
                           </div>
                        </div>
                        <div class="entry-header">
                           <h2 class="entry-title">
                              <a href="#">Adding a New Digital</a>
                           </h2>
                        </div><!-- header end -->

                        <div class="entry-content">
                           <p>How you transform your business asap technology, consumer,</p>
                        </div>

                        <div class="post-footer">
                           <a href="news-single.html" class="btn-link">Read More <i class="icon icon-arrow-right"></i></a>
                        </div>

                     </div><!-- post-body end -->
                  </div><!-- post end-->
               </div><!-- col end-->
               <div class="col-lg-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="600ms">
                  <div class="post">
                     <div class="post-media post-image">
                        <a href="#"><img src="'.ROOT.'/includes/images/blog/blog3.jpg" class="img-fluid" alt=""></a>
                     </div>

                     <div class="post-body">
                        <div class="post-meta">
                           <span class="post-author">
                                   <a href="#">BY Admin</a>
                                 </span>

                           <div class="post-meta-date">
                              October 8, 2018
                           </div>
                        </div>
                        <div class="entry-header">
                           <h2 class="entry-title">
                              <a href="#">West Elm At Evantor</a>
                           </h2>
                        </div><!-- header end -->

                        <div class="entry-content">
                           <p>How you transform your business asap technology, consumer,</p>
                        </div>

                        <div class="post-footer">
                           <a href="news-single.html" class="btn-link">Read More <i class="icon icon-arrow-right"></i></a>
                        </div>

                     </div><!-- post-body end -->
                  </div><!-- post end-->
               </div><!-- col end-->
            </div><!-- row end-->
         </div><!-- container end-->
         <!-- shap image-->
         <div class="speaker-shap">
            <img class="shap2" src="'.ROOT.'/includes/images/shap/news_memphis2.png" alt="">
            <img class="shap1" src="'.ROOT.'/includes/images/shap/news_memphis1.png" alt="">
         </div>
      </section>
      <!-- ts blog end-->

      <!-- ts sponsors start-->
      <section class="ts-intro-sponsors" style="background-image: url('.ROOT.'/includes/images/sponsors/sponsor_img.jpg)">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <h2 class="section-title white">
                     <span>Who helps us</span>
                     Our Sponsors
                  </h2><!-- section title end-->
               </div><!-- col end-->
            </div><!-- row end-->
            <div class="row">
               <div class="col-lg-12">
                  <div class="sponsors-logo text-center">
                     <a href=""><img src="'.ROOT.'/includes/images/sponsors/sponsor1.png" alt=""></a>
                     <a href=""><img src="'.ROOT.'/includes/images/sponsors/sponsor2.png" alt=""></a>
                     <a href=""><img src="'.ROOT.'/includes/images/sponsors/sponsor3.png" alt=""></a>
                     <a href=""><img src="'.ROOT.'/includes/images/sponsors/sponsor4.png" alt=""></a>
                     <a href=""><img src="'.ROOT.'/includes/images/sponsors/sponsor5.png" alt=""></a>
                     <a href=""><img src="'.ROOT.'/includes/images/sponsors/sponsor6.png" alt=""></a>
                     <a href=""><img src="'.ROOT.'/includes/images/sponsors/sponsor7.png" alt=""></a>
                     <a href=""><img src="'.ROOT.'/includes/images/sponsors/sponsor8.png" alt=""></a>
                     <a href=""><img src="'.ROOT.'/includes/images/sponsors/sponsor9.png" alt=""></a>
                     <div class="sponsor-btn text-center">
                        <a href="#" class="btn">Become a Sponsor</a>
                     </div>
                  </div><!-- sponsors logo end-->
               </div><!-- col end-->
            </div><!-- row end-->
         </div><!-- container end-->
      </section>
      <!-- ts sponsors end-->

      <!-- ts map direction start-->
      <section class="ts-map-direction wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
         <div class="container">
            <div class="row">
               <div class="col-lg-5">
                  <h2 class="column-title">
                     <span>Reach us</span>
                     Get Direction to the
                     Event Hall
                  </h2>

                  <div class="ts-map-tabs">
                     <ul class="nav" role="tablist">
                        <li class="nav-item">
                           <a class="nav-link active" href="#profile" role="tab" data-toggle="tab">Venue</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#buzz" role="tab" data-toggle="tab">Time</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#references" role="tab" data-toggle="tab">How to get there</a>
                        </li>
                     </ul>

                     <!-- Tab panes -->
                     <div class="tab-content direction-tabs">
                        <div role="tabpanel" class="tab-pane active" id="profile">
                           <div class="direction-tabs-content">
                              <h3>Brighton Waterfront Hotel, Brighton, London</h3>
                              <p class="derecttion-vanue">
                                 1Hd- 50, 010 Avenue, NY 90001<br/>
                                    United States
                              </p>
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="contact-info-box">
                                          <h3>Tickets info </h3>
                                          <p><strong>Name:</strong> Ronaldo König</p>
                                          <p><strong>Phone:</strong> 009-215-5595</p>
                                          <p><strong>Email: </strong> info@example.com</p>
                                       </div>

                                    </div>
                                    <div class="col-md-6">
                                       <div class="contact-info-box">
                                          <h3>Programme Details </h3>
                                          <p><strong>Name:</strong> Ronaldo König</p>
                                          <p><strong>Phone:</strong> 009-215-5595</p>
                                          <p><strong>Email: </strong> info@example.com</p>
                                       </div>
                                    </div>
                                 </div><!-- row end-->
                           </div><!-- direction tabs end-->
                        </div><!-- tab pane end-->
                        <div role="tabpanel" class="tab-pane fade" id="buzz">
                           <div class="direction-tabs-content">
                              <h3>Brighton Waterfront Hotel, Brighton, London</h3>
                              <p class="derecttion-vanue">
                                 1Hd- 50, 010 Avenue, NY 90001<br/>
                                          United States
                                    </p>
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="contact-info-box">
                                          <h3>Tickets info </h3>
                                          <p><strong>Name:</strong> Ronaldo König</p>
                                          <p><strong>Phone:</strong> 009-215-5595</p>
                                          <p><strong>Email: </strong> info@example.com</p>
                                       </div>

                                    </div>
                                    <div class="col-md-6">
                                       <div class="contact-info-box">
                                          <h3>Programme Details </h3>
                                          <p><strong>Name:</strong> Ronaldo König</p>
                                          <p><strong>Phone:</strong> 009-215-5595</p>
                                          <p><strong>Email: </strong> info@example.com</p>
                                       </div>
                                    </div>
                                 </div><!-- row end-->
                           </div><!-- direction tabs end-->
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="references">
                           <div class="direction-tabs-content">
                              <h3>Brighton Waterfront Hotel, Brighton, London</h3>
                              <p class="derecttion-vanue">
                                 1Hd- 50, 010 Avenue, NY 90001<br/>
                                          United States
                                    </p>
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="contact-info-box">
                                          <h3>Tickets info </h3>
                                          <p><strong>Name:</strong> Ronaldo König</p>
                                          <p><strong>Phone:</strong> 009-215-5595</p>
                                          <p><strong>Email: </strong> info@example.com</p>
                                       </div>

                                    </div>
                                    <div class="col-md-6">
                                       <div class="contact-info-box">
                                          <h3>Programme Details </h3>
                                          <p><strong>Name:</strong> Ronaldo König</p>
                                          <p><strong>Phone:</strong> 009-215-5595</p>
                                          <p><strong>Email: </strong> info@example.com</p>
                                       </div>
                                    </div>
                                 </div><!-- row end-->
                           </div><!-- direction tabs end-->
                        </div>
                     </div>

                  </div><!-- map tabs end-->

               </div><!-- col end-->
               <div class="col-lg-6 offset-lg-1">
                  <div class="ts-map">
                     <div class="mapouter">
                        <div class="gmap_canvas">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.9028133968723!2d-73.99208268505396!3d40.74216397932861!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a4119ce269%3A0x9dec0c979b575972!2sEataly+NYC+Flatiron!5e0!3m2!1sen!2sbd!4v1541577288827"></iframe>
                        </div>

                     </div>
                  </div>
               </div>
            </div><!-- col end-->
         </div><!-- container end-->
         <div class="speaker-shap">
            <img class="shap1 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="300ms" src="'.ROOT.'/includes/images/shap/Direction_memphis3.png"
               alt="">
            <img class="shap2 wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="400ms" src="'.ROOT.'/includes/images/shap/Direction_memphis2.png"
               alt="">
            <img class="shap3 wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay="500ms" src="'.ROOT.'/includes/images/shap/Direction_memphis4.png"
               alt="">
            <img class="shap4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="600ms" src="'.ROOT.'/includes/images/shap/Direction_memphis1.png"
               alt="">
         </div>
      </section>
      <!-- ts map direction end-->

      <!-- ts footer area start-->
      <div class="footer-area">

         <!-- ts-book-seat start-->
         <section class="ts-book-seat" style="background-image: url('.ROOT.'/includes/images/book_seat_img.jpg)">
            <div class="container">
               <!-- <div class="row">
                  <div class="col-lg-8 mx-auto">
                     <div class="book-seat-content text-center mb-100">
                        <h2 class="section-title white">
                           <span>Hurry up!</span>
                           Book your Seat
                        </h2>
                        <a href="#" class="btn">Buy Ticket</a>
                     </div> book seat end
                  </div><col end

               </div>row end-->
               <div class="ts-footer-newsletter">
                  <div class="ts-newsletter" style="background-image: url('.ROOT.'/includes/images/shap/subscribe_pattern.png)">
                     <div class="row">
                        <div class="col-lg-6 mx-auto">
                           <div class="ts-newsletter-content">
                              <h2 class="section-title">
                                 <span>SUBSCRIBE TO NEWSLETTER</span>
                                 Want something extra?
                              </h2>
                           </div>
                           <div class="newsletter-form">
                              <form action="#" method="post" class="media align-items-end">
                                 <div class="email-form-group media-body">
                                    <input type="email" name="email" id="newsletter-form-email" class="form-control"
                                       placeholder="Your Email" autocomplete="off" required="">
                                 </div>
                                 <div class="d-flex ts-submit-btn">
                                    <button class="btn">Subscribe</button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div><!-- container end-->
         </section>
         <!-- book seat  end-->

         <!-- footer start-->
         <footer class="ts-footer">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 mx-auto">
                     <div class="ts-footer-social text-center mb-30">
                        <ul>
                           <li>
                              <a href="#"><i class="fa fa-facebook"></i></a>
                           </li>
                           <li>
                              <a href="#"><i class="fa fa-twitter"></i></a>
                           </li>
                           <li>
                              <a href="#"><i class="fa fa-google-plus"></i></a>
                           </li>
                           <li>
                              <a href="#"><i class="fa fa-linkedin"></i></a>
                           </li>
                           <li>
                              <a href="#"><i class="fa fa-instagram"></i></a>
                           </li>
                        </ul>
                     </div>
                     <!-- footer social end-->
                     <div class="footer-menu text-center mb-25">
                        <ul>
                           <li><a href="#">About Eventime</a></li>
                           <!-- <li><a href="#">Blog</a></li> -->
                           <li><a href="#">Contact</a></li>
                           <li><a href="#">Tickets</a></li>
                           <li><a href="#">Venue</a></li>
                        </ul>
                     </div><!-- footer menu end-->
                     <div class="copyright-text text-center">
                        <p>Copyright © 2019 Munu Technologies Associates. All Rights Reserved.</p>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <!-- footer end-->
         <div class="BackTo">
            <a href="#" class="fa fa-angle-up" aria-hidden="true"></a>
         </div>

      </div>
      <!-- ts footer area end-->




      <!-- Javascript Files
            ================================================== -->
      <!-- initialize jQuery Library -->
      <script src="'.ROOT.'/includes/js/jquery.js"></script>

      <script src="'.ROOT.'/includes/js/popper.min.js"></script>
      <!-- Bootstrap jQuery -->
      <script src="'.ROOT.'/includes/js/bootstrap.min.js"></script>
      <!-- Counter -->
      <script src="'.ROOT.'/includes/js/jquery.appear.min.js"></script>
      <!-- Countdown -->
      <script src="'.ROOT.'/includes/js/jquery.jCounter.js"></script>
      <!-- magnific-popup -->
      <script src="'.ROOT.'/includes/js/jquery.magnific-popup.min.js"></script>
      <!-- carousel -->
      <script src="'.ROOT.'/includes/js/owl.carousel.min.js"></script>
      <!-- Waypoints -->
      <script src="'.ROOT.'/includes/js/wow.min.js"></script>

      <!-- isotop -->
      <script src="'.ROOT.'/includes/js/isotope.pkgd.min.js"></script>

      <!-- Template custom -->
      <script src="'.ROOT.'/includes/js/main.js"></script>

   </div>
   <!-- Body inner end -->
</body>

</html>
		';
    }

    public static function homepage(){
        $content = 'Welcome To The International Summit';

        return $content;
    }
}

$dashboard = new dashboard();
?>