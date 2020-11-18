@extends('layouts.app')

@section('main-content')

    <div class="card col-md-12">
        <div class="card-header">
            <h4 class="card-title d-inline">category Page</h4>
            <h4 class="float-right d-inline"><a href="#add_cat" class="btn btn-primary" data-toggle="modal">Add Category</a></h4>
            <div class="mt-3">
                @include('validate')
            </div>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped mb-0">
                    <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Category Name</th>
                        <th>slug</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($all_data as $d)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$d->cat_name}}</td>
                        <td>{{$d->slug}}</td>
                        <td>
                            @if($d->status == 'published')
                                <span class="badge badge-success">published</span>
                            @else
                                <span class="badge badge-warning">unpublished</span>
                            @endif
                        </td>
                        <td>

                            @if($d->status == 'published')
                                <a href="{{route('category.unpublish',$d->id)}}" class="btn btn-warning btn-sm"><i class="fas fa-eye-slash"></i></a>
                            @else
                                <a href="{{route('category.publish',$d->id)}}" class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a>
                            @endif

                            <a href="#edit_cat" id="cat_edit" cat_id="{{$d->id}}" data-toggle="modal" class="btn btn-info btn-sm ">Edit</a>
                                <form class="d-inline" action="{{route('post-category.destroy',$d->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </form>


                        </td>
                    </tr>
                    @endforeach




                    </tbody>


                </table>
            </div>
        </div>
    </div>

        <div class="modal fade" id="add_cat">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4>Add Category</h4>
                        <button class="close" data-dismiss="modal">&times;</button>

                    </div>
                    <div class="modal-body">
                        <form action="{{route('post-category.store')}}" method="POST">
                            @csrf
                            <div class="from-group">
                                <input type="text" name="name" class="form-control" placeholder="Enter Category name ">
                            </div>

                            <div class="from-group mt-2">
                                <input type="submit" class=" btn btn-primary  float-right" value="Add">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer"></div>
                </div>
            </div>
        </div>


    <div class="modal fade" id="edit_cat">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Edit Category</h4>
                    <button class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="{{route('category.update')}}" method="POST">
                        @csrf
                        <div class="from-group">
                            <input type="text" name="name" class="form-control" placeholder="Enter Category name ">
                            <input type="hidden" name="id" class="form-control" placeholder="Enter Category name ">
                        </div>

                        <div class="from-group mt-2">
                            <input type="submit"  class=" btn btn-primary  float-right" value="Update">
                        </div>
                    </form>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>



@endsection
