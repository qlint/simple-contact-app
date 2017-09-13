<?php $__env->startSection('stylesheets'); ?>
   <link href="<?php echo e(URL::asset('css/parsley.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('title','Upload'); ?>
<?php $__env->startSection('content'); ?>
      <div class="app-template">
         <main class="wrapperMain" role="main">
            <div class="">
               <aside class="navSidebar">
                  <nav class="navProperty">
                     <h1 class="navProperty-title"><a href="#" class="">Sitemap</a></h1>
                     <div class="navProperty-toggle">
                        <div class="navProperty-toggleIcon iconCss-dropdown"></div>
                     </div>
                     <ul class="navProperty-list">
                        <li class="navProperty-link"><a href="#" class="">Contact Us</a></li>
                        <li class="navProperty-link"><a href="#" class="">About Us</a></li>
                        <li class="navProperty-link"><a href="#" class="">Coming Soon</a></li>
                        <li class="navProperty-link"><a href="#" class="">FAQs</a></li>
                        <li class="navProperty-link"><a href="#" class="">Explore</a></li>
                        <li class="navProperty-link"><a href="#" class="">Portals</a></li>
                     </ul>
                  </nav>
               </aside>
            </div>
            <div class="content content--withSidebar content--twoColumns">
               <div class="pageTitle pageTitle--sub pageTitle--divider">
                  <h2 class="pageTitle-title">Upload Content</h2>
               </div>
               <div class="content-primary content-primary--contact">
                  <p>Content data upload page. This is stored in a database and accessed via other pages where necessary. All fields are required.</p>
                  <form class="contactUs-form" novalidate method="POST" action="<?php echo e(route('digital.store')); ?>" data-parsley-validate enctype="multipart/form-data">
                     <?php echo e(csrf_field()); ?>

                     <div class="form-group">
                        <label style="color: #ffcc00;">Content Type</label>
                        <div class="select ">
                           <select class="form-control " name="content" required>
                              <optgroup label="Select One">
                                 <option value="music" data-selected="false">Music</option>
                                 <option value="tv" data-selected="false">TV Show</option>
                                 <option value="movie" data-selected="false">Movie</option>
                                 <option value="game" data-selected="false">Game</option>
                              </optgroup>
                           </select>
                        </div>
                     </div>
                     <div class="form-group">
                        <label style="color: #ffcc00;">Name/ URL Slug (No space - Use underscores)</label>
                        <div class="input">
                           <input class="form-control" placeholder="Keep it short, no spaces or special characters" type="text" name="name" required>
                        </div>
                     </div>
                     <div class="form-group">
                        <label style="color: #ffcc00;">Images</label>
                        <div class="input">
                           <script type="text/javascript">
                              
                           </script>
                           <div class="row">
                              <div class="col-sm-4">
                                 <input type="file" required onchange="document.getElementById('upld1').src = window.URL.createObjectURL(this.files[0])" name="img1920">
                                 <img id="upld1" alt="1920" style="max-width: 200px;" />
                              </div>
                              <div class="col-sm-4">
                                 <input type="file" required onchange="document.getElementById('upld2').src = window.URL.createObjectURL(this.files[0])" name="img1280">
                                 <img id="upld2" alt="1280" style="max-width: 200px;" />
                              </div>
                              <div class="col-sm-4">
                                 <input type="file" required onchange="document.getElementById('upld3').src = window.URL.createObjectURL(this.files[0])" name="img1024">
                                 <img id="upld3" alt="1024" style="max-width: 200px;" />
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-sm-4">
                                 <input type="file" required onchange="document.getElementById('upld4').src = window.URL.createObjectURL(this.files[0])" name="img512">
                                 <img id="upld4" alt="512" style="max-width: 200px;" />
                              </div>
                              <div class="col-sm-4">
                                 <input type="file" required onchange="document.getElementById('upld5').src = window.URL.createObjectURL(this.files[0])" name="img300">
                                 <img id="upld5" alt="300" style="max-width: 200px;" />
                              </div>
                              <div class="col-sm-4">
                                 <input type="file" required onchange="document.getElementById('upld6').src = window.URL.createObjectURL(this.files[0])" name="img1030x288">
                                 <img id="upld6" alt="1030" style="max-width: 200px;" />
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <label style="color: #ffcc00;">Big Heading Title</label>
                        <div class="input">
                           <input class="form-control" placeholder="Big Title" name="h1Ttle" type="text" required>
                        </div>
                     </div>
                     <div class="form-group">
                        <label style="color: #ffcc00;">Small Heading Title</label>
                        <div class="input">
                           <input class="form-control" placeholder="Small Title" type="text" name="h4Ttle" data-parsley-maxlength="40" required>
                        </div>
                     </div>
                     <div class="form-group">
                        <label style="color: #ffcc00;">Long Description</label>
                        <div class="input">
                           <textarea rows="5" placeholder="Description" name="desc1" required class="form-control" data-parsley-maxlength="480"></textarea>
                        </div>
                     </div>
                     <div class="form-group">
                        <label style="color: #ffcc00;">Short Description</label>
                        <div class="input">
                           <textarea rows="3" placeholder="Summary" name="desc2" required class="form-control" data-parsley-maxlength="240"></textarea>
                        </div>
                     </div>
                     <div class="form-group">
                        <label style="color: #ffcc00;">Trailer URL</label>
                        <div class="input">
                           <input class="form-control" placeholder="URL to trailer video" type="text" name="trailerURL" data-parsley-maxlength="40" required>
                        </div>
                     </div>
                     <div class="form-group">
                        <label style="color: #ffcc00;">Portal URL</label>
                        <div class="input">
                           <input class="form-control" placeholder="URL to store portal" type="text" name="portalURL" data-parsley-maxlength="40" required>
                        </div>
                     </div>
                     <div class="form-group form-actions">
                        <button type="submit" name="submit" class="button button--small">Submit</button>
                     </div>
                  </form>
               </div>
            </div>
         </main>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
   <script src="<?php echo e(URL::asset('js/parsley.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>