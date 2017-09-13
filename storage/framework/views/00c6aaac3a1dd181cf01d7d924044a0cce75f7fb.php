<?php $__env->startSection('title','Contact Groups'); ?>
<?php $__env->startSection('content'); ?>
      <div class="app-template">
         <main class="wrapperMain" role="main">
            <div class="">
               <aside class="navSidebar">
                  <nav class="navProperty">
                     <h1 class="navProperty-title"><a href="#" class="">People</a></h1>
                     <div class="navProperty-toggle">
                        <div class="navProperty-toggleIcon iconCss-dropdown"></div>
                     </div>
                     <ul class="navProperty-list">
                        <?php $__currentLoopData = $addpersons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $addperson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <li class="navProperty-link">
                              <h3><?php echo e($addperson->fname); ?> <?php echo e($addperson->lname); ?></h3>
                           </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <li class="navProperty-link">
                           <a href="<?php echo e(route('contact.create')); ?>" class="button button--primary" style="color: #000000;">Add New Contact</a>
                        </li>
                     </ul>
                  </nav>
               </aside>
            </div>
            <div class="content content--withSidebar">
               <div class="hero hero--episodeHome ">
                     <h1>All Contacts</h1>
                     <br>
                     <hr>
                     <table class="table">
                        <thead>
                           <th>#</th>
                           <th>First Name</th>
                           <th>Second Name</th>
                           <th>Phone</th>
                           <th>Email</th>
                           <th>Group</th>
                           <th>Date Created</th>
                           <th></th>
                        </thead>
                        <tbody>
                           
                           <?php $__currentLoopData = $addpersons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $addperson): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                 <th><?php echo e($addperson->id); ?></th>
                                 <th><?php echo e($addperson->fname); ?></th>
                                 <th><?php echo e($addperson->lname); ?></th>
                                 <th><?php echo e($addperson->phone); ?></th>
                                 <th><?php echo e($addperson->email); ?></th>
                                 <th><?php echo e($addperson->group); ?></th>
                                 <th><?php echo e(date( 'M j, Y', strtotime($addperson->created_at))); ?></th>
                              </tr>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                     </table>
                     
               </div>
            </div>
         </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>