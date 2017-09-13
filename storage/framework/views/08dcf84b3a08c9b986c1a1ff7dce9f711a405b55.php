<?php $__env->startSection('title','Faqs'); ?>
<?php $__env->startSection('content'); ?>
      <div class="app-template">
         <main class="wrapperMain" role="main">
            <div class="">
               <aside class="navSidebar">
                  <nav class="navProperty">
                     <h1 class="navProperty-title"><a href="/about/index.html" class="">About Gnyce</a></h1>
                     <div class="navProperty-toggle">
                        <div class="navProperty-toggleIcon iconCss-dropdown"></div>
                     </div>
                     <ul class="navProperty-list">
                        <li class="navProperty-link"><a href="#" class="">Contact Us</a></li>
                        <li class="navProperty-link"><a href="#" class="">Careers</a></li>
                        <li class="navProperty-link"><a href="#" class="">FAQs</a></li>
                        <li class="navProperty-link"><a href="" class="">Explore Gnyce</a></li>
                     </ul>
                  </nav>
               </aside>
            </div>
            <div class="content content--withSidebar">
               <div class="pageTitle pageTitle--sub">
                  <h2 class="pageTitle-title">FAQs</h2>
               </div>
               <style type="text/css"> article{display: none;} </style>
               <script type="text/javascript">
                  function myFunct1i() {
                   var faq1 = document.getElementById('faq-1');
                   if (faq1.style.display === 'none') {
                       faq1.style.display = 'block';
                   } else {
                       faq1.style.display = 'none';
                   }
                  }
               </script>
               <nav class="navTertiary navTertiary--sub navTertiary--twoColumns">
                  <ul class="navTertiary-list">
                     <li class="navTertiary-link"><a href="javascript:void(0)" onclick="return myFunct1i();" class="link--active">Working with Gnyce</a></li>
                     <li class="navTertiary-link"><a href="javascript:void(0)" onclick="return myFunct1i();" class="">Marketing and Distribution</a></li>
                     <li class="navTertiary-link"><a href="javascript:void(0)" onclick="return myFunct1i();" class="">Copyright and Licensing</a></li>
                     <li class="navTertiary-link"><a href="javascript:void(0)" onclick="return myFunct1i();" class="">Cloud Software</a></li>
                  </ul>
                  <ul class="navTertiary-list">
                     <li class="navTertiary-link"><a href="javascript:void(0)" onclick="return myFunct1i();" class="">Film</a></li>
                     <li class="navTertiary-link"><a href="javascript:void(0)" onclick="return myFunct1i();" class="">Music</a></li>
                     <li class="navTertiary-link"><a href="javascript:void(0)" onclick="return myFunct1i();" class="">Games</a></li>
                     <li class="navTertiary-link"><a href="javascript:void(0)" onclick="return myFunct1i();" class="">General Information</a></li>
                  </ul>
               </nav>
               <div class="content-primary content-primary--article">
                  <article id="faq-1" class="article">
                     <h2 class="article-titleMain">Working with Gnyce</h2>
                     <div class="article-content">
                        <ul>
                           <li><a href="" class="">First Contact</a></li>
                           <li><a href="" class="">Signing Contracts</a></li>
                           <li><a href="" class="">Gnyce Account Assignment</a></li>
                           <li><a href="" class="">Terms</a></li>
                           <li><a href="" class="">Complaints</a></li>
                        </ul>
                     </div>
                  </article>
                  <article id="faq-2" class="article">
                     <h2 class="article-titleMain">Marketing and Distribution</h2>
                     <div class="article-content">
                        <ul>
                           <li><a href="#" class="">Marketing your products</a></li>
                           <li><a href="#" class="">Marketing Avenues</a></li>
                           <li><a href="#" class="">Terms of Marketing</a></li>
                           <li><a href="#" class="">Distribution</a></li>
                           <li><a href="#" class="">Terms of Distribution</a></li>
                           <li><a href="#" class="">Revenue</a></li>
                     </div>
                  </article>
                  <article id="faq-3" class="article">
                     <h2 class="article-titleMain">Copyright and Licensing</h2>
                     <div class="article-content">
                        <ul>
                           <li><a href="#" class="">Full Copyright Acquisition</a></li>
                           <li><a href="#" class="">Partial Copyright Acquisition</a></li>
                           <li><a href="#" class="">Copyright and Film Financing</a></li>
                           <li><a href="#" class="">Licensing</a></li>
                        </ul>
                     </div>
                  </article>
                  <article id="faq-4" class="article">
                     <h2 class="article-titleMain">Cloud Software</h2>
                     <div class="article-content">
                        <ul>
                           <li><a href="#" class="">Broadcast Monitoring</a></li>
                           <li><a href="#" class="">Audio Fingerprinting</a></li>
                           <li><a href="#" class="">Popularity Indexing</a></li>
                           <li><a href="#" class="">Revenue Monitoring</a></li>
                        </ul>
                     </div>
                  </article>
               </div>
            </div>
         </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>