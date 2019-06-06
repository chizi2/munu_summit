<?php

class buyTicket{
    // To view all tickets
    public static function viewAllTickets(){
        $content ='<li class="header-ticket nav-item">                        
                        <a href="#popup_buy_ticket" class="ticket-btn btnview-speaker ts-image-popup" data-effect="mfp-zoom-in">Buy  Ticket
                        </a>
                     </li>
                     <!-- popup start-->
                  <div id="popup_buy_ticket" class="container ts-speaker-popup mfp-hide">
                     <section class="ts-pricing gradient" style="background-image: url(./images/pricing/pricing_img.jpg)">
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
                     <img class="pricing-dot " src="images/pricing/dot.png" alt="">
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
<!--                           <a href="#popup_buy" class="view-speaker ts-image-popup btn pricing-btn" data-effect="mfp-zoom-in">Buy  Ticket</a>-->

                           <!-- ========================= -->
                           <!-- ========================= -->

                           <p class="vate-text">All prices exclude 25% VAT</p>
                        </div>
                     </div><!-- ts pricing box-->
                     <img class="pricing-dot1 " src="images/pricing/dot.png" alt="">
                  </div>
               </div><!-- col end-->
               <div class="col-lg-4">
                  <div class="pricing-item">
                     <img class="pricing-dot " src="images/pricing/dot.png" alt="">
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
<!--                           <a href="#popup_buy1" class="view-speaker ts-image-popup btn pricing-btn" data-effect="mfp-zoom-in">Buy  Ticket</a>-->
        
                           <p class="vate-text">All prices exclude 25% VAT</p>
                        </div>
                     </div><!-- ts pricing box-->
                     <img class="pricing-dot1 " src="images/pricing/dot.png" alt="">
                  </div>
               </div><!-- col end-->
               <div class="col-lg-4">
                  <div class="pricing-item">
                     <img class="pricing-dot " src="images/pricing/dot.png" alt="">
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
<!--                           <a href="#popup_buy2" class="view-speaker ts-image-popup btn pricing-btn" data-effect="mfp-zoom-in">Buy  Ticket</a>-->
                  
                           <p class="vate-text">All prices exclude 25% VAT</p>
                        </div>
                     </div><!-- ts pricing box-->
                     <img class="pricing-dot1 " src="images/pricing/dot.png" alt="">
                  </div>
               </div><!-- col end-->
            </div>
         </div><!-- container end-->
         <div class="speaker-shap">
            <img class="shap2" src="images/shap/pricing_memphis1.png" alt="">
         </div>
      </section>
                  </div><!-- popup end-->';
        return $content;
    }
//    To create ticket
    public static function createTicket(){
        $content =' <div id="popup_buy" class="container ts-speaker-popup mfp-hide">
                     
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
                              <option value="ticket">EARLY BIRD </option>
                              <option value="ticket">REGULAR</option>
                              <option value="ticket">PLATINUM </option> 
                           </select>

                           <button class="btn" type="submit"> Register Now</button>

                        </form>
                     </div>
                  </div>
                   </div><!-- popup end-->
                 ';
        return $content;
    }
}
