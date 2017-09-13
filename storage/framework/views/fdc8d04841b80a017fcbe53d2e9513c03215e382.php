<?php $__env->startSection('title','Showing Upload'); ?>
<?php $__env->startSection('content'); ?>
      <div class="app-template">
         <main class="wrapperMain" role="main">
            <div class="">
               <aside class="navSidebar">
                  <nav class="navProperty">
                     <h1 class="navProperty-title"><a href="#" class=""><?php echo e($data4page->group); ?></a></h1>
                     <div class="navProperty-toggle">
                        <div class="navProperty-toggleIcon iconCss-dropdown"></div>
                     </div>
                     <ul class="navProperty-list">
                        <li class="navProperty-link">
                           <?php echo e(date( 'M j, Y', strtotime($data4page->updated_at))); ?>

                        </li>
                        <li class="navProperty-link">
                           <h1>-</h1>
                        </li>
                        <li class="navProperty-link">
                           <a href="<?php echo e(route('contact.index')); ?>" class="button button--primary" style="color: #000000;">See All Contacts</a>
                        </li>
                     </ul>
                     </ul>
                  </nav>
               </aside>
            </div>
            <div class="content content--withSidebar">
               <div class="hero hero--episodeHome ">
                     <h1>Added Successfully. Listed in - <?php echo e($data4page->group); ?></h1>
                     <br><br>
                     <h1><?php echo e($data4page->fname); ?> <?php echo e($data4page->lname); ?></h1>
                     <hr>
                     <br>
                     <h2><?php echo e($data4page->phone); ?></h2>
                     <hr>
                     <br>
                     <h2><a href="mailto:<?php echo e($data4page->email); ?>"><?php echo e($data4page->email); ?></a></h2>
                  
                     
                        <div class="pageTitle pageTitle--sub pageTitle--divider">
                           <h3 class="pageTitle-title">Send Mail to <?php echo e($data4page->fname); ?> <?php echo e($data4page->lname); ?></h3>
                        </div>
                        <div class="content-primary content-primary--contact">
                           <form class="contactUs-form" novalidate>
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
            </div>
         </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>