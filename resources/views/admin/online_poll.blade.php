@extends('admin.layout.app')

@section('header','Online Poll')

@section('button')
   @include('admin.layout.add_online_poll_button')
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
                                <th>Question</th>
                                <th>Yes Vote</th>
                                <th>No Vote</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                     @foreach ($online_poll as $poll)
                            <tr>
                                <td>{{ $poll->question }}</td>
                                <td>{{ $poll->yes }}</td>
                                <td>{{ $poll->no }}</td>
                                <td class="pt_10 pb_10 flex">
                                 
                                    <a href="#" class="btn btn-success">Edit</a>
                                    {{-- <a href="" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a> --}}
                                    <form method="post" action="" >
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