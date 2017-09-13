@extends('main')
@section('title','Contact Groups')
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
                        @foreach($addcontacts as $addcontact)
                           <li class="navProperty-link">
                              <h3>{{ $addcontact->mycontactgroup }}</h3>
                           </li>
                        @endforeach
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
                           
                           @foreach($addcontacts as $addcontact)
                              <tr>
                                 <th>{{ $addcontact->id }}</th>
                                 <th>{{ $addcontact->mycontactgroup }}</th>
                                 <th>{{ date( 'M j, Y', strtotime($addcontact->created_at)) }}</th>
                                 <th>
                                    <a href="{{ route('contactgroup.edit', $addcontact->id) }}" class="button button--primary" style="color: #000000;">Edit</a>
                                    <a href="#" class="button button--primary" style="color: #000000;">Delete</a>
                                 </th>
                              </tr>
                           @endforeach

                        </tbody>
                     </table>
                     
               </div>
            </div>
         </main>
@endsection