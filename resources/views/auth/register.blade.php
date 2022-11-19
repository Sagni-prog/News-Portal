<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <link rel="icon" type="image/png" href="asset{{'../../panel/uploads/favicon.png'}}">

    <title>Admin Panel</title>

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="asset{{ '../../panel/dist/css/bootstrap.min.css' }}">
    <link rel="stylesheet" href="asset{{'../../panel/dist/css/font_awesome_5_free.min.css'}}">
    <link rel="stylesheet" href="asset{{'../../panel/dist/css/select2.min.css'}}">
    <link rel="stylesheet" href="asset{{'../../panel/dist/css/bootstrap-datepicker.min.css'}}">
    <link rel="stylesheet" href="asset{{'../../panel/dist/css/bootstrap-timepicker.min.css'}}">
    <link rel="stylesheet" href="asset{{'../../panel/dist/css/bootstrap-tagsinput.css'}}">
    <link rel="stylesheet" href="asset{{'../../panel/dist/css/duotone-dark.css'}}">
    <link rel="stylesheet" href="asset{{'../../panel/dist/css/dataTables.bootstrap4.min.css'}}">
    <link rel="stylesheet" href="asset{{'../../panel/dist/css/iziToast.min.css'}}">
    <link rel="stylesheet" href="asset{{'../../panel/dist/css/fontawesome-iconpicker.min.css'}}">
    <link rel="stylesheet" href="asset{{'../../panel/dist/css/bootstrap4-toggle.min.css'}}">
    <link rel="stylesheet" href="asset{{'../../panel/dist/css/summernote-bs4.css'}}">
    <link rel="stylesheet" href="asset{{'../../panel/dist/css/style.css'}}">
    <link rel="stylesheet" href="asset{{'../../panel/dist/css/components.css'}}">
    <link rel="stylesheet" href="asset{{'../../panel/dist/css/spacing.css'}}">
    <link rel="stylesheet" href="{{'../../panel/dist/css/custom.css'}}">

    <script src="asset{{'../../panel/dist/js/jquery-3.6.0.min.js'}}"></script>
    <script src="asset{{'../../panel/dist/js/popper.min.js'}}"></script>
    <script src="asset{{'../../panel/dist/js/tooltip.js'}}"></script>
    <script src="asset{{'../../dist/js/bootstrap.min.js'}}"></script>
    <script src="asset{{'../../dist/js/jquery.nicescroll.min.js'}}"></script>
    <script src="asset{{'../../dist/js/moment.min.js'}}"></script>
    <script src="asset{{'../../dist/js/stisla.js'}}"></script>
    <script src="asset{{'../../dist/js/jscolor.js'}}"></script>
    <script src="asset{{'../../dist/js/bootstrap-datepicker.min.js'}}"></script>
    <script src="asset{{'../../dist/js/bootstrap-timepicker.min.js'}}"></script>
    <script src="asset{{'../../dist/js/bootstrap-tagsinput.min.js'}}"></script>
    <script src="asset{{'../../dist/js/select2.full.min.js'}}"></script>
    <script src="asset{{'../../dist/js/summernote-bs4.js'}}"></script>
    <script src="asset{{'../../dist/js/jquery.dataTables.min.js'}}"></script>
    <script src="asset{{'../../dist/js/dataTables.bootstrap4.min.js'}}"></script>
    <script src="asset{{'../../dist/js/iziToast.min.js'}}"></script>
    <script src="asset{{'../../dist/js/fontawesome-iconpicker.js'}}"></script>
    <script src="asset{{'../../dist/js/bootstrap4-toggle.min.js'}}"></script>
</head>

<body>
<div id="app">
    <div class="main-wrapper">
        <section class="section">
            <div class="container container-login">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="card card-primary border-box">
                            <div class="card-header card-header-auth">
                                <h4 class="text-center">Admin Panel Login</h4>
                            </div>
                            <div class="card-body card-body-auth">

                                @if (session('status'))
                                       <div class="mb-4 font-medium text-sm text-green-600">
                                            {{ session('status') }}
                                    </div>
                                @endif

                                <form method="POST" action="{{ route('register_user') }}" enctype="multipart/form-data"hp >
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control" name = "name" placeholder="Name" value="" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email Address" value="" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password"  placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password_confirmation"  placeholder="Confirm Password">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Photo</label>
                                        <input type="file" class="form-control" name="photo" value="">
                                    </div>
                                   
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            Register
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <a href="forget-password.html">
                                                Forget Password?
                                            </a>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<script src="asset{{'../../panel/dist/js/scripts.js'}}"></script>
<script src="asset{{'../../panel/dist/js/custom.js'}}"></script>

</body>
</html>
