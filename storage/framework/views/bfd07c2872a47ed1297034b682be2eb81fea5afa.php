<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title>Content Portal</title>
      <meta http-equiv="content-type" content="text/html; charset=utf-8">
      <meta name="description" content="Preview, download or stream Run the Jewels 3 by Run The Jewels">
      <!-- FB OG tags -->
      <meta property="og:title" content="xxxxxxxxxxxxx gnyce xxxxxxxxxxxxx">
      <meta property="og:description" content="xxxxxxxxxxxxx gnyce xxxxxxxxxxxxx">
      <meta property="og:url" content="http://gnycedist.net/xxxxx">
      <meta property="og:type" content="article">
      <meta property="og:image" content="xxxxxxxxxxxxx gnyce xxxxxxxxxxxxx">
      <meta property="og:image" content="xxxxxxxxxxxxx gnyce xxxxxxxxxxxxx">
      <!-- additional media -->
      <!-- Twitter summary card meta tags -->
      <meta name="twitter:url" value="http://gnycedist.net/xxxxx">
      <meta name="twitter:title" content="xxxxxxxxxxxxx gnyce xxxxxxxxxxxxx">
      <meta name="twitter:description" content="xxxxxxxxxxxxx gnyce xxxxxxxxxxxxx">
      <meta name="twitter:card" content="summary_large_image">
      <meta name="twitter:image" content="xxxxxxxxxxxxx gnyce xxxxxxxxxxxxx">
      <meta name="twitter:image" content="xxxxxxxxxxxxx gnyce xxxxxxxxxxxxx">
      <!-- additional media -->
      <!-- load scripts -->
      <!--<script src="https://30362208fb0010f60042-0290c4f6b2235c127de3238391f2b960.ssl.cf3.rackcdn.com/30/scripts/mediaPlayer.min.js"></script>-->
      <script src="<?php echo e(URL::asset('js/portal/jquery-2.1.1.min.js')); ?>"></script>
      <script src="<?php echo e(URL::asset('js/portal/main.min.js')); ?>"></script>
      <!-- laod styles -->
      <link rel="stylesheet" href="<?php echo e(URL::asset('css/portal/main.min.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(URL::asset('css/portal/fonts.css')); ?>">
   </head>
   <body>
      <div id="prefpage">
         <div id="trackingcontainer" style="display:none;">
            <img src=" "/> <!-- Stats stuff -->   
         </div>
         <div id="bg">
            <img src="<?php echo e(URL::asset('img/portal/artwork_400x400bb.jpg')); ?>" alt=""/>
         </div>
         <img src="<?php echo e(URL::asset('img/portal/play_button.svg')); ?>" style="display:none"/>
         <img src="<?php echo e(URL::asset('img/portal/pause_button.svg')); ?>" style="display:none"/>
         <div id="scroller-anchor" style="overflow: visible"></div>
         <div id="layout"></div>
         <div id="header" class="service-container sticky" style="z-index:9000">
            <div class="header">
               <h1 class="artist">Run The Jewels<br/>Run the Jewels 3</h1>
               <p class="where">Choose your pre-order</p>
            </div>
            <div class="arrow"></div>
         </div>
         <div class="hideme" style="display:none;z-index:1"></div>
         <div id="service" class="service-container">
            <!--Artist information-->
            <!--End of artist information-->
            <div class="service">
               <a class="img-btn redirect"
                  href="http://runthejewels.com/?utm_campaign=Linkfire"
                  data-player="runthejewels"
                  data-apptype="manual"
                  >
               <img class="" width="125px" height="40px" style="display:inline-block;" src="<?php echo e(URL::asset('img/portal/music-service_runthejewels.svg')); ?>" alt="runthejewels"/>
               <span class="play">GET IT</span>
               </a>
            </div>
            <div class="service">
               <a class="img-btn redirect"
                  href="https://itunes.apple.com/ke/album/run-the-jewels-3/id1186542356?uo=4&&app=itunes&at=1l3vpUI&ct=LFV_cd5639226a7530df56a12d99f47c1239"
                  data-player="itunes"
                  data-apptype="manual"
                  >
               <img class="" width="125px" height="40px" style="display:inline-block;" src="<?php echo e(URL::asset('img/portal/music-service_itunes.svg')); ?>" alt="itunes"/>
               <span class="play">Download</span>
               </a>
            </div>
            <div class="service">
               <a class="img-btn redirect"
                  href="https://open.spotify.com/album/3v2GjFB9V5kHgrOCXn3sI9"
                  data-uri="spotify:album:3v2GjFB9V5kHgrOCXn3sI9"                 data-player="spotify"
                  data-apptype="manual"
                  >
               <img class="" width="125px" height="40px" style="display:inline-block;" src="<?php echo e(URL::asset('img/portal/music-service_spotify.svg')); ?>" alt="spotify"/>
               <span class="play">Play</span>
               </a>
            </div>
            <div class="service">
               <a class="img-btn redirect"
                  href="https://itunes.apple.com/ke/album/run-the-jewels-3/id1186542356?uo=4&&app=music&at=1l3vpUI&ct=LFV_cd5639226a7530df56a12d99f47c1239"
                  data-player="applemusic"
                  data-apptype="manual"
                  >
               <img class="" width="125px" height="40px" style="display:inline-block;" src="<?php echo e(URL::asset('img/portal/music-service_applemusic.svg')); ?>" alt="applemusic"/>
               <span class="play">Play</span>
               </a>
            </div>
            <div class="service">
               <a class="img-btn redirect"
                  href="https://play.google.com/store/music/album/Run_The_Jewels_Run_the_Jewels_3?id=Babd2uvkbuienhcq4vxcbg2qtmq&PCamRefID=LFV_cd5639226a7530df56a12d99f47c1239"
                  data-player="google-play"
                  data-apptype="manual"
                  >
               <img class="" width="125px" height="40px" style="display:inline-block;" src="<?php echo e(URL::asset('img/portal/music-service_google-play.svg')); ?>" alt="google-play"/>
               <span class="play">Play</span>
               </a>
            </div>
            <div class="service">
               <a class="img-btn redirect"
                  href="http://clic.reussissonsensemble.fr/click.asp?ref=794878&site=14485&type=text&tnb=13&diurl=http://eultech.fnac.com/dynclick/fnac/?eseg-name=affilieID&eseg-item=$ref$&eaf-publisher=AFFILINET&eaf-name=lien_profond&eaf-creative=$affmt$&eaf-creativetype=$affmn$&eurl=http%3A%2F%2Frecherche.fnac.com%2Fia2820187%2FRun-The-Jewels?Origin=affilinet$ref$"
                  data-player="fnac"
                  data-apptype="manual"
                  >
               <img class="" width="125px" height="40px" style="display:inline-block;" src="<?php echo e(URL::asset('img/portal/music-service_fnac.svg')); ?>" alt="fnac"/>
               <span class="play">Buy</span>
               </a>
            </div>
            <div class="service">
               <a class="img-btn redirect"
                  href="http://www.deezer.com/album/14838729?app_id=140685"
                  data-player="deezer"
                  data-apptype="manual"
                  >
               <img class="" width="125px" height="40px" style="display:inline-block;" src="<?php echo e(URL::asset('img/portal/music-service_deezer.svg')); ?>" alt="deezer"/>
               <span class="play">Play</span>
               </a>
            </div>
            <div class="service">
               <a class="img-btn redirect"
                  href="http://www.napster.com/artist/Art.135062150/album/Alb.247134926"
                  data-player="napster"
                  data-apptype="manual"
                  >
               <img class="" width="125px" height="40px" style="display:inline-block;" src="<?php echo e(URL::asset('img/portal/music-service_napster.svg')); ?>" alt="napster"/>
               <span class="play">Play</span>
               </a>
            </div>
            <div class="service">
               <a class="img-btn redirect"
                  href="http://www.rhapsody.com/artist/Art.135062150/album/Alb.247134926"
                  data-player="rhapsody"
                  data-apptype="manual"
                  >
               <img class="" width="125px" height="40px" style="display:inline-block;" src="<?php echo e(URL::asset('img/portal/music-service_rhapsody.svg')); ?>" alt="rhapsody"/>
               <span class="play">Play</span>
               </a>
            </div>
            <div class="service">
               <a class="img-btn redirect"
                  href="https://www.youtube.com/playlist?list=PL_rR2s4GqBlaK54uEN2WenZZ2n_XnBevs"
                  data-player="youtube"
                  data-apptype="manual"
                  >
               <img class="" width="125px" height="40px" style="display:inline-block;" src="<?php echo e(URL::asset('img/portal/music-service_youtube.svg')); ?>" alt="youtube"/>
               <span class="play">Play</span>
               </a>
            </div>
            <!--Last option should be 'i dont know'-->
         </div>
         <iframe id="redirect_iframe" src="" style="display:none"></iframe>
         <div id="loader" class="loader-bg"></div>
         <div id="loader-spinner" class="loader-image"><img src="<?php echo e(URL::asset('img/portal/bx_loader.gif')); ?>" alt="Loading"></div>
      </div>
      <div class="cookieWrapper">
         <!-- COOKIE MODAL -->
         <p id="cookieLink">
            Cookies help us deliver this service. By using this service you agree to our <a href="https://linkfire.com/privacy#terms-of-service" target="_blank">Terms</a>, <a href="https://linkfire.com/privacy#privacy-policy" target="_blank">Privacy</a> and <span data-toggle="modal" data-target="#cookieBanner">Cookie Policy</span>.
         </p>
         <!-- Modal -->     
         <div class="modal fade coobkieBannerModal" id="cookieBanner" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <div class="closeBtn" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="<?php echo e(URL::asset('img/portal/close2.svg')); ?>" alt="" /></span></div>
                     <h4 class="modal-title" id="myModalLabel">Cookie policy</h4>
                  </div>
                  <div class="modal-body">
                     <h3>Cookies</h3>
                     <p>We use cookies to ensure that we give you the best experience on our website. This includes cookies from third party. Such third party cookies may track your use of this landing page. Our partners also use cookies to ensure they show you advertising that is relevant to you.</p>
                     <h3>What are cookies?</h3>
                     <p>Cookies are small text files that contain a string of characters and uniquely identify a browser, together with Pixels, Cookies allow Linkfire to collect data on consumer behavior to improve the quality of the service provided. The data is also used by our partners to show you advertising that is relevant to you.</p>
                     <h3>What kind of cookies do we use and how?</h3>
                     <p>Linkfire uses first and third party cookies to gain insights on music consumption and choices on Linkfire's landing pages and assets. This data is reported to Linkfire's customers for them to improve on their service offering and serve contextual and relevant advertising. Linkfire uses three kind of cookies:</p>
                     <ul>
                        <li>
                           <p><b>First Party cookies:</b></p>
                           <ul>
                              <li>
                                 <p><b>Session cookies</b> - When someone visits a Linkfire landing page (like the one you're reading this text on), Linkfire places a session cookie on the visitors device that helps Linkfire provide insights regarding popularity of a music service, what country is the visitor browsing from and other interactions with the landing page. Session cookies only contain information about activities during the visit of the site, and expire when the browser is closed.</p>
                              </li>
                              <li>
                                 <p><b>Persistent cookies</b> - When someone visits a Linkfire landing page, Linkfire may also place a persistent Cookie on the visitor's device. Persistent Cookies differ from Session cookies as they can exist on the visitor’s device for an extended period of time until expired or until they are deleted. Linkfire's persistent cookies automatically expire after 2 years. These cookies are used to store and remember a visitor’s preferences such as the preferred music service or to detect recurring visits to the Asset.</p>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <p>
                              <b>Third-party cookies:</b> When someone visits an Linkfire landing page, Linkfire also places third-party Cookies on the visitor’s device that helps the third-party deliver or enable the delivery of advertising that is customized to the visitor’s interests and to keep track of how many ads the visitor has seen. Third-Party cookies vary in terms of expiration time, but all of them are within 2 years as a maximum. For a comprehensive list of our third-party partners, you can refer to our <a href="https://linkfire.com/privacy#pixel-partners" target="_blank">Pixel Partners List</a>
                           </p>
                        </li>
                     </ul>
                     <h3>How to control cookies</h3>
                     <p>You can change your cookie settings at any time by visiting our Privacy Portal and choose to <a href="https://linkfire.com/privacy#opt-out" target="_blank">opt-out</a>. You can also delete all cookies that are already on your computer and you can set most browsers to prevent them from being placed. If you do this, however, you may have to manually adjust some preferences every time you visit a site and some services and functionalities may not work.</p>
                     <h4>More information</h4>
                     <p>Please read our <a href="https://linkfire.com/privacy#privacy-policy" target="_blank">Privacy Policy</a> for more information regarding how Linkfire treats Data Privacy and our opt-out possibilities.</p>
                  </div>
                  <div class="modal-footer">
                     <div class="cookieBtns">       
                        <button type="button" class="btn btn-primary gotItBtn" data-dismiss="modal">Got it</button> 
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script>
         $(window).load(function(){
         var sticky = $('.sticky'),
             hideme = $('.hideme'),
             scroll = $(window).scrollTop();
         var stickyOffset = $('.sticky').offset().top;
         
                     $('#cookieLink').show();
         
                 $(window).scroll(function(){
             scroll = $(window).scrollTop();
             $( ".media-player, #scroller-anchor").removeClass("animate");
             if (scroll >= $('#scroller-anchor').height()-110) {
                 sticky.addClass('fixed');
                 hideme.css('display', 'block').css('height', sticky.css('height'));
                 if(typeof mediaPlayer !== 'undefined'){
                     mediaPlayer.layoutHeight = 110;
                 }
                 $(".button-play").css("top", "0px");
                 $(".play-list-controls").css("top", "27px");
             }
             else {
                 if(typeof mediaPlayer !== 'undefined'){
                     mediaPlayer.layoutHeight = size-scroll;
                 }
                 sticky.removeClass('fixed');
                 hideme.css('display', 'none');
                 if(typeof mediaPlayer !== 'undefined'){
                     $(".button-play").css("top", mediaPlayer.layoutHeight/2-52);
                     $(".play-list-controls").css("top", mediaPlayer.layoutHeight / 2 - 20);
                 }
             }
         
         });
                     });
         
         
      </script>
      <script>
         var mediaPlayer;
         var playList;
         var playListAlbum;
         var isPlaylist;
         var isMobile;
                     isMobile = false;
             var size = 320;
                 $("#scroller-anchor").css("height", size);
         dom.onReady( function () {
             'use strict';
             (function($){
                 $(window).load(function(){
                     $(".tracks-container").mCustomScrollbar();
                 });
             })(jQuery);
         
             var tracks = JSON.parse("[{\"artist\":\"Run The Jewels, Joi\",\"track\":\"Down (feat. Joi)\",\"sample\":{\"src\":\"https:\\/\\/p.scdn.co\\/mp3-preview\\/1e10b9bcf2fb430078aad656f759364bc896e3ef?cid=null\",\"type\":\"audio\\/mpeg\"},\"trackNum\":0,\"duration\":209,\"channel\":\"Spotify\",\"timer\":0},{\"artist\":\"Run The Jewels\",\"track\":\"Talk to Me\",\"sample\":{\"src\":\"https:\\/\\/p.scdn.co\\/mp3-preview\\/51cb8d125ea44bdc0bd9532bd93bb315c7d25bce?cid=null\",\"type\":\"audio\\/mpeg\"},\"trackNum\":1,\"duration\":151,\"channel\":\"Spotify\",\"timer\":29},{\"artist\":\"Run The Jewels\",\"track\":\"Legend Has It\",\"sample\":{\"src\":\"https:\\/\\/p.scdn.co\\/mp3-preview\\/91ad2b35e5335c11c5d70533a10ee0b9f86cc862?cid=null\",\"type\":\"audio\\/mpeg\"},\"trackNum\":2,\"duration\":205,\"channel\":\"Spotify\",\"timer\":29},{\"artist\":\"Run The Jewels\",\"track\":\"Call Ticketron\",\"sample\":{\"src\":\"https:\\/\\/p.scdn.co\\/mp3-preview\\/242c470db81b0a3d430d253c266d3f07b43ec3bc?cid=null\",\"type\":\"audio\\/mpeg\"},\"trackNum\":3,\"duration\":198,\"channel\":\"Spotify\",\"timer\":29},{\"artist\":\"Run The Jewels, Danny Brown\",\"track\":\"Hey Kids (Bumaye) [feat. Danny Brown]\",\"sample\":{\"src\":\"https:\\/\\/p.scdn.co\\/mp3-preview\\/97e9aa142081889a6f7dc7461c5f9a4fb047913e?cid=null\",\"type\":\"audio\\/mpeg\"},\"trackNum\":4,\"duration\":191,\"channel\":\"Spotify\",\"timer\":30},{\"artist\":\"Run The Jewels\",\"track\":\"Stay Gold\",\"sample\":{\"src\":\"https:\\/\\/p.scdn.co\\/mp3-preview\\/50ab465797206fe36ffdb3766d81f6335257a281?cid=null\",\"type\":\"audio\\/mpeg\"},\"trackNum\":5,\"duration\":207,\"channel\":\"Spotify\",\"timer\":2},{\"artist\":\"Run The Jewels\",\"track\":\"Don\'t Get Captured\",\"sample\":{\"src\":\"https:\\/\\/p.scdn.co\\/mp3-preview\\/b58a19a59c5ed096c55d84ed4f28f04ce483009c?cid=null\",\"type\":\"audio\\/mpeg\"},\"trackNum\":6,\"duration\":192,\"channel\":\"Spotify\"},{\"artist\":\"Run The Jewels, Tunde Adebimpe\",\"track\":\"Thieves! (Screamed the Ghost) [feat. Tunde Adebimpe]\",\"sample\":{\"src\":\"https:\\/\\/p.scdn.co\\/mp3-preview\\/e0ec3345089d15c06b42a1fae913bf4070e84bab?cid=null\",\"type\":\"audio\\/mpeg\"},\"trackNum\":7,\"duration\":242,\"channel\":\"Spotify\"},{\"artist\":\"Run The Jewels, BOOTS\",\"track\":\"2100 (feat. BOOTS)\",\"sample\":{\"src\":\"https:\\/\\/p.scdn.co\\/mp3-preview\\/ea56778694bea57816d15e3387a54a26dc04de34?cid=null\",\"type\":\"audio\\/mpeg\"},\"trackNum\":8,\"duration\":241,\"channel\":\"Spotify\"},{\"artist\":\"Run The Jewels, Trina\",\"track\":\"Panther Like a Panther (Miracle Mix) [feat. Trina]\",\"sample\":{\"src\":\"https:\\/\\/p.scdn.co\\/mp3-preview\\/2036992faabee16dc23ad0005320ab8f696cc21f?cid=null\",\"type\":\"audio\\/mpeg\"},\"trackNum\":9,\"duration\":221,\"channel\":\"Spotify\"},{\"artist\":\"Run The Jewels\",\"track\":\"Everybody Stay Calm\",\"sample\":{\"src\":\"https:\\/\\/p.scdn.co\\/mp3-preview\\/0f4f0510a46dc874da6f6629aff930797a83e49c?cid=null\",\"type\":\"audio\\/mpeg\"},\"trackNum\":10,\"duration\":178,\"channel\":\"Spotify\"},{\"artist\":\"Run The Jewels\",\"track\":\"Oh Mama\",\"sample\":{\"src\":\"https:\\/\\/p.scdn.co\\/mp3-preview\\/b49cb0490c0aa47a8fa2d67b91e0a16f594a592c?cid=null\",\"type\":\"audio\\/mpeg\"},\"trackNum\":11,\"duration\":216,\"channel\":\"Spotify\"},{\"artist\":\"Run The Jewels, Kamasi Washington\",\"track\":\"Thursday in the Danger Room (feat. Kamasi Washington)\",\"sample\":{\"src\":\"https:\\/\\/p.scdn.co\\/mp3-preview\\/2e78eb663c85e0a642bea27883f8dcbf6f41b10f?cid=null\",\"type\":\"audio\\/mpeg\"},\"trackNum\":12,\"duration\":262,\"channel\":\"Spotify\"},{\"artist\":\"Run The Jewels\",\"track\":\"A Report to the Shareholders \\/ Kill Your Masters\",\"sample\":{\"src\":\"https:\\/\\/p.scdn.co\\/mp3-preview\\/152abbdb108952fde08606241313cef33e6df009?cid=null\",\"type\":\"audio\\/mpeg\"},\"trackNum\":13,\"duration\":374,\"channel\":\"Spotify\"}]");
         
             if(tracks.length > 1){
                 isPlaylist = true;
                 $(".play-list-controls").css("top", size/2-20);
             } else {
                 isPlaylist = false;
             }
             mediaPlayer = new window.MP({
                 width:320,
                 height :size,
                 mobile : isMobile,
                 playlist : isPlaylist,
                 type : 'audio',
                 authorName : "Run The Jewels",
                 albumName : "Run the Jewels 3",
                 onPause : function () {
                     if(tracks.length == 1) {
                         $( ".where").css("padding", "5px 20px 20px");
                         $( ".artist").show();
                         $( ".where").show();
                     }
                     else{
                     }
                     $('.hideme').css('display', 'none');
                     $('.sticky').removeClass('fixed');
                     window.scrollTo(0, -1);
                 },
                 onPlay : function () {
                     if(typeof trackPlay !== 'undefined') {
                         trackPlay();
                     }
                     if(tracks.length == 1) {
                         $(".play-list-controls").hide();
                     }
                     else{
                         $( ".where").hide();
                     }
                     $( ".artist").hide();
                     //$( ".where").text("Continue listening below");
                     $( ".where").css("padding", "20px 20px 20px");
                     //window.scrollTo(0, 0);
                 },
                 onStop : function () {
                     //$('#service').show();
                 },
                 //volume : 0,
                 poster : 'img/portal/artwork_400x400bb.jpg',
                 appendTo: '#layout',
                 loop : false,
                 fade : false,
                 buttonPlayList : false,
                 visuaLizer : {
                     barWidth : 1.5,
                     spaceWidth : 0.5,
                     barColor : '#ff3000',
                 },
                 heightProgressBar: 3
         
             });
         
         
             if(isMobile){
                 $( ".content-overlay").css("background-color", "rgba(0,0,0,0.8)");
             }
         
             playListAlbum = new window.PL(mediaPlayer,{
                 loop : false,
                 autoPlayNextTrack : true,
                 autoPlayFirstTrack : false,
                 marginLeft : 15,
                 marginRight : 15,
                 columns : [
                     { name : 'Track', index : 'track', width : '50%'},
                     { name : 'Artist', index : 'artist', width : '40%' },
                     { name : 'Time', index : 'duration', width : '10%' }
                 ]
             });
             playListAlbum.appendTo('#header .header');
             dom('#' + mediaPlayer.id + ' .button-play-list.music-bnt').on('click', function (e) {
                 playListAlbum.toggle();
             });
             playListAlbum.addTracks(tracks);
             playListAlbum.show();
             window.scrollTo(0, 0);
             // Set height Progress Bar
             dom('#heightProgressBar').on('change', function () {
                 var height = this.value;
                 if(typeof mediaPlayer !== 'undefined'){
                     mediaPlayer.setHeightProgressBar(height);
                 }
             });
         });
      </script>
      <iframe id="detectURI" src="" style="display:none"></iframe>
      <script type="text/javascript">
         // Avoid namespace polution
         var linkfireDeeplink = {
           clicked: false,
           iframeTarget: document.getElementById('detectURI'),
           isDesktop: true,
           services: document.getElementsByClassName('redirect'),
           visited: 0
         };
         
         // Attach event listeners to all anchors
         for (var i = 0; i < linkfireDeeplink.services.length; i++) {
           linkfireDeeplink.services[i].addEventListener('click', redirectHandler, false);
         }
         
         function redirectHandler(e) {
           e.preventDefault();
           if(linkfireDeeplink.clicked) return false;
         
           // set user has clicked a service
           linkfireDeeplink.clicked = true;
           // Reset after 3sec
           setTimeout(function() {
               linkfireDeeplink.clicked = false;
           },3000);
           linkfireDeeplink.visited = 0;
         
           if(e.target.hasAttribute('href')){
             var link = e.target;
           }else{
             var link = this;
           }
         
           var uri = link.getAttribute('data-uri');
           
                 var url = link.getAttribute('href');
           var player = link.getAttribute('data-player');
           var appType = link.getAttribute('data-apptype');
           var eventlabel = 'unknown';
           if(link.children[1]){
             eventlabel = link.children[1].textContent;
           }
           
           if(!appType || appType.length == 0){
               appType = 'manual';
           }
         
           setCookie('LF_prefPlayer', player, 90);
           $('#trackingcontainer').append($('<img>', {
                         src : "https://stats.linkfire.com/Api/Click/app/cd5639226a7530df56a12d99f47c1239/159595?shortlink=rtj3.io%2Fgetit&url=https%3A%2F%2Fgeo.itunes.apple.com%2Fus%2Falbum%2Frun-the-jewels-3%2Fid1186541961%3Fmt%3D1%26app%3Dmusic%26at%3D1l3vpUI%26ct%3DLFV_cd5639226a7530df56a12d99f47c1239&ip=154.70.55.204&referrer=&userAgent=Mozilla%2F5.0+%28X11%3B+Linux+i686%29+AppleWebKit%2F537.36+%28KHTML%2C+like+Gecko%29+Ubuntu+Chromium%2F58.0.3029.81+Chrome%2F58.0.3029.81+Safari%2F537.36&linkChannel=59516&uid=5906a9e6921c65.66616479&browser=Chromium&device=desktop&os=Ubuntu&querystring=&artists=Run+The+Jewels&boardId=9432&tags=Music%3BAlbum&orgId=481&country=KE&city=Nairobi&activity=&channel=" + player + "&apptype=" + appType + "",
                         width : 1,
                         height : 1,
                     }));
           if(typeof(trackEvent) == 'function'){
             trackEvent('service', 'click', player);
           }
         
           if (typeof(fireEvent) == 'function') {
             fireEvent('serviceClick', 'Landing page', 'Service click', player);
           }
         
           if(typeof(triggerPixels) == 'function'){
             triggerPixels(player, eventlabel);
           }
           var open = false;
           if(link.hasAttribute('target')) {
             open = true;
           }
         
           redirect(url, uri, open);
         }
         
         function redirect(url, uri, open){
             // If URI is not set or if isDesktop == true, then open URL in new window
             if(!uri || uri.length === 0 || linkfireDeeplink.isDesktop) {
                 if(open) {
                     window.open(url, '_blank');
                     return false;
                 }
             }
             var userPrompted = false;
             // Give trigger pixels a chance to load
         
                 // if no URI and coming from tablet or phone OR desktop has no target="_blank", then redirect in same window
                 if(!uri || uri.length === 0) {
                   setTimeout(function() {
                     window.top.location.href = url;
                   }, 300);
         
                   return false;
                 }
         
                             // Set iframe URI (prompt user with "open application" dialog)
                 linkfireDeeplink.iframeTarget.src = uri;
                 
                 
                 // Check when window is not in focus (prompt is created)
                 window.onblur = function() {
                     userPrompted = true;
                 };
         
                 window.onfocus = function() {
                     linkfireDeeplink.clicked = false;
                     if(linkfireDeeplink.visited === 0) {
                         window.top.location.href = url;
                     }
                     linkfireDeeplink.visited++;
                 };
         
                 // If window hasn't been out of focus, then no prompt was made, and we sent user to URL
                 setTimeout(function() {
                     if(userPrompted == false) {
                         window.top.location.href = url;
                     }
                 }, 300);
                     }
         
         function setCookie(cname,cvalue,exdays) {
           var d = new Date();
           d.setTime(d.getTime() + (exdays*24*60*60*1000));
           var expires = "expires=" + d.toGMTString();
           document.cookie = cname+"="+cvalue+"; "+expires + "; path=/; domain=" + document.location.hostname + ";";
         }
      </script>
      <script>
         (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
         (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
         m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
         })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
         
         var linkfireTrackingEvents = {
           direct: [],
           landingVisit: [],
           assetInteraction: [],
           serviceClick: [],
           shareFromAsset: [],
           timeOnAsset: []
         };
         
         /**
          * The fireEvent function works as a controller, making sure that the various provider events are being fired based on user settings
          * @param  String eventType
          * @param  String category
          * @param  String action
          * @param  String label
          * @param  Integer value
          * @author  Anders Pedersen <ap@linkfire.com>
          */
         function fireEvent(eventType, category, action, label, value) {
           var events = linkfireTrackingEvents[eventType];
         
           for (var key in events) {
             if (!events.hasOwnProperty(key)) continue;
             var trackerInstance = events[key].tracker;
         
             switch (events[key].provider + '|' + eventType) {
               case 'google|direct':
                 gaEvent(trackerInstance, category, action, label, value);
                 break;
               case 'google|landingVisit':
                 gaEvent(trackerInstance, category, action, label, value);
                 break;
               case 'google|assetInteraction':
                 gaEvent(trackerInstance, category, action, label, value);
                 break;
               case 'google|serviceClick':
                 gaEvent(trackerInstance, category, action, label, value);
                 if (events[key].trackInteraction) gaEvent(trackerInstance, category, 'Interaction', 'Clicked on '+label, value);
                 break;
               case 'google|shareFromAsset':
                 gaEvent(trackerInstance, category, action, label, value);
                 if (events[key].trackInteraction) gaEvent(trackerInstance, category, 'Interaction', 'Shared on '+label, value);
                 break;
               case 'google|timeOnAsset':
                 gaEvent(trackerInstance, category, action, label, value);
                 break;
               default:
                 break;
             }
           }
         }
         
         /**
          * The gaEvent function sends an event to Google Analytics
          * @param  String trackerInstance
          * @param  String category
          * @param  String action
          * @param  String label
          * @param  Integer value
          * @author  Anders Pedersen <ap@linkfire.com>
          */
         function gaEvent(trackerInstance, category, action, label, value) {
           if (!window.ga && !ga.create) {
             // Do something in case Google Analytics hasn't loaded e.g. fallback storage source
             return;
           }
         
           ga(trackerInstance+'.send', 'event', category, action, label, value);
         }
         
         
               ga('create', 'UA-54175133-1', 'auto', {'name': 'tracker0', 'cookieExpires': 63072000, 'clientId': '5906a9e6921c65.66616479', 'sampleRate': 10});
           ga('tracker0.set', 'dimension1', 'rtj3.io');
           ga('tracker0.set', 'dimension2', 1);
           ga('tracker0.set', 'dimension3', 'Music,Album');
                   ga('tracker0.send', 'pageview');
                                       linkfireTrackingEvents.direct.push({tracker: 'tracker0', provider: 'google', trackInteraction: Boolean(true)})
                               linkfireTrackingEvents.landingVisit.push({tracker: 'tracker0', provider: 'google', trackInteraction: Boolean(true)})
                               linkfireTrackingEvents.assetInteraction.push({tracker: 'tracker0', provider: 'google', trackInteraction: Boolean(true)})
                               linkfireTrackingEvents.serviceClick.push({tracker: 'tracker0', provider: 'google', trackInteraction: Boolean(true)})
                               linkfireTrackingEvents.shareFromAsset.push({tracker: 'tracker0', provider: 'google', trackInteraction: Boolean(true)})
                               linkfireTrackingEvents.timeOnAsset.push({tracker: 'tracker0', provider: 'google', trackInteraction: Boolean(true)})
                           ga('create', 'UA-86682220-1', 'auto', {'name': 'tracker1', 'cookieExpires': 63072000, 'clientId': '5906a9e6921c65.66616479'});
                                         ga('tracker1.set', 'dimension1', 'Run The Jewels');
                                       ga('tracker1.set', 'dimension2', 'Run the Jewels 3');
                                                       ga('tracker1.set', 'dimension4', '886446293301');
                                                       ga('tracker1.set', 'dimension6', 'rtj3.io/getit');
                                       ga('tracker1.set', 'dimension7', 'YO');
                                       ga('tracker1.set', 'dimension8', 'Music,Album');
                               ga('tracker1.send', 'pageview');
                                       linkfireTrackingEvents.direct.push({tracker: 'tracker1', provider: 'google', trackInteraction: Boolean(true)})
                               linkfireTrackingEvents.landingVisit.push({tracker: 'tracker1', provider: 'google', trackInteraction: Boolean(true)})
                               linkfireTrackingEvents.assetInteraction.push({tracker: 'tracker1', provider: 'google', trackInteraction: Boolean(true)})
                               linkfireTrackingEvents.serviceClick.push({tracker: 'tracker1', provider: 'google', trackInteraction: Boolean(true)})
                               linkfireTrackingEvents.shareFromAsset.push({tracker: 'tracker1', provider: 'google', trackInteraction: Boolean(true)})
                               linkfireTrackingEvents.timeOnAsset.push({tracker: 'tracker1', provider: 'google', trackInteraction: Boolean(true)})
               
         /**
         * @deprecated  This is deprecated as of next version
         */
         //Ga event tracking
         function trackEvent(category, label, param){
         ga('linkfire.send', 'event', category, label, param);
         
           //ga('tracker0.send', 'event', category, label, param);
           //ga('tracker1.send', 'event', category, label, param);
         
         }
         
         //lf player tracking
         var trackedPlay = false;
         function trackPlay(){
         if(trackedPlay){
           return;
         }
         trackedPlay = true;
         $('#trackingcontainer').append($('<img>', {
                       src : "https://stats.linkfire.com/Api/Click/app/cd5639226a7530df56a12d99f47c1239/159595?shortlink=rtj3.io%2Fgetit&url=https%3A%2F%2Fgeo.itunes.apple.com%2Fus%2Falbum%2Frun-the-jewels-3%2Fid1186541961%3Fmt%3D1%26app%3Dmusic%26at%3D1l3vpUI%26ct%3DLFV_cd5639226a7530df56a12d99f47c1239&ip=154.70.55.204&referrer=&userAgent=Mozilla%2F5.0+%28X11%3B+Linux+i686%29+AppleWebKit%2F537.36+%28KHTML%2C+like+Gecko%29+Ubuntu+Chromium%2F58.0.3029.81+Chrome%2F58.0.3029.81+Safari%2F537.36&linkChannel=59516&uid=5906a9e6921c65.66616479&browser=Chromium&device=desktop&os=Ubuntu&querystring=&artists=Run+The+Jewels&boardId=9432&tags=Music%3BAlbum&orgId=481&country=KE&city=Nairobi&activity=&channel=linkfireplayer&apptype=lfplayer",
                       width : 1,
                       height : 1,
                   }));    if(typeof(trackEvent) == 'function'){
           trackEvent('musicplayer', 'play');
         }
         if(typeof(fireEvent) == 'function'){
           fireEvent('assetInteraction', 'Landing page', 'Interaction', 'Started music player');
         }
         if(typeof(triggerPixels) == 'function'){
           triggerPixels('player');
         }
         }
         
         // Fire an event for landing page visits (fireEvent function will handle if it should actually be sent)
         fireEvent('landingVisit', 'Landing page', 'Visit', 'Visited landing page');
         
         // Fire an event if user has been on page for 5 seconds
         setTimeout(function() {
         fireEvent('timeOnAsset', 'Landing page', 'Time spent', '5 seconds spent', 5);
         }, 5000);
      </script>
      <script>
         function triggerPixels(player, eventlabel){
            // Send to facebook
                if(window._fbdata){
                    if(player == 'player'){
                        window._fbdata.action = 'player';
                        fbq('trackCustom', 'LF', window._fbdata);
                    }else{
                        window._fbdata.action = 'service';
                        window._fbdata.musicservice = player;
                        window._fbdata.eventlabel = eventlabel;
                        fbq('trackCustom', 'LF', window._fbdata);
                    }
                }
                // Send to google adwords
                if (typeof(TriggerGooglePixel) == 'function') {
                    if(player == 'player'){
                        window.google_custom_params = {action: 'player'};
                    }else{
                        window.google_custom_params = {musicservice: player, action: 'service'};
                    }
         
                    TriggerGooglePixel();
                }
                // Send to adform
                if (typeof(TriggerAfPixel) == 'function') {
                    window.afParams = window.afParams + '|' + player;
                    TriggerAfPixel();
                }
         
                //Send rocketFuel
                if(typeof(triggerRocketFuel) == 'function'){
                    triggerRocketFuel(player);
                }
         
                //Send DoubleClick
                if(typeof(trackDc) == 'function'){
                    trackDc(player);
                }
         
                // Send to adello
                if (typeof(triggerAdelloIds) == 'function') {
                    //Set the correct metadata and specifiy the event id, 0: Pageview, 1: Service, 2: Player
                    if(player == 'player'){
                        adelloData.action = 'player';
                        triggerAdelloIds(adelloIds, 2);
                    }else{
                        adelloData.action = 'service';
                        adelloData.service = player;
                        triggerAdelloIds(adelloIds, 1);
                    }
                }
         
                                        var twServiceIds = ['numuc'];
                    if(player != 'player'){
                        triggerTwitterIds(twServiceIds);
                    }
                                            var twPlayerIds = ['numub'];
                    if(player == 'player'){
                        triggerTwitterIds(twPlayerIds);
                    }
                            
                                }
      </script>
      <script>
         !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
         n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
         n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
         t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
         document,'script','//connect.facebook.net/en_US/fbevents.js');
             fbq('init', '399736106876066');
             fbq('init', '977816538907955');
         window._fbdata = {"artists":["Run The Jewels"],"artist":"Run The Jewels","album":"Run the Jewels 3","upcs":["886446293301"],"genre":"Hip-Hop","tags":["Music","Album"],"organisation":"Motive Unknown","board":"Run The Jewels","url":"rtj3.io\/getit","action":"pageview","countryCode":"KE","country":"Kenya","city":"Nairobi","oid":"481","tlo":"481","bid":9432,"linkId":159595,"furl":"rtj3.io\/getitYO","domain":"rtj3.io","subdomain":null,"luuid":null,"ouuid":"6efa37b6-4c47-11e6-9fd0-066c3e7a8751","tlouuid":"6efa37b6-4c47-11e6-9fd0-066c3e7a8751","buuid":"89bf740e-10e6-4362-8ea9-ec0d8363cdda","sid":"cd5639226a7530df56a12d99f47c1239","uid":"5906a9e6921c65.66616479","channel":"YouTube","channelCode":"YO","activity":null,"timestamp":"01:05:2017"};
                 fbq('trackCustom', 'LF', window._fbdata);
      </script>
      <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=399736106876066&ev=LF&cd[artists]=Run+The+Jewels&cd[artist]=Run+The+Jewels&cd[album]=Run+the+Jewels+3&cd[upcs]=886446293301&cd[genre]=Hip-Hop&cd[tags]=Music%2CAlbum&cd[organisation]=Motive+Unknown&cd[board]=Run+The+Jewels&cd[url]=rtj3.io%2Fgetit&cd[action]=pageview&cd[oid]=481&cd[tlo]=481&cd[bid]=9432&cd[linkId]=159595&cd[furl]=rtj3.io%2FgetitYO&cd[domain]=rtj3.io&cd[subdomain]=&cd[luuid]=&cd[ouuid]=6efa37b6-4c47-11e6-9fd0-066c3e7a8751&cd[tlouuid]=6efa37b6-4c47-11e6-9fd0-066c3e7a8751&cd[buuid]=89bf740e-10e6-4362-8ea9-ec0d8363cdda&cd[sid]=cd5639226a7530df56a12d99f47c1239&cd[uid]=5906a9e6921c65.66616479&cd[channel]=YouTube&cd[channelCode]=YO&cd[activity]=&cd[timestamp]=01%3A05%3A2017" /></noscript>
      <noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=977816538907955&ev=LF&cd[artists]=Run+The+Jewels&cd[artist]=Run+The+Jewels&cd[album]=Run+the+Jewels+3&cd[upcs]=886446293301&cd[genre]=Hip-Hop&cd[tags]=Music%2CAlbum&cd[organisation]=Motive+Unknown&cd[board]=Run+The+Jewels&cd[url]=rtj3.io%2Fgetit&cd[action]=pageview&cd[oid]=481&cd[tlo]=481&cd[bid]=9432&cd[linkId]=159595&cd[furl]=rtj3.io%2FgetitYO&cd[domain]=rtj3.io&cd[subdomain]=&cd[luuid]=&cd[ouuid]=6efa37b6-4c47-11e6-9fd0-066c3e7a8751&cd[tlouuid]=6efa37b6-4c47-11e6-9fd0-066c3e7a8751&cd[buuid]=89bf740e-10e6-4362-8ea9-ec0d8363cdda&cd[sid]=cd5639226a7530df56a12d99f47c1239&cd[uid]=5906a9e6921c65.66616479&cd[channel]=YouTube&cd[channelCode]=YO&cd[activity]=&cd[timestamp]=01%3A05%3A2017" /></noscript>
      <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion_async.js"></script>
      <script>
         var google_custom_params = {"artists":["Run The Jewels"],"artist":"Run The Jewels","album":"Run the Jewels 3","upcs":["886446293301"],"genre":"Hip-Hop","tags":["Music","Album"],"organisation":"Motive Unknown","board":"Run The Jewels","url":"rtj3.io\/getit","action":"pageview","countryCode":"KE","country":"Kenya","city":"Nairobi"};
         var conv_handler = window['google_trackConversion'];
         var gaIds = [950249395];
         function TriggerGooglePixel(){
             for(var i = 0; i < gaIds.length; i++){
                 window.google_conversion_id = gaIds[i];
                 if (typeof(conv_handler) == 'function') {
                     conv_handler();
                 }
             }
         }
         TriggerGooglePixel();
         
      </script>
      <noscript><img height="1" width="1" alt="" style="display:none" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/950249395/?value=0&amp;guid=ON&amp;script=0&amp;data=artists%3DRun+The+Jewels;artist%3DRun+The+Jewels;album%3DRun+the+Jewels+3;upcs%3D886446293301;genre%3DHip-Hop;tags%3DMusic%2CAlbum;organisation%3DMotive+Unknownboard%3DRun+The+Jewelsurl%3Drtj3.io%2Fgetit" /></noscript>
      <script src="//platform.twitter.com/oct.js" type="text/javascript"></script>
      <script>
         function triggerTwitterIds(ids){
         if(window.twttr) {
             for(var i = 0; i < ids.length; i++){
                 twttr.conversion.trackPid(ids[i], { tw_sale_amount: 0, tw_order_quantity: 0 });
             }
         }
         }
         var ids = ['numgi'];
         triggerTwitterIds(ids);
      </script>
   </body>
</html>