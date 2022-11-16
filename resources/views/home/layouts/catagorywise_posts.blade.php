 <div class="category-page">
    <div class="row">

    @foreach ($post_data as $post)
   
      <div class="col-lg-6 col-md-12">
        <div class="category-page-post-item">
           <div class="photo">
                 <img src="{{ $post->photo->photo_url }}" alt="">
            </div>
        <div class="category">
          <span class="badge bg-success">{{ $post->subCatagory->sub_catagory_name }}</span>
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