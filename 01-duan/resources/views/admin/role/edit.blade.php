@extends('layouts.admin')

@section('title')
<title>Role</title>
@endsection

@section('css')
<link rel="stylesheet" href=" {{asset('admins\role\add.css') }} ">

@endsection





@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'Roles', 'key'=> 'Edit'])
    <!-- truyền các key tương ứng sau do sang content-header nhan 2 gia tri   -->
    <form action="{{route('roles.update', $role->id )}}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" name="_method" value="put" />
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Tên vai trò</label>
                            <input type="text" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" name="name" placeholder="Nhập tên" value="{{ $role->name}}">
                        </div>
                        <div class="form-group ">
                            <label class="text-uppercase font-weight-bold" for="content">Mô tả vai trò</label>
                            <textarea rows="200" cols="200" name="display_name" id="content" placeholder="Description">{{ $role->display_name}}</textarea>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-12">
                <div class="row">
                <div class="cod-md-12">
                    <label>
                        <input type="checkbox" class="checkall">
                        Checkall
                    </label>
                </div>
                    @foreach($permissionsParent as $permissionsParentItem)
                    <div class="form-group card border-primary mb-3 col-md-12">
                        <div class="card-header">
                            <label>
                                <input type="checkbox" value="" class="checkbox_wrapper">
                            </label>
                            Module {{$permissionsParentItem->name}}
                        </div>
                        <div class="row">
                            @foreach($permissionsParentItem->permissionsChildren as $permissionsChidrentItem)
                            <div class="card-body text-primary col-md-3">
                                <h5 class="card-title">
                                    <label>
                                        <input type="checkbox" class="checkbox_childrent" name="permission_id[]" {{ $permissionsChecked->contains('id', $permissionsChidrentItem->id) ? 'checked': ''}} value="{{$permissionsChidrentItem->id}}">
                                    </label>
                                    {{$permissionsChidrentItem->name}}
                                </h5>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endsection


    @section('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>



    <script src="{{ asset('admins/role/add.js') }}"></script>
    @endsection