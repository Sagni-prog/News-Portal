@extends('admin.layout.app')

@section('header','Add Online Poll')

@section('main-content')
<div class="section-body">
    <div class="row">
        <div class="col-7">
            <div class="card">
                <div class="card-body">
                    <form  method="post" action="{{route('catagory_add')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group mb-3" style="display: flex; flex-direction: column;">
                            <label>Question</label>
                            <textarea  name="question" id="" style="min-height: 60px; height: auto; border: none; border-bottom: 3px solid rgb(28, 101, 196); outline: none; border-radius: 4px; resize: none;" ></textarea>
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