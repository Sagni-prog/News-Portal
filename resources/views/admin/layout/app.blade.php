<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <link rel="icon" type="image/png" href="asset{{'../../panel/uploads/favicon.png'}}">

    <title>Admin Panel</title>

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">

    @include('admin.layout.styles')

    @include('admin.layout.scripts')
   
</head>

<body>
<div id="app">
    <div class="main-wrapper">

        <div class="navbar-bg"></div>
        @include('admin.layout.navbar')

        @include('admin.layout.sidebar')

        <div class="main-content">
            <section class="section">
                <div class="section-header justify-space-between">
                    <h1>@yield('header')</h1>
                    @yield('button')
                </div>

               @yield('main-content')
            </section>
        </div>

    </div>
</div>

@include('admin.layout.footer_script')

</body>
</html>