<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
        <meta name="description" content="">
        <title>News Portal Website</title>        
		
        <link rel="icon" type="image/png" href="../../uploads/favicon.png">


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

      html{
          font-size: 10px;
      }
    .btn{
        border: none;
        outline: none;
        margin: 0;
        padding: 0;
      align-self: center
    }
    .icons{
       display: flex;
       gap: 30px;
       align-items: center;
       margin-top: 6.4rem;
   }
   .icons span{
       display: flex;
       gap: 1rem;
       align-items: center;
   }
     
   .icons span p{
      
       margin: 0;
   }
   svg{
       font-size: 28px;
       cursor: pointer;
   }
   
   .activated{

            fill: rgba(20, 176, 224, 0.966);
        } 

         .not_activated{
            
            fill: rgba(85, 85, 85, 0.5);
        } 


               /* comment */
               .profile_wrap{
            display: flex;
            align-items: center;
            width: 100%;
            margin-top: 6.8rem;
            margin-bottom: 6.4rem;
            margin-left: 4rem;
            gap: 5rem;
        }
        .user_profile{
            display: flex;
            align-items: center;
            width: 100%;
            margin-top: 6.4rem;
            margin-left: 2rem;
            gap: 1.5rem;
        }
        .user_profile p{
            margin: 0;
        }

        form{
            width: 70%;
            display: flex;
            align-items: center;
            gap: 3rem;
          
        }

        textarea{
            border-radius: 3px;
            font-size: 1.8rem;
            font-family: sans-serif;
            resize: none;
            width: 100%;
            height: 4rem;
            border: none;
            outline: none;
            border-bottom: rgb(19, 109, 192) solid 3px;
        }
        textarea::placeholder{
            font-size: 1.6rem;
            font-family: sans-serif;
            color: #444;
        }
        .comment_btn{
            width: 9rem;
            height: 4.5rem;
            font-size: 1.6rem;
            background-color: rgba(12, 204, 60, 0.849);
            border-radius: 5px;
            color: #fff;
            border: none;
            outline: none;
            cursor: pointer;
        }
        
        .profile{
            width: 5rem;
            height: 5rem;
           
        }
        .profile img{
            border-radius: 50%;
            width: 100%;
            height: 100%;
        }

        .comment{
            display: flex;
            /* align-items: center; */
            width: 80%;
            margin-bottom: 3rem;
            margin-left: 8rem;
             gap: 1rem; 
        }
      
        .author img{
            border-radius: 50%;
            width: 5rem;
            height: 5rem;
            /* margin: 0; */
        }
        .comment_body{
           display: inline-block;
           font-size: 1.6rem;
           /* margin-bottom: 6.4rem; */
          
        }
        .comment_wrapper{
            display: flex;
            align-self: flex-start;
            flex-direction: column;
            gap: 1rem;
        }
        .comment_wrapper p{
            display: inline-block;
            margin: 0.5rem;
            font-style: normal;
        }
        .comment_auther_name{
             font-size: 1.8rem;
             color: rgb(51, 48, 48);
             margin: 0;
        }
        .comment_text{
            margin: 0;
        }
   
        .like_btn{
            border: none;
            outline: none;
            margin: 0;
            background-color: #fff;
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
                  
              
                     {{-- for authenticated user --}}
         @if(Auth::check())
         <div class="icons">
            
           @if( $post->comments->where('user_id',Auth::user()->id)->count())
           <span>
               <svg class="activated" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M21.99 4c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4-.01-18zM18 14H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z"></path></svg>
               <p>{{ $post->comments->count()}}</p>
              
           </span>
           @else
           <span>
               <svg class="not_activated" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M21.99 4c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4-.01-18zM18 14H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z"></path></svg>
               <p>{{ $post->comments->count()}}</p>
              
           </span>
           @endif
        

    
      @if($post->likes->where('user_id',Auth::user()->id)->count() && 
           $post->likes->where('user_id',Auth::user()->id)->first()->is_liked)
        <form method = "post" action="{{ route('post_like',$post)}}">
           @csrf
            <button class="like_btn" type="submit">
               <span>
                   <svg class="activated"  stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M104 224H24c-13.255 0-24 10.745-24 24v240c0 13.255 10.745 24 24 24h80c13.255 0 24-10.745 24-24V248c0-13.255-10.745-24-24-24zM64 472c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24zM384 81.452c0 42.416-25.97 66.208-33.277 94.548h101.723c33.397 0 59.397 27.746 59.553 58.098.084 17.938-7.546 37.249-19.439 49.197l-.11.11c9.836 23.337 8.237 56.037-9.308 79.469 8.681 25.895-.069 57.704-16.382 74.757 4.298 17.598 2.244 32.575-6.148 44.632C440.202 511.587 389.616 512 346.839 512l-2.845-.001c-48.287-.017-87.806-17.598-119.56-31.725-15.957-7.099-36.821-15.887-52.651-16.178-6.54-.12-11.783-5.457-11.783-11.998v-213.77c0-3.2 1.282-6.271 3.558-8.521 39.614-39.144 56.648-80.587 89.117-113.111 14.804-14.832 20.188-37.236 25.393-58.902C282.515 39.293 291.817 0 312 0c24 0 72 8 72 81.452z"></path></svg>
                   <p>{{ $post->likes->where('is_liked',1)->count()}}</p>
                  </span>
            </button>
        </form>
        @else
        <form method = "post" action="{{ route('post_like',$post)}}">
           @csrf
            <button class="like_btn" type="submit">
               <span>
                   <svg class="not_activated"  stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M104 224H24c-13.255 0-24 10.745-24 24v240c0 13.255 10.745 24 24 24h80c13.255 0 24-10.745 24-24V248c0-13.255-10.745-24-24-24zM64 472c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24zM384 81.452c0 42.416-25.97 66.208-33.277 94.548h101.723c33.397 0 59.397 27.746 59.553 58.098.084 17.938-7.546 37.249-19.439 49.197l-.11.11c9.836 23.337 8.237 56.037-9.308 79.469 8.681 25.895-.069 57.704-16.382 74.757 4.298 17.598 2.244 32.575-6.148 44.632C440.202 511.587 389.616 512 346.839 512l-2.845-.001c-48.287-.017-87.806-17.598-119.56-31.725-15.957-7.099-36.821-15.887-52.651-16.178-6.54-.12-11.783-5.457-11.783-11.998v-213.77c0-3.2 1.282-6.271 3.558-8.521 39.614-39.144 56.648-80.587 89.117-113.111 14.804-14.832 20.188-37.236 25.393-58.902C282.515 39.293 291.817 0 312 0c24 0 72 8 72 81.452z"></path></svg>
                   <p>{{ $post->likes->where('is_liked',1)->count()}}</p>
                  </span>
            </button>
        </form>
        @endif
        
        </div>
    {{-- for non authenticated user --}}
        @else
        <div class="icons">
           @foreach ($post->comments as $comment)
           @if($loop->iteration == 2)
                @break   
          @endif
         <span>
             <svg class="not_activated" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M21.99 4c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4-.01-18zM18 14H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z"></path></svg>
             <p>{{ $post->comments->count()}}</p>
         </span>
         @endforeach

      <form method = "post" action="{{ route('post_like',$post)}}">
         @csrf
          <button class="like_btn" type="submit">
             <span>
                 <svg class="not_activated"  stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M104 224H24c-13.255 0-24 10.745-24 24v240c0 13.255 10.745 24 24 24h80c13.255 0 24-10.745 24-24V248c0-13.255-10.745-24-24-24zM64 472c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24zM384 81.452c0 42.416-25.97 66.208-33.277 94.548h101.723c33.397 0 59.397 27.746 59.553 58.098.084 17.938-7.546 37.249-19.439 49.197l-.11.11c9.836 23.337 8.237 56.037-9.308 79.469 8.681 25.895-.069 57.704-16.382 74.757 4.298 17.598 2.244 32.575-6.148 44.632C440.202 511.587 389.616 512 346.839 512l-2.845-.001c-48.287-.017-87.806-17.598-119.56-31.725-15.957-7.099-36.821-15.887-52.651-16.178-6.54-.12-11.783-5.457-11.783-11.998v-213.77c0-3.2 1.282-6.271 3.558-8.521 39.614-39.144 56.648-80.587 89.117-113.111 14.804-14.832 20.188-37.236 25.393-58.902C282.515 39.293 291.817 0 312 0c24 0 72 8 72 81.452z"></path></svg>
                 <p>{{ $post->likes->where('is_liked',1)->count()}}</p>
                </span>
          </button>
      </form>
      </div>
        @endif

                     <div class="profile_wrap">
                         @if(Auth::check())
                           <div class="profile">
                               <img src="{{ Auth::user()->photo->photo_url }}" alt="">
                          </div>
                        @else
                           <div class="profile">
                              <img src="http://127.0.0.1:8000/storage/profile-photo/image-1668947903.png" alt="">
                          </div>
                        @endif
            
                       <form method="post" action="{{ route('comment',$post) }}">
                         @csrf
                    <textarea name="comment" id="" cols="30" rows="5" placeholder="Comment here"></textarea>
                            <button type="submit" class="comment_btn">Comment</button>
                        </form>
                    </div>
                 @foreach ($post->comments as $comment)
                    <div class="comment">
                        <div class="author">
                            <img src="{{ $comment->author->photo->photo_url }}" alt="">
                        </div>
                        <div class="comment_body">
                            <div class="comment_wrapper">
                                <p class="comment_auther_name">
                                   {{ $comment->author->name }}
                                </p>
                                <p class="comment_text" >{{ $comment->comment }}</p>
                            </div>
                            
                        </div>
                    </div>
                @endforeach

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