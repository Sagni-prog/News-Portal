<div class="col-lg-8 col-md-6 left-col">
    <div class="left">
 @foreach ($sub_catagory as $sub_catagory)
            
            <div class="news-total-item">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <h2>{{ $sub_catagory->sub_catagory_name }}</h2>
                    </div>
                    <div class="col-lg-6 col-md-12 see-all">
                        <a href="" class="btn btn-primary btn-sm">See All News</a>
                    </div>
                    <div class="col-md-12">
                        <div class="bar"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        @foreach ($sub_catagory->post as $post)

                           @if($loop->iteration == 2)
                               @break   
                           @endif
                        <div class="left-side">
                            <div class="photo">
                                <img src="{{$post->photo->photo_url}}" alt="">
                            </div>
                            <div class="category">
                                <span class="badge bg-success">{{$sub_catagory->catagory->catagory_name}}</span>
                            </div>
                            <h3><a href="{{ url('post_single',$post)}}">{{ $post->post_title }}</a></h3>
                            <div class="date-user">
                                <div class="user">
                                    <a href="">{{ $post->author->name }}</a>
                                </div>
                                <div class="date">
                                    <a href="">
                                        {{
                                            \Carbon\Carbon::parse($post->created_at)->toFormattedDateString()
                                        }}
                                    </a>
                                </div>
                            </div>
                              <div class="short_text">
                             {!! $post->post_detail !!}
                            
                              </div>
                        </div>
                        @endforeach
                        
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="right-side">

                            @foreach ($sub_catagory->post as $post)

                            @if($loop->iteration == 1)
                                @continue  
                            @endif
                        
                            @if($loop->iteration == 6)
                                @break 
                            @endif
                            <div class="right-side-item">
                                <div class="left">
                                    <img src="{{$post->photo->photo_url}}" alt="">
                                </div>
                                <div class="right">
                                    <div class="category">
                                        <span class="badge bg-success">{{ $post->subCatagory->sub_catagory_name }}</span>
                                    </div>
                                    <h2><a href="{{ url('post_single',$post)}}">{{ $post->post_title }}</a></h2>
                                    <div class="date-user">
                                        <div class="user">
                                            <a href="">{{ $post->author->name }}</a>
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
                         @endforeach

                        </div>
                    </div>
                </div>
            </div>
                
        @endforeach
    </div>
</div>