@extends('admin.layout.app')

@section('header','Add Post')

@section('main-content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form  method="post" action="{{route('add_post')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label>Post Title</label>
                            <input type="text" class="form-control" name="post_title" value="">
                        </div>
                       

                        <div class="form-group mb-3">
                            <label>Post Detail</label>
                            <textarea type="text" class="form-control snote" cols = "30" rows="10" name="post_detail" value=""></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label>Select Catagory</label>
                            <select class="form-control" name="sub_catagory_id">
                         @foreach ($sub_catagories as $sub_catagory)
                            <option value={{ $sub_catagory->id }}>{{ $sub_catagory->sub_catagory_name }}({{$sub_catagory->catagory->catagory_name}})</option>       
                         @endforeach
                                
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label>Is Sharable ?</label>
                            <select class="form-control" name="is_sharable">
                                <option value="1">Yes</option>       
                                <option value="0">No</option>               
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label>Is Commentable ?</label>
                            <select class="form-control" name="is_commentable">
                                <option value="1">Yes</option>       
                                <option value="0">No</option>               
                            </select>
                        </div>
                       
                        <div class="form-group mb-3">
                            <label>Photo</label>
                            <input type="file" class="form-control" name="photo" value="">
                        </div>
                       
                        <div class="form-group mb-3">
                            <label>Tags</label>
                            <input type="text" class="form-control" name="tags" value="">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection