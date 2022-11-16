<div class="top">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <ul>
                    <li class="today-text">Today: January 20, 2022</li>
                    <li class="email-text">contact@arefindev.com</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="right">
                    <li class="menu"><a href="faq.html">FAQ</a></li>
                    <li class="menu"><a href="about.html">About</a></li>
                    <li class="menu"><a href="contact.html">Contact</a></li>
                    @if(Auth::check())
                    <form method="post" action="{{route('logout')}}"> 
                        @csrf
                        <li class="menu"><button class="btn" type="submit"><a >Logout</a></button></li>
                    </form>
                    @else 
                    <li class="menu"><a href="{{route('login')}}">Login</a></li>
                    <li class="menu"><a href="{{route('register')}}">Register</a></li>
                    @endif
                       
                    <li>
                        <div class="language-switch">
                            <select name="">
                                <option value="">English</option>
                                <option value="">Hindi</option>
                                <option value="">Arabic</option>
                            </select>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>