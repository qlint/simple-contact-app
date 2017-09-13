@extends('main')
@section('title','Showing Upload')
@section('content')
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
                           {{ date( 'M j, Y', strtotime($contactgroups->updated_at)) }}
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
                     <h2>- {{ $contactgroups->mycontactgroup }}</h2>
                     <hr>
                     <br><br>
                     <a href="{{ route('contactgroup.index') }}" class="button button--primary" style="color: #000000;">See All Groups</a>
               </div>
            </div>
         </main>
@endsection