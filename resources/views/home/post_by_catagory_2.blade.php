<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
        <meta name="description" content="">
        <title>News Portal Website</title>   
        
        
         <!-- All CSS -->
            <link rel="stylesheet" href="asset{{'../../../home/css/bootstrap.min.css'}}">
            <link rel="stylesheet" href="asset{{'../../../home/css/jquery-ui.css'}}">
            <link rel="stylesheet" href="asset{{'../../../home/css/animate.min.css'}}">
            <link rel="stylesheet" href="asset{{'../../../home/css/magnific-popup.css'}}">
            <link rel="stylesheet" href="asset{{'../../../home/css/owl.carousel.min.css'}}">
            <link rel="stylesheet" href="asset{{'../../../home/css/select2.min.css'}}">
            <link rel="stylesheet" href="asset{{'../../../home/css/select2-bootstrap.min.css'}}">
            <link rel="stylesheet" href="asset{{'../../../home/css/sweetalert2.min.css'}}">
            <link rel="stylesheet" href="asset{{'../../../home/css/spacing.css'}}">
            <link rel="stylesheet" href="asset{{'../../../home/css/font_awesome_5_free.min.css'}}">
            <link rel="stylesheet" href="asset{{'../../../home/css/style.css'}}">
       <style>
         .btn{
                border: none;
                outline: none;
                margin: 0;
                padding: 0;
                align-self: center
             }
     </style>
        <!-- All Javascripts -->
            <script src="asset{{'../../../home/js/jquery-3.6.0.min.js'}}"></script>
            <script src="asset{{'../../../home/js/bootstrap.min.js'}}"></script>
            <script src="asset{{'../../../home/js/jquery-ui.js'}}"></script>
            <script src="asset{{'../../../home/js/jquery.magnific-popup.min.js'}}"></script>
            <script src="asset{{'../../../home/js/owl.carousel.min.js'}}"></script>
            <script src="asset{{'../../../home/js/wow.min.js'}}"></script>
            <script src="asset{{'../../../home/js/select2.full.js'}}"></script>
            <script src="asset{{'../../../home/js/sweetalert2.min.js'}}"></script>
            <script src="asset{{'../../../home/js/jquery.waypoints.min.js'}}"></script>
            <script src="asset{{'../../../home/js/acmeticker.js'}}"></script>
            <script>
                 window.dataLayer = window.dataLayer || [];
                  function gtag(){dataLayer.push(arguments);}
                  gtag('js', new Date());
                  gtag('config', 'UA-84213520-6');
               </script>
		
        <link rel="icon" type="image/png" href="asset{{'../../home/uploads/favicon.png'}}">

       {{-- @include('home.layouts.styles')
        
       @include('home.layouts.scripts') --}}


       @include('home.layouts.dependencies')
       
       

    </head>
    <body>
        @include('home.layouts.top')

        @include('home.layouts.header')

        @include('home.layouts.navbar')      

    @if($setting)
       @if($setting->news_ticker_status == 'Show') 
        <div class="news-ticker-item">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="acme-news-ticker">
                            <div class="acme-news-ticker-label">Latest News</div>
                            <div class="acme-news-ticker-box">
                                <ul class="my-news-ticker">
                                    @php $i = 0;  @endphp

                                        @foreach ($posts as $post)
                                           @php $i++; @endphp
                                           @if ($i > $setting->news_ticker_number) 
                                           @break  
                                           @endif
                                           <li><a href="">{{$post->post_title}}</a></li>
                                        @endforeach
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     @endif
  @endif
        
        
        <div class="home-content">
            <div class="container">
                <div class="row" style = "align-items: center">

                 @include('home.layouts.page_top')
        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        
                       @include('home.layouts.catagorywise_posts')
        
                    </div>
                   
                      @include('home.layouts.sidebar')
                    
                </div>
             </div>
          </div>
       </div>
     </div>
   </div>
        
        
       @include('home.layouts.video_content')
        
        @include('home.layouts.ad_5')

        @include('home.layouts.footer')

        @include('home.layouts.copyright')
		
        <script src="asset{{'../../home/js/custom.js'}}"></script> 
       
		
   </body>
</html>