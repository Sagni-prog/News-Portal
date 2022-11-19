<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Admin Panel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html"></a>
        </div>

        <ul class="sidebar-menu">

            <li class="active"><a class="nav-link" href="{{url('/dashboard')}}"><i class="fas fa-hand-point-right"></i> <span>Dashboard</span></a></li>

            <li class="nav-item dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Dropdown Items</span></a>
                <ul class="dropdown-menu">
                    <li class="active"><a class="nav-link" href=""><i class="fas fa-angle-right"></i> Item 1</a></li>
                    <li class=""><a class="nav-link" href=""><i class="fas fa-angle-right"></i> Item 2</a></li>
                </ul>
            </li>

            <li class=""><a class="nav-link" href="setting.html"><i class="fas fa-hand-point-right"></i> <span>Setting</span></a></li>

            {{-- <li class=""><a class="nav-link" href="{{url('add_catagory')}}"><i class="fas fa-hand-point-right"></i> <span>Add catagory</span></a></li> --}}

            <li class=""><a class="nav-link" href="{{url('posts')}}"><i class="fas fa-hand-point-right"></i> <span>Posts</span></a></li>

            <li class=""><a class="nav-link" href="{{url('catagories')}}"><i class="fas fa-hand-point-right"></i> <span>Catagories</span></a></li>

            {{-- <li class=""><a class="nav-link" href="{{url('add_sub_catagory')}}"><i class="fas fa-hand-point-right"></i> <span>Add Sub catagory</span></a></li> --}}

            <li class=""><a class="nav-link" href="{{url('sub_catagories')}}"><i class="fas fa-hand-point-right"></i> <span>Sub catagory</span></a></li>

            <li class=""><a class="nav-link" href="{{url('poll')}}"><i class="fas fa-hand-point-right"></i> <span>Online Poll</span></a></li>

        </ul>
    </aside>
</div>