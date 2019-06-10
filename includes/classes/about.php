<?php

class about{

    // To view Summit latest up date
    public static function viewAboutSummit(){
        $content ='<div id="popup_about_summit" class="container ts-speaker-popup mfp-hide">
   		<!-- ts intro start -->
		<section class="ts-about-intro section-bg">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <h2 class="section-title">
                        <span>Join The Event</span>
                        Why attend the Summit
                     </h2>
                  </div><!-- section title end-->
               </div><!-- col end-->
               <div class="row">
                  <div class="col-lg-4">
                     <div class="about-intro-text text-right mb-60 mr-70">
                        <i class="icon-speaker"></i>
                        <h3 class="ts-title">Great Speakers</h3>
                        <p>
                           How you transform your business as technology, consumer, habits industry dynamic
                        </p>
                     </div><!-- single intro text end-->
   
                     <div class="about-intro-text text-right mr-70">
                        <i class="icon-netwrorking"></i>
                        <h3 class="ts-title">New People</h3>
                        <p>
                           How you transform your business as technology, consumer, habits industry dynamic
                        </p>
                     </div><!-- single intro text end-->
                     <div class="border-shap left"></div>
                  </div><!-- col end-->
                  <div class="col-lg-4 align-self-center">
                     <div class="about-video">
                        <img class="img-fluid" src="'.ROOT.'/includes/images/about/about_img.jpg" alt="">
                        <a href="https://www.youtube.com/watch?v=Bey4XXJAqS8" class="video-btn ts-video-popup"><i class="icon icon-play"></i></a>
                     </div><!-- entro video end-->
                  </div><!-- col end-->
                  <div class="col-lg-4">
                     <div class="about-intro-text mb-60 ml-70">
                        <i class="icon-people"></i>
                        <h3 class="ts-title">Networking</h3>
                        <p>
                           How you transform your business as technology, consumer, habits industry dynamic
                        </p>
                     </div><!-- single intro text end-->
   
                     <div class="about-intro-text ml-70">
                        <i class="icon-fun"></i>
                        <h3 class="ts-title">Have Fun</h3>
                        <p>
                           How you transform your business as technology, consumer, habits industry dynamic
                        </p>
                     </div><!-- single intro text end-->
                     <div class="border-shap left"></div>
                  </div><!-- col end-->
               </div><!-- row end-->
            </div><!-- container end-->
         </section>
         <!-- ts intro end-->
   
         <section class="ts-event-outcome">
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
                           <p class="text-white">
                              How you transform your business technology consumer, habits industry dynamic change the Find
                              out from those leading
                           </p>
                           <a href="#" class="btn">Buy Ticket</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="outcome-content">
                        <div class="outcome-img overlay">
                           <img class="" src="'.ROOT.'/includes/images/about/learn_img.jpg" alt="">
                        </div>
                        <h3 class="img-title text-white">Learn Things</h3>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="outcome-content">
                        <div class="outcome-img overlay">
                           <img class="" src="'.ROOT.'/includes/images/about/connect_img.jpg" alt="">
                        </div>
                        <h3 class="img-title text-white">connect People</h3>
                     </div>
                  </div>
   
               </div>
            </div>
         </section>
      </div>
<!-- popup end-->
';
        return $content;
    }

    // To view all speaker details 
    public static function viewAllSpeakers(){
        $content ='<div id="popup_speakers" class="container ts-speaker-popup mfp-hide">
   <!-- ts speaker start-->
   <section id="ts-speakers-II" class="ts-speakers speaker-II" style="background-image:url('.ROOT.'/includes/images/speakers/speaker_bg.png)">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 mx-auto">
               <h2 class="section-title text-center">
                  <span>Listen to the</span>
                  Key Speakers
               </h2>
            </div><!-- col end-->
         </div><!-- row end-->
         <div class="row">
            <div class="col-md-4">
               <div class="ts-speaker">
                  <div class="speaker-img">
                     <img class="img-fluid" src="'.ROOT.'/includes/images/speakers/speaker2.jpg" alt="">
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
               <div id="popup_06" class="container ts-speaker-popup mfp-hide">
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
            <div class="col-md-4">
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
               <div id="popup_01" class="container ts-speaker-popup mfp-hide">
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
            <div class="col-md-4">
               <div class="ts-speaker">
                  <div class="speaker-img">
                     <img class="img-fluid" src="'.ROOT.'/includes/images/speakers/speaker3.jpg" alt="">
                     <a href="#popup_3" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">
                                 <i class="icon icon-plus"></i>
                             </a>
                  </div>
                  <div class="ts-speaker-info">
                     <h3 class="ts-title"><a href="#">Agaton Johnsson</a></h3>
                     <p>
                        Developer Expert
                     </p>
                  </div>
               </div>
               <!-- popup start-->
               <div id="popup_03" class="container ts-speaker-popup mfp-hide">
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="ts-speaker-popup-img">
                           <img src="'.ROOT.'/includes/images/speakers/speaker3.jpg" alt="">
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

   </section>
   <!-- ts speaker end-->
 <!-- ts speaker start-->
 <section id="ts-speakers" class="ts-speakers section-bg">
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
            <div class="col-lg-3 col-md-6">
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
            <div class="col-lg-3 col-md-6">
               <div class="ts-speaker">
                  <div class="speaker-img">
                     <img class="img-fluid" src="'.ROOT.'/includes/images/speakers/speaker2.jpg" alt="">
                     <a href="#popup_2"  class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">
                                 <i class="icon icon-plus"></i>
                             </a>
                  </div>
                  <div class="ts-speaker-info">
                     <h3 class="ts-title"><a href="#">Melisa Lundryn</a></h3>
                     <p>
                        Lead Designer, Payol
                     </p>
                  </div>
               </div>
               <!-- popup start-->
               <div id="popup_2" class="container ts-speaker-popup mfp-hide">
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="ts-speaker-popup-img">
                           <img src="'.ROOT.'/includes/images/speakers/speaker2.jpg" alt="">
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
            <div class="col-lg-3 col-md-6">
               <div class="ts-speaker">
                  <div class="speaker-img">
                     <img class="img-fluid" src="'.ROOT.'/includes/images/speakers/speaker3.jpg" alt="">
                     <a href="#popup_3" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">
                                 <i class="icon icon-plus"></i>
                             </a>
                  </div>
                  <div class="ts-speaker-info">
                     <h3 class="ts-title"><a href="#">Agaton Johnsson</a></h3>
                     <p>
                        Developer Expert
                     </p>
                  </div>
               </div>
               <!-- popup start-->
               <div id="popup_3" class="container ts-speaker-popup mfp-hide">
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="ts-speaker-popup-img">
                           <img src="'.ROOT.'/includes/images/speakers/speaker3.jpg" alt="">
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
            <div class="col-lg-3 col-md-6">
               <div class="ts-speaker">
                  <div class="speaker-img">
                     <img class="img-fluid" src="'.ROOT.'/includes/images/speakers/speaker4.jpg" alt="">
                     <a href="#popup_4" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">
                                 <i class="icon icon-plus"></i>
                             </a>
                  </div>
                  <div class="ts-speaker-info">
                     <h3 class="ts-title"><a href="#">Rebecca Henrikon</a></h3>
                     <p>
                        Founder, Cards
                     </p>
                  </div>
               </div>
               <!-- popup start-->
               <div id="popup_4" class="container ts-speaker-popup mfp-hide">
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="ts-speaker-popup-img">
                           <img src="'.ROOT.'/includes/images/speakers/speaker4.jpg" alt="">
                        </div>
                     </div><!-- col end-->
                     <div class="col-lg-6">
                        <div class="ts-speaker-popup-content">
                           <h3 class="ts-title">David Robert</h3>
                           <span class="speakder-designation">Cheif Architecture</span>
                           <img class="company-logo" src="images/sponsors/sponsor-6.png" alt="">
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
            <div class="col-lg-3 col-md-6">
               <div class="ts-speaker">
                  <div class="speaker-img">
                     <img class="img-fluid" src="'.ROOT.'/includes/images/speakers/speaker5.jpg" alt="">
                     <a href="#popup_5" class="view-speaker  ts-image-popup" data-effect="mfp-zoom-in">
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
               <div id="popup_5" class="container ts-speaker-popup mfp-hide">
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="ts-speaker-popup-img">
                           <img src="'.ROOT.'/includes/images/speakers/speaker5.jpg" alt="">
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
            <div class="col-lg-3 col-md-6">
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
            <div class="col-lg-3 col-md-6">
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

            <div class="col-lg-3 col-md-6">
               <div class="ts-speaker">
                  <div class="speaker-img">
                     <img class="img-fluid" src="'.ROOT.'/includes/images/speakers/speaker8.jpg" alt="">
                     <a href="#" class="view-speaker">
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
            </div> <!-- col end-->
         </div><!-- row end-->
      </div><!-- container end-->

      <!-- shap img-->
      <div class="speaker-shap">
         <img class="shap1" src="'.ROOT.'/includes/images/shap/home_speaker_memphis1.png" alt="">
         <img class="shap2" src="'.ROOT.'/includes/mages/shap/home_speaker_memphis2.png" alt="">
         <img class="shap3" src="'.ROOT.'/includes/images/shap/home_speaker_memphis3.png" alt="">
      </div>
      <!-- shap img end-->
   </section>
   <!-- ts speaker end-->

   <!-- row end-->
   </div>
   <!-- popup end-->
';
        return $content;
    }

    // To view all partners
    public static function viewAllPartners(){
        $content = '<div id="popup_partners" class="container ts-speaker-popup mfp-hide">
      
		<section id="ts-sponsors" class="ts-sponsors">
			<div class="container">
				<div class="row text-center">
					<div class="col-lg-12 mx-auto">
						<h2 class="section-title text-center">
							<span>Who Helps us</span>
							Our Partners
						</h2>
					</div>
				</div>

				<div class="sponsors-wrap">
						<!-- <h3 class="sponsor-title text-center">Our Partners</h3> -->
						<div class="row sponsor-padding text-center">
							<div class="col-lg-3">
								<a href="#" class="sponsors-logo">
									<img class="img-fluid" src="'.ROOT.'/includes/images/sponsors/sponsor-1.png" alt="" />
								</a>
							</div>
							<!-- Col 1 end -->
							<div class="col-lg-3">
								<a href="#" class="sponsors-logo">
									<img class="img-fluid" src="'.ROOT.'/includes/images/sponsors/sponsor-2.png" alt="" />
								</a>
							</div>
							<!-- Col 2 end -->
							<div class="col-lg-3">
								<a href="#" class="sponsors-logo">
									<img class="img-fluid" src="'.ROOT.'/includes/images/sponsors/sponsor-3.png" alt="" />
								</a>
							</div>
							<!-- Col 3 end -->
							<div class="col-lg-3">
								<a href="#" class="sponsors-logo">
									<img class="img-fluid" src="'.ROOT.'/includes/images/sponsors/sponsor-4.png" alt="" />
								</a>
							</div>
							<!-- Col 3 end -->
						</div>
					</div>
	
					<!--/ Content row 3 end -->

			</div>
			<!--/ Container end -->
		</section>
		<!-- Sponsors end --><!-- row end-->
   </div>
   <!-- popup end-->';
            return $content;
        }

    // To create a partner
    public static function createPartner(){
        $content ='';
        return $content;
    }

    // To view all sponsors
    public  static  function viewAllSponsors(){
        $content = ' <div id="popup_sponsors" class="container ts-speaker-popup mfp-hide">
   
   
		<section id="ts-sponsors" class="ts-sponsors">
            <div class="container">
               <div class="row text-center">
                  <div class="col-lg-12 mx-auto">
                     <h2 class="section-title text-center">
                        <span>Who Helps us</span>
                        Our Sponsors
                     </h2>
                  </div>
               </div>
               <!--/ Title row end -->
               <div class="sponsors-wrap">
                  <h3 class="sponsor-title text-center">Platinum Sponsors</h3>
                  <div class="row sponsor-padding text-center">
                     <div class="col-lg-3">
                        <a href="#" class="sponsors-logo">
                           <img class="img-fluid" src="'.ROOT.'/includes/images/sponsors/sponsor-1.png" alt="" />
                        </a>
                     </div>
                     <!-- Col 1 end -->
                     <div class="col-lg-3">
                        <a href="#" class="sponsors-logo">
                           <img class="img-fluid" src="'.ROOT.'/includes/images/sponsors/sponsor-2.png" alt="" />
                        </a>
                     </div>
                     <!-- Col 2 end -->
                     <div class="col-lg-3">
                        <a href="#" class="sponsors-logo">
                           <img class="img-fluid" src="'.ROOT.'/includes/images/sponsors/sponsor-3.png" alt="" />
                        </a>
                     </div>
                     <!-- Col 3 end -->
                     <div class="col-lg-3">
                        <a href="#" class="sponsors-logo">
                           <img class="img-fluid" src="'.ROOT.'/includes/images/sponsors/sponsor-4.png" alt="" />
                        </a>
                     </div>
                     <!-- Col 3 end -->
                  </div>
               </div>
   
               <!--/ Content row 1 end -->
               <div class="sponsors-wrap">
                  <h3 class="sponsor-title text-center">Gold Sponsors</h3>
                  <div class="row sponsor-padding text-center">
                     <div class="col-lg-3">
                        <a href="#" class="sponsors-logo">
                           <img class="img-fluid" src="'.ROOT.'/includes/images/sponsors/sponsor-5.png" alt="" />
                        </a>
                     </div>
                     <!-- Col 1 end -->
                     <div class="col-lg-3">
                        <a href="#" class="sponsors-logo">
                           <img class="img-fluid" src="'.ROOT.'/includes/images/sponsors/sponsor-6.png" alt="" />
                        </a>
                     </div>
                     <!-- Col 2 end -->
                     <div class="col-lg-3">
                        <a href="#" class="sponsors-logo">
                           <img class="img-fluid" src="'.ROOT.'/includes/images/sponsors/sponsor-7.png" alt="" />
                        </a>
                     </div>
                     <!-- Col 3 end -->
                     <div class="col-lg-3">
                        <a href="#" class="sponsors-logo">
                           <img class="img-fluid" src="'.ROOT.'/includes/images/sponsors/sponsor-8.png" alt="" />
                        </a>
                     </div>
                     <!-- Col 3 end -->
                  </div>
               </div>
   
               <!--/ Content row 2 end -->
   
               <div class="sponsors-wrap">
                     <h3 class="sponsor-title text-center">Media Partners</h3>
                     <div class="row sponsor-padding text-center">
                        <div class="col-lg-3">
                           <a href="#" class="sponsors-logo">
                              <img class="img-fluid" src="'.ROOT.'/includes/images/sponsors/sponsor-1.png" alt="" />
                           </a>
                        </div>
                        <!-- Col 1 end -->
                        <div class="col-lg-3">
                           <a href="#" class="sponsors-logo">
                              <img class="img-fluid" src="'.ROOT.'/includes/images/sponsors/sponsor-2.png" alt="" />
                           </a>
                        </div>
                        <!-- Col 2 end -->
                        <div class="col-lg-3">
                           <a href="#" class="sponsors-logo">
                              <img class="img-fluid" src="'.ROOT.'/includes/images/sponsors/sponsor-3.png" alt="" />
                           </a>
                        </div>
                        <!-- Col 3 end -->
                        <div class="col-lg-3">
                           <a href="#" class="sponsors-logo">
                              <img class="img-fluid" src="'.ROOT.'/includes/images/sponsors/sponsor-4.png" alt="" />
                           </a>
                        </div>
                        <!-- Col 3 end -->
                     </div>
                  </div>
      
                  <!--/ Content row 3 end -->';
   
        return $content;
    }

    // To get sponsors categories
    public static function sponsorCategory($name)
    {
            $content='<div class="col-lg-4">
                        <div class="pricing-item ">
                           <img class="pricing-dot " src="'.ROOT.'/includes/images/pricing/dot.png" alt="">
                           <div class="ts-pricing-box">
      
                              <div class="ts-pricing-header">
                                 <h2 class="ts-pricing-name">'.$name.'</h2>
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
                                 <a name="id" href="#popup_sponsor_'.$name.'" class="view-speaker ts-image-popup btn pricing-btn" data-effect="mfp-zoom-in">Become A Sponsor</a>
                                 <p class="vate-text">All prices exclude 25% VAT</p>
                              </div>
                           </div><!-- ts pricing box-->
                           <img class="pricing-dot1 " src="'.ROOT.'/includes/images/pricing/dot.png" alt="">
                        </div>
                     </div><!-- col end-->';
            return $content;

    }

    // To become a sponsor
    public static function becomeSponsor($name)
    {        switch ($name) {
        case 'silver':
            $cat= '<option value="1">SILVER</option>';
            break;
        case 'gold':
            $cat= '<option value="2">GOLD</option>';
            break;
        case 'platinum':
            $cat= '<option value="3">PLATINUM</option>';
            break;
    }
        $content = '<!-- popup start-->
                <div id="popup_sponsor_'.$name.'" class="container ts-speaker-popup mfp-hide">
                     <div class="col-lg-4 offset-lg-1">
                        <div class="hero-form-content">
                           <h2>Register</h2>
                           <p>Welcome, Register Now To Become A Sponsor For Our Summit:</p>
                           <form action="?action=sponsor" method="POST" class="hero-form">
                              <input class="form-control form-control-name" placeholder="Name" name="name" id="name" type="text" required="">
                              <input class="form-control form-control-phone" placeholder="Phone" name="phone" id="phone" type="number">
                              <input class="form-control form-control-email" placeholder="Email" name="email" id="email" type="email" required="">
                              <select name="ticket" id="ticket">'.$cat.'</select>
                              <button class="btn" type="submit"> Register Now</button>
                           </form>
                        </div>
                     </div>
                      </div><!-- popup end-->
';
        return $content;
    }

    //To save sponsor details
    public static function saveSponsorDetails(){
        $company= database::prepData($_POST['name']);
        $phone= database::prepData($_POST['phone']);
        $email = database::prepData($_POST['email']);
        $category = database::prepData($_POST['ticket']);
        $status = 1;
        $result = database::performQuery("INSERT INTO sponsor(company, phone_number, email, payment_status_id,sponsor_category_id) VALUES ('$company','$phone','$email',$status,$category)");
    }

    // To view the host
    public static function viewHost(){
        $content = '<!-- popup start-->
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
           <!-- popup end-->';
        return $content;
    }

    // To view the Venue
    public static function viewVenue(){
        $content = ' <!-- popup start-->
             <div id="popup_venue" class="container ts-speaker-popup mfp-hide">
               
                  <div id="page-banner-area" class="page-banner-area" style="background-image:url('.ROOT.'/includes/images/hero_area/banner_bg.jpg)">
                     <!-- Subpage title start -->
                     <div class="page-banner-title">
                        <div class="text-center">
                           <h2>Event Venue</h2>
                           <ol class="breadcrumb">
                              <li>
                                 <a href="#">Exhibit /</a>
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
            ';
        return $content;
    }
}

