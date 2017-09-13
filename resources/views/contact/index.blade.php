@extends('main')
@section('title','Contact Groups')
@section('content')
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
                        @foreach($addpersons as $addperson)
                           <li class="navProperty-link">
                              <h3>{{ $addperson->fname }} {{ $addperson->lname }}</h3>
                           </li>
                        @endforeach
                        <li class="navProperty-link">
                           <a href="{{ route('contact.create') }}" class="button button--primary" style="color: #000000;">Add New Contact</a>
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
                           
                           @foreach($addpersons as $addperson)
                              <tr>
                                 <th>{{ $addperson->id }}</th>
                                 <th>{{ $addperson->fname }}</th>
                                 <th>{{ $addperson->lname }}</th>
                                 <th>{{ $addperson->phone }}</th>
                                 <th>{{ $addperson->email }}</th>
                                 <th>{{ $addperson->group }}</th>
                                 <th>{{ date( 'M j, Y', strtotime($addperson->created_at)) }}</th>
                              </tr>
                           @endforeach

                        </tbody>
                     </table>
                     
               </div>
            </div>
         </main>
@endsection