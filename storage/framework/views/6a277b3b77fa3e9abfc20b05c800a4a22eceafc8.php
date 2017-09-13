<?php $__env->startSection('title','Sign In'); ?>
<?php $__env->startSection('content'); ?>
      <div class="app-template">
         <main class="wrapperMain" role="main">
            <div class="content">
               <div class="content-login">
                  <div class="modal-login modal--padded">
                     <h1 class="modal-title"><span>Sign In </span><a href="#" class="modal-titleHelp">Help</a></h1>
                     <form action="#">
                        <div class="form-group">
                           <div class="input"><input class="form-control" placeholder="Email" type="email" value=""></div>
                        </div>
                        <div class="form-group">
                           <div class="input"><input class="form-control" placeholder="Password" type="password" value=""></div>
                        </div>
                        <div class="modal-loginForgotPassword"><a href="#">Forgot your password?</a></div>
                        <div class="modal-loginSignIn"><a href="#" class="button button--small button--primary">Sign In</a><input type="submit" style="position:absolute;left:-9999px;"></div>
                        <div class="modal-rememberMe checkbox"><label for="rememberMe"><input type="checkbox" id="rememberMe"><span> Remember me</span></label></div>
                     </form>
                  </div>
               </div>
            </div>
         </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>