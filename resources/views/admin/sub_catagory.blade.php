@extends('admin.layout.app')

@section('header','Catagories')
@section('button')
     @include('admin.layout.button_sub_catagory')
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
                                <th>Sub Catagory Name</th>
                                <th>Catagory Name</th>
                                <th>Show on menu?</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>

                     @foreach ($sub_catagories as $sub_catagory)
                            <tr>
                                <td>{{ $sub_catagory->sub_catagory_order }}</td>
                                <td>{{ $sub_catagory->sub_catagory_name }}</td>
                                <td>{{ $sub_catagory->catagory->catagory_name }}</td>
                                <td>{{ $sub_catagory->show_on_menu }}</td>
                                <td class="pt_10 pb_10">
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">Detail</button>
                                    <a href="" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
                                </td>
                                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Detail</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group row bdb1 pt_10 mb_0">
                                                    <div class="col-md-4"><label class="form-label">Item Name</label></div>
                                                    <div class="col-md-8">Laptop</div>
                                                </div>
                                                <div class="form-group row bdb1 pt_10 mb_0">
                                                    <div class="col-md-4"><label class="form-label">Description</label></div>
                                                    <div class="col-md-8">This is a very good product. This is a very good product. This is a very good product. This is a very good product. This is a very good product. This is a very good product. </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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