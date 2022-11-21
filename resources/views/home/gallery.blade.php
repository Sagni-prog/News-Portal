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


@include('home.layouts.top')
@include('home.layouts.header')
@include('home.layouts.navbar')

@section('header','Photo Gallery')
@include('home.layouts.page_top')


<div class="page-content">
    <div class="container">
        <div class="photo-gallery">
            <div class="row">

                @foreach ($gallery as $gallery)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="photo-thumb">
                            <a href="{{ url('gallery/photos',$gallery)}}">
                                <img src="{{ $gallery->photo->photo_url }}" alt="">
                            </a>
                            <div class="bg"></div>
    
                        </div>
                        <div class="photo-caption">
                            <a href="{{ url('gallery/photos',$gallery)}}">{{ $gallery->photo_title}}</a>
                        </div>
                        <div class="photo-date">
                            <i class="fas fa-calendar-alt"></i>
                            {{
                                \Carbon\Carbon::parse($gallery->created_at)->toFormattedDateString()
                            }}
                        </div>
                    </div>
                @endforeach

                <div class="col-md-12">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>
</div>

