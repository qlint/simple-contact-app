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
                  <p>Content data upload page. This is stored in a database and accessed via the specific content's page.</p>
                  <form class="contactUs-form" novalidate>
                     <div class="form-group">
                        <label style="color: #ffcc00;">Content Type</label>
                        <div class="select ">
                           <select class="form-control ">
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
                        <label style="color: #ffcc00;">Name</label>
                        <div class="input">
                           <input class="form-control" placeholder="Use Name Exactly Used On Image" type="text" required>
                        </div>
                     </div>
                     <div class="form-group">
                        <label style="color: #ffcc00;">Images</label>
                        <div class="input">
                           <script type="text/javascript">
                              
                           </script>
                           <div class="row">
                              <div class="col-sm-4">
                                 <input type="file" onchange="document.getElementById('upld1').src = window.URL.createObjectURL(this.files[0])" name='UploadImage_1920x1080' placeholder="1920x1080">
                                 <img id="upld1" alt="1920" style="max-width: 200px;" />
                              </div>
                              <div class="col-sm-4">
                                 <input type="file" onchange="document.getElementById('upld2').src = window.URL.createObjectURL(this.files[0])" name='UploadImage_1280x720' placeholder="1280x720">
                                 <img id="upld2" alt="1280" style="max-width: 200px;" />
                              </div>
                              <div class="col-sm-4">
                                 <input type="file" onchange="document.getElementById('upld3').src = window.URL.createObjectURL(this.files[0])" name='UploadImage_1024x576' placeholder="1024x576">
                                 <img id="upld3" alt="1024" style="max-width: 200px;" />
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-sm-4">
                                 <input type="file" onchange="document.getElementById('upld4').src = window.URL.createObjectURL(this.files[0])" name='UploadImage_512x288' placeholder="512x288">
                                 <img id="upld4" alt="512" style="max-width: 200px;" />
                              </div>
                              <div class="col-sm-4">
                                 <input type="file" onchange="document.getElementById('upld5').src = window.URL.createObjectURL(this.files[0])" name='UploadImage_300x169' placeholder="300x169">
                                 <img id="upld5" alt="300" style="max-width: 200px;" />
                              </div>
                              <div class="col-sm-4">
                                 <input type="file" onchange="document.getElementById('upld6').src = window.URL.createObjectURL(this.files[0])" name='UploadImage_1030x288' placeholder="1030x288">
                                 <img id="upld6" alt="1030" style="max-width: 200px;" />
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <label style="color: #ffcc00;">Big Heading Title</label>
                        <div class="input">
                           <input class="form-control" placeholder="Big Title" type="text" required>
                        </div>
                     </div>
                     <div class="form-group">
                        <label style="color: #ffcc00;">Small Heading Title</label>
                        <div class="input">
                           <input class="form-control" placeholder="Small Title" type="text" required>
                        </div>
                     </div>
                     <div class="form-group">
                        <label style="color: #ffcc00;">Long Description</label>
                        <div class="input">
                           <textarea rows="5" placeholder="Description" required class="form-control"></textarea>
                        </div>
                     </div>
                     <div class="form-group">
                        <label style="color: #ffcc00;">Short Description</label>
                        <div class="input">
                           <textarea rows="3" placeholder="Summary" required class="form-control"></textarea>
                        </div>
                     </div>
                     <div class="form-group form-actions">
                        <button type="submit" class="button button--small">Submit</button>
                     </div>
                  </form>
               </div>
            </div>
         </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>