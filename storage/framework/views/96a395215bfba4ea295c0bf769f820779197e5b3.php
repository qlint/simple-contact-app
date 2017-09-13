<?php $__env->startSection('title','TV'); ?>
<?php $__env->startSection('content'); ?>
      <div class="app-template">
         <main class="wrapperMain" role="main">
            <div class="">
               <aside class="navSidebar">
                  <nav class="navProperty">
                     <h1 class="navProperty-title"><a href="/tv" class="">Television</a></h1>
                     <div class="navProperty-toggle">
                        <div class="navProperty-toggleIcon iconCss-dropdown"></div>
                     </div>
                     <ul class="navProperty-list">
                        <li class="navProperty-link"><a href="" class="">TV Series</a></li>
                        <li class="navProperty-link"><a href="" class="">Documentaries</a></li>
                        <li class="navProperty-link"><a href="" class="">Reality</a></li>
                        <li class="navProperty-link"><a href="" class="">Sports</a></li>
                     </ul>
                  </nav>
               </aside>
            </div>
            <div class="content content--withSidebar">
               <header class="headerGrid headerGrid--fights">
                  <div class="headerGrid-block headerGrid-tabs">
                     <div class="navTabs ">
                        <ul class="navTabs-categories">
                           <li class="navTabs-category navTabs-category--selected"><a href="" class="">Catalog</a></li>
                           <li class="navTabs-category"><a href="" class="">Coming Soon</a></li>
                        </ul>
                        <div class="navTabs-toggle">
                           <div class="navTabs-toggleIcon iconCss-dropdown"></div>
                        </div>
                     </div>
                  </div>
               </header>
               <div class="fight">
                  <header class="fight-header">
                     <h3 class="fight-branding" style="color:#cdb375;">Drama</h3>
                     <h2 class="fight-title">Zebra Productions</h2>
                  </header>
                  <div class="fight-headliner">
                     <div class="fight-images fight-image--count-1"><img src="<?php echo e(URL::asset('img/tvpg/changes1-1030x288.jpg')); ?>"></div>
                     <div class="fight-headlinerContent">
                        <h4 class="fight-subtitle">Featured on KTN, MNet</h4>
                        <div class="fight-headlinerFighters">
                           <div class="fight-headlinerFighter" style="text-align: center;">Changes, Season I - II</div>
                        </div>
                     </div>
                  </div>
                  <div class="fight-link"><a href="" class="button button--small button--primary button--light button--arrow">Check It Out</a></div>
               </div>
               <div class="fight">
                  <header class="fight-header">
                     <h3 class="fight-branding" style="color:#cdb375;">Drama/ Soap Opera</h3>
                     <h2 class="fight-title">Spielworks Media</h2>
                  </header>
                  <div class="fight-headliner">
                     <div class="fight-images fight-image--count-1"><img src="<?php echo e(URL::asset('img/tvpg/ltb-1030x288.jpg')); ?>"></div>
                     <div class="fight-headlinerContent">
                        <h4 class="fight-subtitle">Featured on KTN, MNet</h4>
                        <div class="fight-headlinerFighters">
                           <div class="fight-headlinerFighter" style="text-align: center;">Lies That Bind</div>
                        </div>
                     </div>
                  </div>
                  <div class="fight-link"><a href="" class="button button--small button--primary button--light button--arrow">Check It Out</a></div>
               </div>
               <div class="fight">
                  <header class="fight-header">
                     <h3 class="fight-branding" style="color:#cdb375;">Drama / Comedy</h3>
                     <h2 class="fight-title">Insignia Productions</h2>
                  </header>
                  <div class="fight-headliner">
                     <div class="fight-images fight-image--count-1"><img src="<?php echo e(URL::asset('img/tvpg/prem-1030x288.jpg')); ?>"></div>
                     <div class="fight-headlinerContent">
                        <h4 class="fight-subtitle">Featured on KTN, Fox Life</h4>
                        <div class="fight-headlinerFighters">
                           <div class="fight-headlinerFighter" style="text-align: center;">Prem</div>
                        </div>
                     </div>
                  </div>
                  <div class="fight-link"><a href="" class="button button--small button--primary button--light button--arrow">Check It Out</a></div>
               </div>
            </div>
         </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('sub', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>