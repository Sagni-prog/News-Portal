<div class="col-lg-4 col-md-6 sidebar-col">
    <div class="sidebar">

      @include('home.layouts.ad_3')
    
        <div class="widget">
            <div class="tag-heading">
                <h2>Tags</h2>
            </div>
            <div class="tag">
                <div class="tag-item">
                    <a href=""><span class="badge bg-secondary">business</span></a>
                </div>
                <div class="tag-item">
                    <a href=""><span class="badge bg-secondary">river</span></a>
                </div>
                <div class="tag-item">
                    <a href=""><span class="badge bg-secondary">politics</span></a>
                </div>
                <div class="tag-item">
                    <a href=""><span class="badge bg-secondary">google</span></a>
                </div>
                <div class="tag-item">
                    <a href=""><span class="badge bg-secondary">tree</span></a>
                </div>
                <div class="tag-item">
                    <a href=""><span class="badge bg-secondary">airplane</span></a>
                </div>
                <div class="tag-item">
                    <a href=""><span class="badge bg-secondary">tiles</span></a>
                </div>
                <div class="tag-item">
                    <a href=""><span class="badge bg-secondary">recent</span></a>
                </div>
                <div class="tag-item">
                    <a href=""><span class="badge bg-secondary">brand</span></a>
                </div>
                <div class="tag-item">
                    <a href=""><span class="badge bg-secondary">election</span></a>
                </div>
            </div>
        </div>
    
        <div class="widget">
            <div class="archive-heading">
                <h2>Archive</h2>
            </div>
            <div class="archive">
                <select name="" class="form-select">
                    <option value="">Select Month</option>
                    <option value="">February 2022</option>
                    <option value="">January 2022</option>
                    <option value="">December 2021</option>
                    <option value="">November 2021</option>
                    <option value="">October 2021</option>
                    <option value="">September 2021</option>
                    <option value="">August 2021</option>
                    <option value="">July 2021</option>
                </select>
            </div>
        </div>
    
        @include('home.layouts.ad_4')
        
        <div class="widget">
            <div class="news">
                <div class="news-heading">
                    <h2>Popular News</h2>
                </div>           
    
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Recent News</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Popular News</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                        @foreach ($global_recent_news_data as $item)
                           @if($loop->iteration == 5)
                               @break
                           @endif
                       

                        <div class="news-item">
                            <div class="left">
                                <img src="{{ $item->photo->photo_url}}" alt="">
                            </div>
                            <div class="right">
                                <div class="category">
                                    <span class="badge bg-success">{{ $item->subCatagory->sub_catagory_name }}</span>
                                </div>
                                <h2><a href="{{ url('post_single',$item)}}">{{ $item->post_title }}</a></h2>
                                <div class="date-user">
                                    <div class="user">
                                        <a href="">{{ $item->author->name }}</a>
                                    </div>
                                    <div class="date">
                                        <a href="">
                                            {{
                                                 \Carbon\Carbon::parse( $item->created_at)->toFormattedDateString()
                                            }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                      
                    </div>

                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    

                    @foreach ($global_popular_news_data as $item)
                    @if($loop->iteration == 5)
                        @break
                    @endif
                

                 <div class="news-item">
                     <div class="left">
                         <img src="{{ $item->photo->photo_url}}" alt="">
                     </div>
                     <div class="right">
                         <div class="category">
                             <span class="badge bg-success">{{ $item->subCatagory->sub_catagory_name }}</span>
                         </div>
                         <h2><a href="{{ url('post_single',$item)}}">{{ $item->post_title }}</a></h2>
                         <div class="date-user">
                             <div class="user">
                                 <a href="">{{ $item->author->name }}</a>
                             </div>
                             <div class="date">
                                 <a href="">
                                     {{
                                          \Carbon\Carbon::parse( $item->created_at)->toFormattedDateString()
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
    
        <div class="widget">
            <div class="ad-sidebar">
                <a href=""><img src="uploads/ad-3.png" alt=""></a>
            </div>
        </div>
    
        <div class="widget">
            <div class="poll-heading">
                <h2>Online Poll</h2>
            </div>
            <div class="poll">
                <div class="question">
                    Do you think that Apple products will be able to survive in the next 20 years?
                </div>
                <div class="answer-option">
                    <form action="" method="post">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="poll" id="poll_id_1">
                            <label class="form-check-label" for="poll_id_1">Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="poll" id="poll_id_2">
                            <label class="form-check-label" for="poll_id_2">No</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="poll" id="poll_id_3">
                            <label class="form-check-label" for="poll_id_3">No Comment</label>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="poll-result.html" class="btn btn-primary old">Old Result</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
    </div>
</div>