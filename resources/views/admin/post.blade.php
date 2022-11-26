@extends('admin.layout.app')

@section('header','Posts')

@section('button')
   @include('admin.layout.button_add_post')
@endsection

@section('main-content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Post Title</th>
                                <th>Catagory</th>
                                <th>Sub Catagory</th>
                                <th>Author</th>
                                <th>Tags</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>

                     @foreach ($posts as $post)
                        @can('view',$post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{ $post->post_title }}</td>
                                <td>{{ $post->subCatagory->sub_catagory_name }}</td>
                                <td>{{ $post->subCatagory->catagory->catagory_name }}</td>
                                <td>{{ $post->author->name }}</td>
                                <td>
                                    @foreach ($post->tags as $tag)
                                        {{ $tag->tag_name.','}}
                                    @endforeach
                                </td>
                                <td class="pt_10 pb_10 flex">
                                 
                                    <a href="{{url('post',$post)}}" class="btn btn-success">Edit</a>
                                    
                                   
                                    <form method="post" action = "{{route('post_delete',$post)}}">
                                        @csrf
                                        <button type="submit" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</button> 
                                         {{-- <button type="submit" class="btn btn-danger">Delete</button> --}}
                                    </form>
                                </td>
                               
                            </tr>
                            @endcan
                      @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection