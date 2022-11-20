<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
        <meta name="description" content="">
        <title>News Portal Website</title>        
		
        <link rel="icon" type="image/png" href="uploads/favicon.png">


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

        <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;600;700&display=swap" rel="stylesheet">

        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-6212352ed76fda0a"></script>        
        
        <!-- Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-84213520-6"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());
            gtag('config', 'UA-84213520-6');
        </script>

    </head>
    <body>
      
  
        @include('home.layouts.top')

        @include('home.layouts.header')

        @include('home.layouts.navbar')      


        
        <div class="page-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>{{ $post->post_title }}</h2>
                        <nav class="breadcrumb-container">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="category.html">{{ $post->subCatagory->sub_catagory_name }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $post->post_title }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <div class="featured-photo">
                            <img src="uploads/n1.jpg" alt="">
                        </div>
                        <div class="sub">
                            <div class="item">
                                <b><i class="fas fa-user"></i></b>
                                <a href="">{{ $post->author->name }}</a>
                            </div>
                            <div class="item">
                                <b><i class="fas fa-edit"></i></b>
                                <a href="">{{ $post->subCatagory->sub_catagory_name }}</a>
                            </div>
                            <div class="item">
                                <b><i class="fas fa-clock"></i></b>
                              
                            </div>
                            <div class="item">
                                <b><i class="fas fa-eye"></i></b>
                                {{ $post->visitors }}
                            </div>
                        </div>
                        <div class="main-text" style="font-size: 32px;">
                           {!! $post->post_detail !!}
                        </div>
                        <div class="tag-section">
                            <h2>Tags</h2>
                            <div class="tag-section-content">
                                <a href=""><span class="badge bg-success">business</span></a>
                                <a href=""><span class="badge bg-success">politics</span></a>
                                <a href=""><span class="badge bg-success">nice</span></a>
                                <a href=""><span class="badge bg-success">good</span></a>
                                <a href=""><span class="badge bg-success">finest</span></a>
                            </div>
                        </div>
                   {{-- comment --}}
                      <div style="width: 100%;
                      display: flex; align-items: center; gap: 30px; margin-top: 64px;">
                         
                              @if(Auth::check())
                                <img src="http://127.0.0.1:8000/storage/photos/image-1668626957.webp"  width = "60px" height = "60px" style="border-radius: 50%;" alt="">
                              @else
                              <img src="asset{{'../../../home/uploads/n3.jpg'}}"  width = "60px" height = "60px" style="border-radius: 50%;" alt="">
                              @endif
                       
                          <form  method="post" action="{{ route('comment',$post) }}" enctype="multipart/form-data" style="display: flex;
                          align-items: center;">
                            @csrf
    
                            <div class="form-group mb-3" style="display: flex; align-items: center;">
                                
                                <textarea  name="comment" id="" style="width: 400px; border: none; border-bottom: 3px solid rgb(28, 101, 196); outline: none; border-radius: 4px; resize: none;" ></textarea>
                            </div>
    
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Comment</button>
                            </div>
                        </form>


                      </div>

                        @include('home.layouts.related_news')
                    </div>

                    @include('home.layouts.sidebar')
                    
                </div>
            </div>
        </div>

        @include('home.layouts.footer')

        @include('home.layouts.copyright')
     
        <div class="scroll-top">
            <i class="fas fa-angle-up"></i>
        </div>
		
        <script src="asset{{'../../../home/js/custom.js'}}"></script>       
		
   </body>
</html>