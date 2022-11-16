@extends('admin.layout.app')

@section('header','Add catagory')

@section('main-content')
<div class="section-body">
    <div class="row">
        <div class="col-7">
            <div class="card">
                <div class="card-body">
                    <form  method="post" action="{{route('catagory_add')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label>Catagory name</label>
                            <input type="text" class="form-control" name="catagory_name" value="">
                        </div>
                        <div class="form-group mb-3">
                            <label>Show on menu</label>
                            <select class="form-control" name="show_on_menu">
                                <option value="show">Show</option>
                                <option value="hide">Hide</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label>Catagory order</label>
                            <input type="number" class="form-control" name="catagory_order" value="">
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