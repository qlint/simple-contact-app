<?php $__env->startSection('title','Showing Upload'); ?>
<?php $__env->startSection('content'); ?>
      <div class="app-template">
         <main class="wrapperMain" role="main">
            <div class="">
               <aside class="navSidebar">
                  <nav class="navProperty">
                     <h1 class="navProperty-title"><a href="#" class="">Groups</a></h1>
                     <div class="navProperty-toggle">
                        <div class="navProperty-toggleIcon iconCss-dropdown"></div>
                     </div>
                     <ul class="navProperty-list">
                        <li class="navProperty-link">
                           <?php echo e(date( 'M j, Y', strtotime($contactgroups->updated_at))); ?>

                        </li>
                        <li class="navProperty-link">
                           <h1>-</h1>
                        </li>
                     </ul>
                  </nav>
               </aside>
            </div>
            <div class="content content--withSidebar">
               <div class="hero hero--episodeHome ">
                     <h1>Group Created Successfully.</h1>
                     <br><br>
                     <h2>- <?php echo e($contactgroups->mycontactgroup); ?></h2>
                     <hr>
                     <br><br>
                     <a href="<?php echo e(route('contactgroup.index')); ?>" class="button button--primary" style="color: #000000;">See All Groups</a>
               </div>
            </div>
         </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>