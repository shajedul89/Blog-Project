@extends('layouts.app')

@section('main-content')

    <div class="card col-md-12">
        <div class="card-header">
            <h4 class="card-title d-inline">All Post</h4>
            <h4 class="float-right d-inline"><a href="#add_post" class="btn btn-primary" data-toggle="modal">Create Post</a></h4>
            <div class="mt-3">
                @include('validate')
            </div>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped mb-0 data-table" >
                    <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Title</th>
                        <th>category</th>
                        <th>Tag</th>

                        <th>feather image</th>
                        <th>Post Time</th>

                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($all_data as $d)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$d->title}}</td>
                        <td>
                            @foreach($d -> categories as $c)
                                {{$c -> cat_name}}|

                            @endforeach
                        </td>
                        <td>
                            @foreach($d -> tags as $t)
                                {{$t -> name}}|

                            @endforeach
                        </td>
                        <td>
                            <img style="width:50px" src="{{URL::to('/')}}/public/media/post_img/{{$d->image}}" alt="">
                        </td>

                        <td>{{$d->created_at ->diffforHumans()}}</td>
{{--                        <td>--}}
{{--                            @if($d->status == 'published')--}}
{{--                                <span class="badge badge-success">published</span>--}}
{{--                            @else--}}
{{--                                <span class="badge badge-warning">unpublished</span>--}}
{{--                            @endif--}}
{{--                        </td>--}}
                        <td>

                            @if($d->status == 'published')
                                <a href="{{route('tag.unpublish',$d->id)}}" class="btn btn-warning btn-sm"><i class="fas fa-eye-slash"></i></a>
                            @else
                                <a href="{{route('tag.publish',$d->id)}}" class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a>
                            @endif

                            <a href="#" id="post_edit" tag_id="{{$d->id}}" data-toggle="modal" class="btn btn-info btn-sm ">Edit</a>

                                <form class="d-inline" action="{{route('post.destroy',$d->id)}}" method="POST">
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

        <div class="modal fade" id="add_post">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4>Add Post</h4>
                        <button class="close" data-dismiss="modal">&times;</button>

                    </div>
                    <div class="modal-body">
                        <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="from-group">
                                <input type="text" name="title" class="form-control mb-3" placeholder="Give Title ">
                            </div>

                            <div>
                               <h6> Select Categories</h6>
                                <hr>
                                @foreach ($cat as $c)
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="cat[]" value="{{$c->id}}">

                                            {{$c->cat_name}}

                                    </label>
                                </div>
                                @endforeach

                            </div>

                            <div>
                                <h6>Select Tags</h6>
                                <hr>
                                @foreach ($tags as $t)
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="tag[]" value="{{$t->id}}">

                                            {{$t->name}}

                                        </label>
                                    </div>
                                @endforeach

                            </div>

                            <div class="form-group">

                                <textarea class="form-control mt-2" name="contant" id="post_editor" ></textarea>
                            </div>

                            <div class="from-group">

                                <label for="fimg" id="first"><i class="fas fa-camera-retro" style="font-size: 50px;cursor: pointer"></i></label>
                                <label for="fimg" style="display: none;margin-bottom: 15px" id="second"><span class="btn btn-success " >Change Image</span></label>
                                <input type="file" id="fimg" name="f_img" style="display:none">
                                <img src="" alt="" id="feather_img" style="max-width:30%;display:block">
                            </div>

                            <div class="from-group mt-2">
                                <input type="submit" class=" form-control btn btn-primary  float-right" value="Publish">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer"></div>
                </div>
            </div>
        </div>



    <div class="modal fade" id="edit_tag">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Edit Post</h4>
                    <button class="close" data-dismiss="modal">&times;</button>

                </div>
                <div class="modal-body">
                    <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="from-group">
                            <input type="text" name="title"  class="form-control mb-3" placeholder="Give Title ">
                        </div>

                        <div>
                            <h6> Select Categories</h6>
                            <hr>

                            <div class="cat">


                            </div>
                           

                        </div>

                        <div>
                            <h6>Select Tags</h6>
                            <hr>
                            @foreach ($tags as $t)
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="tag[]" value="{{$t->id}}">

                                        {{$t->name}}

                                    </label>
                                </div>
                            @endforeach

                        </div>

                        <div class="form-group">

                            <textarea class="form-control mt-2" name="contant" id="post_editor_edit" ></textarea>
                        </div>

                        <div class="from-group">

                            <label for="fimg" id="first"><i class="fas fa-camera-retro" style="font-size: 50px;cursor: pointer"></i></label>
                            <label for="fimg" style="display: none;margin-bottom: 15px" id="second"><span class="btn btn-success " >Change Image</span></label>
                            <input type="file" id="fimg" name="f_img" style="display:none">
                            <img src="" alt="" id="feather_img_edit" style="max-width:30%;display:block">
                        </div>

                        <div class="from-group mt-2">
                            <input type="submit" class=" form-control btn btn-primary  float-right" value="Publish">
                        </div>
                    </form>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>



@endsection
