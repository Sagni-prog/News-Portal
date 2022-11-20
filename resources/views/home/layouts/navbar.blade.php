<div class="website-menu">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Photo of the Week</a>
                            </li>
                         @foreach ($global_catagories as $catagory)
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{$catagory->catagory_name}}
                                </a>
                              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach ($catagory->subCatagories as $subCatagory)
                                   <li><a class="dropdown-item" href="{{ url('posts',$subCatagory)}}">
                                       {{$subCatagory->sub_catagory_name}}
                                    </a></li>
                                @endforeach
                                
                            </ul>
                          
                        </li>
                     @endforeach
                           
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div> 