<link rel="icon" type="image/png" href="uploads/favicon.png">

 <!-- All CSS -->
 <link rel="stylesheet" href="asset{{'../../../../home/css/bootstrap.min.css'}}">
 <link rel="stylesheet" href="asset{{'../../../../home/css/jquery-ui.css'}}">
 <link rel="stylesheet" href="asset{{'../../../../home/css/animate.min.css'}}">
 <link rel="stylesheet" href="asset{{'../../../../home/css/magnific-popup.css'}}">
 <link rel="stylesheet" href="asset{{'../../../../home/css/owl.carousel.min.css'}}">
 <link rel="stylesheet" href="asset{{'../../../../home/css/select2.min.css'}}">
 <link rel="stylesheet" href="asset{{'../../../../home/css/select2-bootstrap.min.css'}}">
 <link rel="stylesheet" href="asset{{'../../../../home/css/sweetalert2.min.css'}}">
 <link rel="stylesheet" href="asset{{'../../../../home/css/spacing.css'}}">
 <link rel="stylesheet" href="asset{{'../../../../home/css/font_awesome_5_free.min.css'}}">
 <link rel="stylesheet" href="asset{{'../../../../home/css/style.css'}}">
 <style>

     html{
         font-size: 10px;
     }
   .btn{
       border: ;
       outline: none;
       margin: 0;
       padding: 0;
     align-self: center
   }
   .image_wrapper{
       width: 80rem;
       height: 70rem;
       margin: 64px auto;
       /* margin-top: 64px; */
       /* height: ; */
   }
   .image_wrapper img{
       width: 100%;
       height: 100%;
       border-radius: 6px;
       margin-bottom: 30px;
   }
   .image_wrapper h4{
       /* display: inline-block; */
       margin-bottom: 0;
   }
   .image_wrapper p{
       font-style: italic;
       display: inline-block;
       margin-bottom: 36px;
   }
   .icons{
       display: flex;
       gap: 30px;
       align-items: center;
   }
   .icons span{
       display: flex;
       gap: 20px;
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
           margin-bottom: 6.4rem;
          
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
        .btn{
            border: none;
            outline: none;
            background-color: #fff;
            font-size: 2rem;
            cursor: pointer;
        }

               /* comment */
</style>

<!-- All Javascripts -->
<script src="asset{{'../../../../home/js/jquery-3.6.0.min.js'}}"></script>
<script src="asset{{'../../../../home/js/bootstrap.min.js'}}"></script>
<script src="asset{{'../../../../home/js/jquery-ui.js'}}"></script>
<script src="asset{{'../../../../home/js/jquery.magnific-popup.min.js'}}"></script>
<script src="asset{{'../../../../home/js/owl.carousel.min.js'}}"></script>
<script src="asset{{'../../../../home/js/wow.min.js'}}"></script>
<script src="asset{{'../../../../home/js/select2.full.js'}}"></script>
<script src="asset{{'../../../../home/js/sweetalert2.min.js'}}"></script>
<script src="asset{{'../../../../home/js/jquery.waypoints.min.js'}}"></script>
<script src="asset{{'../../../../home/js/acmeticker.js'}}"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-84213520-6');
</script>


@include('home.layouts.top')
{{-- @include('home.layouts.header') --}}
@include('home.layouts.navbar')

@section('header','Photo Gallery')
@include('home.layouts.page_top')


<div class="page-content">
    <div class="container">
        
      <div class="image_wrapper">
          <img src="{{ $photo->photo->photo_url }}" alt="">
          <h4>{{ $photo->photo_title }}</h4>
          <p>{!! $photo->photo_description !!}</p>

          <div class="icons">
              @foreach ($photo->comments as $comment)
              @if($loop->iteration == 2)
                   @break   
             @endif
            <span>
                <svg class="not_activated" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path fill="none" d="M0 0h24v24H0z"></path><path d="M21.99 4c0-1.1-.89-2-1.99-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4-.01-18zM18 14H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z"></path></svg>
                <p>{{$comment->where(['commentable_type' => 'App\Models\PhotoGallery'
                , 'commentable_id' => $photo->id])->count()}}</p>
            </span>
            @endforeach
          <span>
            <svg class="not_activated"  stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M104 224H24c-13.255 0-24 10.745-24 24v240c0 13.255 10.745 24 24 24h80c13.255 0 24-10.745 24-24V248c0-13.255-10.745-24-24-24zM64 472c-13.255 0-24-10.745-24-24s10.745-24 24-24 24 10.745 24 24-10.745 24-24 24zM384 81.452c0 42.416-25.97 66.208-33.277 94.548h101.723c33.397 0 59.397 27.746 59.553 58.098.084 17.938-7.546 37.249-19.439 49.197l-.11.11c9.836 23.337 8.237 56.037-9.308 79.469 8.681 25.895-.069 57.704-16.382 74.757 4.298 17.598 2.244 32.575-6.148 44.632C440.202 511.587 389.616 512 346.839 512l-2.845-.001c-48.287-.017-87.806-17.598-119.56-31.725-15.957-7.099-36.821-15.887-52.651-16.178-6.54-.12-11.783-5.457-11.783-11.998v-213.77c0-3.2 1.282-6.271 3.558-8.521 39.614-39.144 56.648-80.587 89.117-113.111 14.804-14.832 20.188-37.236 25.393-58.902C282.515 39.293 291.817 0 312 0c24 0 72 8 72 81.452z"></path></svg>
            <p>8</p>
           </span>
         </div>

         <div class="profile_wrap">
            <div class="profile">
                <img src="http://127.0.0.1:8000/storage/profile-photo/image-1668947903.png" alt="">
            </div>

   <form method="post" action="{{ route('comment_gallery',$photo)}}">
        @csrf
       <textarea name="comment" id="" cols="30" rows="5" placeholder="Comment here"></textarea>
                <button type="submit" class="comment_btn">Comment</button>
            </form>
        </div>

     @foreach ($photo->comments as $comments)
        <div class="comment">
            <div class="author">
                <img src="{{ $comments->author->photo->photo_url }}" alt="">
            </div>
            <div class="comment_body">
                <div class="comment_wrapper">
                    <p class="comment_auther_name">
                       {{ $comments->author->name}}
                    </p>
                    <p class="comment_text" >{{ $comments->comment }}</p>
                </div>
                
            </div>
        </div>
     @endforeach
      </div>

    
     
    </div>
</div>

