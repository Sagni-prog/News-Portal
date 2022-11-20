@include('admin.layout.slash_help_style')
@include('admin.layout.slash_help_scripts')


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

                    <form action="{{ route('update_profile',$user)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <h3>Profile Information</h3>
                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{ $user->photo->photo_url }}" alt="" class="profile-photo w_100_p">
                                <input type="file" class="form-control mt_10" name="photo">
                            </div>
                            <div class="col-md-9">
                                <div class="mb-4">
                                    <label class="form-label">Name *</label>
                                    <input type="text" class="form-control" name="name" value="{{ $user->name }}">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Email *</label>
                                    <input type="text" class="form-control" name="email" value="{{ $user->email }}">
                                </div>

                                <div class="mb-4">
                                    <label class="form-label"></label>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>

                            <form action="{{route('update_password',$user)}}" method="post" style="margin-top: 200px;">
                                @csrf
                                <h3>Change Password</h3>
                                <div class="mb-4">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Retype Password</label>
                                    <input type="password" class="form-control" name="confirm_password">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"></label>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>


                    {{-- <form action="" method="post" enctype="multipart/form-data">
                        <h3>Change Password</h3>
                        <div class="row">
                           
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
                    </form> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script src="asset{{'../../../../panel/dist/js/scripts.js'}}"></script>
<script src="asset{{'../../../../panel/dist/js/custom.js'}}"></script>