<!DOCTYPE html>
<html class="" lang="en" data-react-checksum="1597088522">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
      <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
      <link href="{{ URL::asset('css/styles.css') }}" rel="stylesheet">
      @yield('stylesheets')
      <title>Contact App | @yield('title')</title>
   </head>
   <body class="template-commonTemplates-Homepage">
      <div class="pageLoading"></div>
      <header class="headerMain">
         <div class="navUtility-wrapper"></div>
         <div class="headerMain-wrapper">
            <div class="headerMain-logo">
               <a href="{{ route('home') }}" class="headerMain-logoLink">Contact App</a>
               <div class="headerMain-toggle"><i class="headerMain-toggleTop"></i><i class="headerMain-toggleMiddle"></i><i class="headerMain-toggleBottom"></i></div>
            </div>
         </div>
      </header>
      <!-- Header end -->
      @yield('content')
      <!-- Footer start -->
         
      </div>
      <!-- Modal -->
      <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Content will be loaded here from "remote.php" file -->
                <div class="content"></div>
            </div>
        </div>
      </div>

      <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <script src="{{ URL::asset('js/appgnyce.js') }}" async></script>
      @yield('scripts')
   </body>
</html>