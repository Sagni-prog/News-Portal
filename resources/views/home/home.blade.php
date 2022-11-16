@extends('home.layouts.app')

@section('home_content')
<div class="home-main">
    <div class="container">
        <div class="row g-2">
            <div class="col-lg-8 col-md-12 left">
                @php $i = 0; @endphp
                @foreach ($posts as $post)
                @php $i++; @endphp
                @if ($i == 1)
                 <div class="inner">       
                     <div class="photo">
                         <div class="bg"></div>
                         <img src="{{ optional($post->photo)->photo_url}}" alt="">
                         <div class="text">
                             <div class="text-inner">
                                 <div class="category">
                                     <span class="badge bg-success badge-sm">{{$post->subCatagory->catagory->catagory_name}}</span>
                                 </div>
                                 <h2><a href="{{ url('post_single',$post)}}">{{$post->post_title}}</a></h2>
                                 <div class="date-user">
                                     <div class="user">
                                         <a href="">{{$post->author->name}}</a>
                                     </div>
                                     <div class="date">
                                         <a href="">{{
                                            \Carbon\Carbon::parse($post->created_at)->toFormattedDateString()}}</a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             @endif
         @endforeach

            </div>
            <div class="col-lg-4 col-md-12">

         @php $i = 0; @endphp
            @foreach ($posts as $post)
              @php $i++; @endphp
                @if ($i == 2)
                <div class="inner inner-right">
                    <div class="photo">
                        <div class="bg"></div>
                        <img src="{{ optional($post->photo)->photo_url}}" alt="">
                        <div class="text">
                            <div class="text-inner">
                                <div class="category">
                                    <span class="badge bg-success badge-sm">{{$post->subCatagory->catagory->catagory_name}}</span>
                                </div>
                                <h2><a href="{{ url('post_single',$post)}}">{{$post->post_title}}</a></h2>
                                <div class="date-user">
                                    <div class="user">
                                        <a href="">{{$post->author->name}}</a>
                                    </div>
                                    <div class="date">
                                        <a href="">
                                            {{
                                                \Carbon\Carbon::parse($post->created_at)->toFormattedDateString()}}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
             @endforeach

         @php $i = 0; @endphp
           @foreach ($posts as $post)
            @php $i++; @endphp
              @if ($i == 3)
                <div class="inner inner-right">
                    <div class="photo">
                        <div class="bg"></div>
                        <img src="{{ optional($post->photo)->photo_url}}" alt="">
                        <div class="text">
                            <div class="text-inner">
                                <div class="category">
                                    <span class="badge bg-success badge-sm">{{$post->subCatagory->catagory->catagory_name}}</span>
                                </div>
                                <h2><a href="{{ url('post_single',$post)}}">{{$post->post_title}}</a></h2>
                                <div class="date-user">
                                    <div class="user">
                                        <a href="">{{$post->author->name}}</a>
                                    </div>
                                    <div class="date">
                                        <a href="">
                                            {{
                                                \Carbon\Carbon::parse($post->created_at)->toFormattedDateString()
                                                }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach

            </div>
        </div>
    </div>
</div>
@endsection