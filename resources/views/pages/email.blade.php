@extends('main')
@section('title','Contact Us')
@section('content')
      <div class="app-template">
         <main class="wrapperMain" role="main">
            <div class="">
               <aside class="navSidebar">
                  <nav class="navProperty">
                     <h1 class="navProperty-title"><a href="#" class="">Contact App</a></h1>
                     <div class="navProperty-toggle">
                        <div class="navProperty-toggleIcon iconCss-dropdown"></div>
                     </div>
                     <ul class="navProperty-list">
                        
                     </ul>
                  </nav>
               </aside>
            </div>
            <div class="content content--withSidebar content--twoColumns">
               <div class="pageTitle pageTitle--sub pageTitle--divider">
                  <h2 class="pageTitle-title">Send Mail to {{ $data4page->fname }} {{ $data4page->lname }}</h2>
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
         </main>
@endsection