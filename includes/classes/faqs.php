<?php
class faqs{
    //    Faqs funt
    public static function viewAllFaqs(){
        $content = '<li class="nav-item">                        
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
                                             4. How can my company sponsor this Event 2020?
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
';
        return $content;
    }
}




