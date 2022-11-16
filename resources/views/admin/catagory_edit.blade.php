<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <link rel="icon" type="image/png" href="uploads/favicon.png">

    <title>Admin Panel</title>

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="asset{{'../../../panel/dist/css/bootstrap.min.css'}}">
    <link rel="stylesheet" href="asset{{'../../../panel/dist/css/font_awesome_5_free.min.css'}}">
    <link rel="stylesheet" href="asset{{'../../../panel/dist/css/select2.min.css'}}">
    <link rel="stylesheet" href="asset{{'../../../panel/dist/css/bootstrap-datepicker.min.css'}}">
    <link rel="stylesheet" href="asset{{'../../../panel/dist/css/bootstrap-timepicker.min.css'}}">
    <link rel="stylesheet" href="asset{{'../../../panel/dist/css/bootstrap-tagsinput.css'}}">
    <link rel="stylesheet" href="asset{{'../../../panel/dist/css/duotone-dark.css'}}">
    <link rel="stylesheet" href="asset{{'../../../panel/dist/css/dataTables.bootstrap4.min.css'}}">
    <link rel="stylesheet" href="asset{{'../../../panel/dist/css/iziToast.min.css'}}">
    <link rel="stylesheet" href="asset{{'../../../panel/dist/css/fontawesome-iconpicker.min.css'}}">
    <link rel="stylesheet" href="asset{{'../../../panel/dist/css/bootstrap4-toggle.min.css'}}">
    <link rel="stylesheet" href="asset{{'../../../panel/dist/css/summernote-bs4.css'}}">
    <link rel="stylesheet" href="asset{{'../../../panel/dist/css/style.css'}}">
    <link rel="stylesheet" href="asset{{'../../../panel/dist/css/components.css'}}">
    <link rel="stylesheet" href="asset{{'../../../panel/dist/css/spacing.css'}}">
    <link rel="stylesheet" href="asset{{'../../../panel/dist/css/custom.css'}}">

    
    {{-- Scripts --}}
    <script src="asset{{'../../../panel/dist/js/jquery-3.6.0.min.js'}}"></script>
<script src="asset{{'../../../panel/dist/js/popper.min.js'}}"></script>
<script src="asset{{'../../../panel/dist/js/tooltip.js'}}"></script>
<script src="asset{{'../../../panel/dist/js/bootstrap.min.js'}}"></script>
<script src="asset{{'../../../panel/dist/js/jquery.nicescroll.min.js'}}"></script>
<script src="asset{{'../../../panel/dist/js/moment.min.js'}}"></script>
<script src="asset{{'../../../panel/dist/js/stisla.js'}}"></script>
<script src="asset{{'../../../panel/dist/js/jscolor.js'}}"></script>
<script src="asset{{'../../../panel/dist/js/bootstrap-datepicker.min.js'}}"></script>
<script src="asset{{'../../../panel/dist/js/bootstrap-timepicker.min.js'}}"></script>
<script src="asset{{'../../../panel/dist/js/bootstrap-tagsinput.min.js'}}"></script>
<script src="asset{{'../../../panel/dist/js/select2.full.min.js'}}"></script>
<script src="asset{{'../../../panel/dist/js/summernote-bs4.js'}}"></script>
<script src="asset{{'../../../panel/dist/js/jquery.dataTables.min.js'}}"></script>
<script src="asset{{'../../../panel/dist/js/dataTables.bootstrap4.min.js'}}"></script>
<script src="asset{{'../../../panel/dist/js/iziToast.min.js'}}"></script>
<script src="asset{{'../../../panel/dist/js/fontawesome-iconpicker.js'}}"></script>
<script src="asset{{'../../../panel/dist/js/bootstrap4-toggle.min.js'}}"></script>
</head>


@extends('admin.layout.app')

@section('header','Edit catagory')

@section('main-content')
<div class="section-body">
    <div class="row">
        <div class="col-7">
            <div class="card">
                <div class="card-body">
                    <form  method="post" action="{{route('catagory_edit',$catagory)}}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3">
                            <label>Catagory name</label>
                            <input type="text" class="form-control" name="catagory_name" value="{{$catagory->catagory_name}}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Show on menu</label>
                            <select class="form-control" value = "{{$catagory->show_on_menu}}" name="show_on_menu">
                                <option value="show">{{$catagory->show_on_menu}}</option>
                                <option value="show">Show</option>
                                <option value="hide">Hide</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label>Catagory order</label>
                            <input type="number" class="form-control" name="catagory_order" value="{{$catagory->catagory_order}}">
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
<script src="asset{{'../../../panel/dist/js/scripts.js'}}"></script>
<script src="asset{{'../../../panel/dist/js/custom.js'}}"></script>
</html>


