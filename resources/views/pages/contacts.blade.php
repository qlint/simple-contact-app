@extends('main')
@section('title','Contact Us')
@section('content')
      <div class="app-template">
         <main class="wrapperMain" role="main">
            <div class="">
               <aside class="navSidebar">
                  <nav class="navProperty">
                     <h1 class="navProperty-title"><a href="#" class="">About Gnyce</a></h1>
                     <div class="navProperty-toggle">
                        <div class="navProperty-toggleIcon iconCss-dropdown"></div>
                     </div>
                     <ul class="navProperty-list">
                        <li class="navProperty-link"><a href="#" class="">Contact Us</a></li>
                        <li class="navProperty-link"><a href="#" class="">Careers</a></li>
                        <li class="navProperty-link"><a href="#" class="">FAQs</a></li>
                        <li class="navProperty-link"><a href="#" class="">Explore Gnyce</a></li>
                     </ul>
                  </nav>
               </aside>
            </div>
            <div class="content content--withSidebar content--twoColumns">
               <div class="pageTitle pageTitle--sub pageTitle--divider">
                  <h2 class="pageTitle-title">Contact Us</h2>
               </div>
               <div class="content-primary content-primary--contact">
                  <p>Gnyce Dist. is happy to receive your questions and feedback, however, due to a large volume of emails we may not be able to reply to each email we receive.<br/><br/>

                  Also check out our <font color="#FFFFFF"><A HREF="/faqs">FAQs Section</A></font> to see if we have already posted an answer to your question. <br/><br/>

                  If you have not found what you are looking for or need additional assistance please contact us at <font color="#FFFFFF"><A href="mailto:info@gnycedist.net">info@gnycedist.net</A></font> or call us at +254 774499922</p>
                  <form class="contactUs-form" novalidate>
                     <div class="form-group">
                        <label>Topic</label>
                        <div class="select ">
                           <select class="form-control ">
                              <optgroup label="Film">
                                 <option value="curbyourenthusiasm" data-selected="false">Genral Film Enquiry</option>
                                 <option value="gameofthrones" data-selected="false">Film Marketing &amp; Distribution</option>
                                 <option value="girls" data-selected="false">Film Licensing &amp; Copyright</option>
                                 <option value="hboboxing" data-selected="false">Film production financing</option>
                                 <option value="documentaries" data-selected="false">Film Partnerships</option>
                              </optgroup>
                              <optgroup label="Music">
                                 <option value="cinemax" data-selected="false">Music Marketing &amp; Distribution</option>
                                 <option value="contacthbogo" data-selected="false">Music Licensing &amp; Copyright</option>
                                 <option value="hbonowsupport" data-selected="false">Music Partnerships</option>
                              </optgroup>
                              <optgroup label="Games">
                                 <option value="general" data-selected="true">Genral Games Enquiry</option>
                                 <option value="general" data-selected="false">Games Marketing &amp; Distribution</option>
                                 <option value="general" data-selected="false">Games Licensing &amp; Copyright</option>
                                 <option value="general" data-selected="false">Game development financing</option>
                                 <option value="documentaries" data-selected="false">Games Partnerships</option>
                              </optgroup>
                              <optgroup label="Other">
                                 <option value="general" data-selected="false">General</option>
                                 <option value="hboclosedcaptions" data-selected="false">Complaints</option>
                                 <option value="copyrightviolations" data-selected="false">Copyright Violations</option>
                              </optgroup>
                           </select>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="input"><input class="form-control" placeholder="Your Name" type="text" required></div>
                     </div>
                     <div class="form-group">
                        <div class="input"><input class="form-control" placeholder="Your Email" type="email" required></div>
                     </div>
                     <div class="form-group">
                        <div class="input"><input class="form-control" placeholder="Message Title" type="text" required></div>
                     </div>
                     <div class="form-group">
                        <div><textarea rows="5" placeholder="Message" required class="form-control"></textarea></div>
                     </div>
                     <div class="form-group form-actions"><button type="submit" class="button button--small">Submit</button></div>
                  </form>
               </div>
            </div>
         </main>
@endsection