@extends('main')
@section('stylesheets')
   <link href="{{ URL::asset('css/parsley.css') }}" rel="stylesheet">
@endsection
@section('title','Upload Details')
@section('content')
      <div class="app-template">
         <main class="wrapperMain" role="main">
            <div class="">
               <aside class="navSidebar">
                  <nav class="navProperty">
                     <h1 class="navProperty-title"><a href="#" class="">Contact Groups</a></h1>
                     <div class="navProperty-toggle">
                        <div class="navProperty-toggleIcon iconCss-dropdown"></div>
                     </div>
                     <ul class="navProperty-list">
                        <li class="navProperty-link"><a href="#" class="">Friends</a></li>
                        <li class="navProperty-link"><a href="#" class="">Family</a></li>
                        <li class="navProperty-link"><a href="#" class="">Work</a></li>
                        <li class="navProperty-link"><a href="#" class="">Mutual</a></li>
                        <li class="navProperty-link">
                           <a href="{{ route('contactgroup.create') }}" class="button button--primary" style="color: #000000;">ADD GROUP</a>
                        </li>
                     </ul>
                  </nav>
               </aside>
            </div>
            <div class="content content--withSidebar content--twoColumns">
               <div class="pageTitle pageTitle--sub pageTitle--divider">
                  <h2 class="pageTitle-title">Add New Groups</h2>
               </div>
               <div class="content-primary content-primary--contact">
                  <form class="contactUs-form" novalidate method="POST" action="{{ route('contactgroup.store') }}" data-parsley-validate enctype="multipart/form-data">
                     {{ csrf_field() }}
                     <div class="form-group">
                        <label style="color: #ffcc00;"> Contact Group</label>
                        <div class="input">
                           <input class="form-control" placeholder="Group Name" type="text" name="mycontactgroup" required>
                        </div>
                     </div>
                     <div class="form-group form-actions">
                        <button type="submit" name="submit" class="button button--small">Submit</button>
                     </div>
                  </form>
               </div>
            </div>
         </main>
@endsection
@section('scripts')
   <script src="{{ URL::asset('js/parsley.min.js') }}"></script>
@endsection