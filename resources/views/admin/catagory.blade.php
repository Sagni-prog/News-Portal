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
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Catagory Name</th>
                                <th>Show on menu?</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                     @foreach ($catagories as $catagory)
                            <tr>
                                <td>{{ $catagory->catagory_order }}</td>
                                <td>{{ $catagory->catagory_name }}</td>
                                <td>{{ $catagory->show_on_menu }}</td>
                                <td class="pt_10 pb_10 flex">
                                 
                                    <a href="{{url('catagory',$catagory)}}" class="btn btn-success">Edit</a>
                                    {{-- <a href="" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a> --}}
                                    <form method="post" action="{{route('catagory_delete',$catagory)}}" >
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                 </td>
                               
                            </tr>
                          @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection