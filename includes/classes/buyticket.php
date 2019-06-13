<?php

class buyTicket
{
    // To view all tickets
    public static function ticketCategory($name)
    {
        switch ($name) {
            case 'vip-delegate-p/p':
                $price =   4595;
                $title= '1';
                break;
            case 'vip-and-guest':
                $price =   7995;
                $title= '2';

                break;
            case 'vip-speaker-w/o-air':
                $price =   7495;
                $title= '3';

                break;
            case 'vip-panelist-w/o-air':
                $price =   5995;
                $title= '4';

                break;
            case 'vip-del-w/o-air':
                $price =   1995;
                $title= '5';

                break;
            case 'day-pass':
                $price =   695;
                $title= '6';

                break;
        }

        $content = '<div class="col-lg-4"><br>
                        <div class="pricing-item ">
                           <img class="pricing-dot " src="' . ROOT . '/includes/images/pricing/dot.png" alt="">
                           <div class="ts-pricing-box">
      
                              <div class="ts-pricing-header">
                                 <h2 class="ts-pricing-name">' . $name . '</h2>
                                 <h3 class="ts-pricing-price">
                                    <span class="currency">$</span>' .$price .'
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
                                 <a name="id" href="#popup_ticket_' . $title . '" class="view-speaker ts-image-popup btn pricing-btn" data-effect="mfp-zoom-in">BUY A TICKET</a>
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
            case 'vip-delegate-p/p':
                $cat = '<option value="4595"> VIP Delegate P/P </option>';
                $title=1;
                $price =   4595;
                break;
            case 'vip-and-guest':
                $cat = '<option value="7995">VIP & Guest </option>';
                $title=2;
                $price =   7995;
                break;
            case 'vip-speaker-w/o-air':
                $cat = '<option value="7495">VIP Speaker W/O Air </option>';
                $title=3;
                $price =   7495;
                break;
            case 'vip-panelist-w/o-air':
                $cat = '<option value="5995">VIP Panelist W/O Air </option>';
                $title=4;
                $price =   5995;
                break;
            case 'vip-del-w/o-air':
                $cat = '<option value="1995">VIP Del. W/O AIr</option>';
                $title=5;
                $price =   1995;
                break;
            case 'day-pass':
                $cat = '<option value="695">Day Pass </option>';
                $title=6;
                $price =   695;
                break;
        }
        $content = '<!-- popup start-->
                <div id="popup_ticket_' . $title . '" class="container ts-speaker-popup mfp-hide">
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
                               <select type="number" name="amount" id="amount" class="form-control">
                                    <option value="" disabled selected>Number of Tickets</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                               </select>                              
                              <select name="ticket" id="ticket">'.$cat.'</select>
                               <input class="btn" type="button" value="Register Now" onclick="Checkout.showLightbox();" />

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
