<?php

class buyTicket
{
    // To view all tickets
    public static function ticketCategory($name)
    {
        $content = '<div class="col-lg-4">
                        <div class="pricing-item ">
                           <img class="pricing-dot " src="' . ROOT . '/includes/images/pricing/dot.png" alt="">
                           <div class="ts-pricing-box">
      
                              <div class="ts-pricing-header">
                                 <h2 class="ts-pricing-name">' . $name . '</h2>
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
                                 <a name="id" href="#popup_ticket_' . $name . '" class="view-speaker ts-image-popup btn pricing-btn" data-effect="mfp-zoom-in">BUY A TICKET</a>
                                 <p class="vate-text">All prices exclude 25% VAT</p>
                              </div>
                           </div><!-- ts pricing box-->
                           <img class="pricing-dot1 " src="' . ROOT . '/includes/images/pricing/dot.png" alt="">
                        </div>
                     </div><!-- col end-->';
        return $content;

    }

    // To buy a ticket
    public static function getTicket($name)
    {
        switch ($name) {
            case 'early-bird':
                $cat = '<option value="1">EARLY BIRD</option>';
                break;
            case 'regular':
                $cat = '<option value="2">REGULAR</option>';
                break;
            case 'platinum':
                $cat = '<option value="3">PLATINUM</option>';
                break;
        }
        $content = '<!-- popup start-->
                <div id="popup_ticket_' . $name . '" class="container ts-speaker-popup mfp-hide">
                     <div class="col-lg-4 offset-lg-1">
                        <div class="hero-form-content">
                           <h2>Book A Seat</h2>
                           <p>Welcome, Let\'s Get You A Ticket For The Summit:</p>
                           <form action="?action=guest" method="POST" class="hero-form">
                              <input class="form-control form-control-name" placeholder="Name" name="name" id="name" type="text" required="">
                              <input class="form-control form-control-name" placeholder="Designation" name="designation" id="designation" type="text" required="">
                              <input class="form-control form-control-name" placeholder="Company" name="company" id="company" type="text" required="">
                              <input class="form-control form-control-phone" placeholder="Phone" name="phone" id="phone" type="number">
                              <input class="form-control form-control-email" placeholder="Email" name="email" id="email" type="email" required="">
                              <select name="ticket" id="ticket">' . $cat . '</select>
                              <button class="btn" type="submit"> Register Now</button>
                           </form>
                        </div>
                     </div>
                      </div><!-- popup end-->
';
        return $content;
    }

    //To save guests
    public static function saveGuestDetails(){
                $name = database::prepData($_POST['name']);
                $title = database::prepData($_POST['designation']);
                $company= database::prepData($_POST['company']);
                $phone= database::prepData($_POST['phone']);
                $email = database::prepData($_POST['email']);
                $category = database::prepData($_POST['ticket']);
                $status = 1;
                $result = database::performQuery("INSERT INTO guest(name, title, company, phone_number, email, guest_category_id, payment_status_id) VALUES ('$name','$title','$company','$phone','$email',$category,$status)");
    }
}
