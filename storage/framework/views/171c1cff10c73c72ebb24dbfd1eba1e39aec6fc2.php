<?php $__env->startSection('title','Showing Upload'); ?>
<?php $__env->startSection('content'); ?>
      <div class="app-template">
         <main class="wrapperMain" role="main">
            <div class="">
               <aside class="navSidebar">
                  <nav class="navProperty">
                     <h1 class="navProperty-title"><a href="#" class=""><?php echo e($data4page->content); ?></a></h1>
                     <div class="navProperty-toggle">
                        <div class="navProperty-toggleIcon iconCss-dropdown"></div>
                     </div>
                     <ul class="navProperty-list">
                        <li class="navProperty-link">
                           <?php echo e(date( 'M j, Y', strtotime($data4page->updated_at))); ?>

                        </li>
                        <li class="navProperty-link">
                           <button href="#" class="button button--primary">Shop</button>
                        </li>
                        <li class="navProperty-link">
                           <div class="navTertiary-watchLink" style="margin-top: 10px;">
                              <button href="#" class="button button--primary">Edit</button>
                           </div>
                           <div class="navTertiary-watchLink" style="margin-top: 10px;">
                              <button href="#" class="button button--primary">Delete</button>
                           </div>
                        </li>
                     </ul>
                  </nav>
                  <footer class="footerProperty">
                     <div class="upcomingSchedule">
                        <h4 class="upcomingSchedule-heading">Watch <?php echo e($data4page->h1Ttle); ?></h4>
                        <ol class="upcomingSchedule-list upcomingSchedule-list--someUnavailable">
                           <li class="upcomingSchedule-listItem--go upcomingSchedule-listItem upcomingSchedule-listItem--available">
                              <span class="upcomingSchedule-type">STORE</span>
                              <span class="upcomingSchedule-availability">
                                 <a href="#" class="">
                                    <span>
                                       <i class="iconCss-checkMedium"></i>
                                       <span class="upcomingSchedule-availabilityData">
                                          <span>Available</span>
                                       </span>
                                    </span>
                                 </a>
                              </span>
                           </li>
                        </ol>
                        <div class="upcomingSchedule-link">
                           <a href="#" class="button button--small button--primary button--light button--arrow">Buy This Now</a>
                           <a href="#" class="button button--small button--primary button--light button--arrow upcomingSchedule-scheduleLink">See More In Store</a>
                        </div>
                     </div>
                  </footer>
               </aside>
            </div>
            <div class="content content--withSidebar">
               <div class="hero hero--episodeHome ">
                  <div class="hero-background">
                     <img sizes="(min-width: 1180px) 950px, 100vw" src="../../<?php echo e($data4page->img1920); ?>" class=" picture picture--loading" srcset="../../<?php echo e($data4page->img1920); ?> 1920w, ../../<?php echo e($data4page->img1280); ?> 1280w, ../../<?php echo e($data4page->img1024); ?> 1024w">
                  </div>
                  <div class="hero-content">
                     <div class="pageTitle ">
                        <h4 class="pageTitle-preTitle"><?php echo e($data4page->h4Ttle); ?></h4>
                        <h2 class="pageTitle-title"><?php echo e($data4page->h1Ttle); ?></h2>
                     </div>
                  </div>
               </div>
               <div class="lead--episodeHome">
                  <p><?php echo e($data4page->desc1); ?></p>
               </div>
               <nav class="navTertiary navTertiary--oneColumn navTertiary--episodeHome">
                  <ul class="navTertiary-list">
                     <li class="navTertiary-link">
                        <a href="#" class="">About</a>
                     </li>
                  </ul>
                  <div class="navTertiary-watchLink">
                     <a href="#" class="button button--primary">Watch</a>
                  </div>
               </nav>
               <div class="upcomingSchedule">
                  <h4 class="upcomingSchedule-heading">Buy <?php echo e($data4page->h1Ttle); ?></h4>
                  <ol class="upcomingSchedule-list upcomingSchedule-list--someUnavailable">
                     <li class="upcomingSchedule-listItem--go upcomingSchedule-listItem upcomingSchedule-listItem--available">
                        <span class="upcomingSchedule-type">STORE</span>
                        <span class="upcomingSchedule-availability">
                           <a href="#" class="">
                              <span>
                                 <i class="iconCss-checkMedium"></i>
                                 <span class="upcomingSchedule-availabilityData">
                                    <span>Available</span>
                                 </span>
                              </span>
                           </a>
                        </span>
                     </li>
                  </ol>
                  <div class="upcomingSchedule-link">
                     <a href="#" class="button button--small button--primary button--light button--arrow">Buy This Now</a>
                     <a href="#" class="button button--small button--primary button--light button--arrow upcomingSchedule-scheduleLink">See More In Store</a>
                  </div>
               </div>
               <div class="content-primary content-primary--episodeHome">
                  <div class="mediaGrid mediaGrid--single mediaGrid--episodeHome">
                     <div class=" mediaGrid-item">
                        <div class="videoItem videoItem--video">
                           <div class="videoItem-content">
                              <a href="#" class="videoItem-imageContainer">
                                 <img sizes="(min-width: 1180px) 500px, (min-width: 768px) 50vw, 100vw" title="<?php echo e($data4page->h4Ttle); ?>" src="http://i.lv3.hbo.com/assets/images/comedy/jerrod-carmichael-8/video-stills/promo-49996101_PRO35_10-100.jpg" class="videoItem-image picture picture--loading" srcset="http://i.lv3.hbo.com/assets/images/comedy/jerrod-carmichael-8/video-stills/promo-49996101_PRO35_10-200.jpg 200w, ../../<?php echo e($data4page->img300); ?> 300w, ../../<?php echo e($data4page->img512); ?> 512w, ../../<?php echo e($data4page->img1024); ?> 1024w">
                                 <div class="videoItem-control videoItem-control--play"></div>
                              </a>
                           </div>
                           <a href="#" class="">
                              <span class="videoItem-title" title="<?php echo e($data4page->h4Ttle); ?>">Trailer</span>
                              <span class="videoItem-duration">(1:13)</span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>