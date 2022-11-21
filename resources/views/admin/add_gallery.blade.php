@extends('admin.layout.app')

@section('header','Add To Gallery')

@section('main-content')
<div class="section-body">
    <div class="row">
        <div class="col-7">
            <div class="card">
                <div class="card-body">
                    <form  method="post" action="{{route('gallery_add')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label>Gallery Title</label>
                            <input type="text" class="form-control" name="gallery_title" value="">
                        </div>
                      
                        <div class="form-group mb-3">
                            <label>Gallery Description</label>
                            <textarea type="text" class="form-control snote" cols = "30" rows="10" name="gallery_description" value=""></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label>Photo</label>
                            <input type="file" class="form-control" name="photo" value="">
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