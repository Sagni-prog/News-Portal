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

@extends('admin.layout.app')

@section('header','Catagories')

@section('button')
   @include('admin.layout.button_catagory')
@endsection

@section('main-content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="uploads/user.jpg" alt="" class="profile-photo w_100_p">
                                <input type="file" class="form-control mt_10" name="photo">
                            </div>
                            <div class="col-md-9">
                                <div class="mb-4">
                                    <label class="form-label">Name *</label>
                                    <input type="text" class="form-control" name="name" value="John Doe">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Email *</label>
                                    <input type="text" class="form-control" name="email" value="john@gmail.com">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" name="new_password">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Retype Password</label>
                                    <input type="password" class="form-control" name="retype_password">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"></label>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
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