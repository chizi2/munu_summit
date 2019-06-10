<?php
class schedule{
//    To view all schedule
    public static function popSchedule(){
        $content = '<!-- popup start-->
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
                  </div><!-- popup end-->';
        return $content;
    }

    public static function fullSchedule(){
        $content='<!-- ts experience start-->
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
                           <a href="#popup_schedule" class="btn">More Details</a>
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
                           <a href="#popup_schedule" class="btn">More Details</a>
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
                           <a href="#popup_schedule" class="btn">More Details</a>
                        </div>
                     </div>
                  </div>

               </div>
            </div>
         </div><!-- container end-->
      </section>
      <!-- ts experience end-->';
        return $content;
    }
}
