<?php $__env->startSection('title','Contact Groups'); ?>
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
                        <?php $__currentLoopData = $addcontacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $addcontact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <li class="navProperty-link">
                              <h3><?php echo e($addcontact->mycontactgroup); ?></h3>
                           </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </ul>
                  </nav>
               </aside>
            </div>
            <div class="content content--withSidebar">
               <div class="hero hero--episodeHome ">
                     <h1>All Available Groups</h1>
                     <br>
                     <hr>
                     <table class="table">
                        <thead>
                           <th>#</th>
                           <th>Group Name</th>
                           <th>Date Created</th>
                           <th></th>
                        </thead>
                        <tbody>
                           
                           <?php $__currentLoopData = $addcontacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $addcontact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                 <th><?php echo e($addcontact->id); ?></th>
                                 <th><?php echo e($addcontact->mycontactgroup); ?></th>
                                 <th><?php echo e(date( 'M j, Y', strtotime($addcontact->created_at))); ?></th>
                                 <th>
                                    <a href="<?php echo e(route('contactgroup.edit', $addcontact->id)); ?>" class="button button--primary" style="color: #000000;">Edit</a>
                                    <a href="#" class="button button--primary" style="color: #000000;">Delete</a>
                                 </th>
                              </tr>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                     </table>
                     
               </div>
            </div>
         </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>