@extends('layouts.admin')

@section('title')
<title>Trang Chu</title>
@endsection

@section('css')
<link href="{{asset('admins/user/add/select2.min.css')}}" rel="stylesheet" />

<style>
    .select2-selection__choice {
        background-color: #0c525d !important;
    }
</style>
@endsection




@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'User', 'key'=> 'Edit'])
    <!-- truyền các key tương ứng sau do sang content-header nhan 2 gia tri   -->

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <form action="{{route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="_method" value="put" />
                        <div class="form-group">
                            <label>Tên </label>
                            <input type="text" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" name="name" placeholder="Nhập tên" value="{{$user->name}}">
                        </div>
                        <div class="form-group">
                            <label>Email </label>
                            <input type="text" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{$user->email}}" placeholder="Nhập email">
                        </div>
                        <div class="form-group">
                            <label>Password </label>
                            <input type="password" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" name="password" placeholder="Nhập Password">
                        </div>


                        <div class="form-group">
                            <label>Chọn vai trò</label>
                            <select name="role_id[]" class="form-control select2_init" multiple="multiple">
                                <option value=""></option>
                                @foreach($roles as $role)
                                <option {{ $rolesOfUser->contains('id', $role->id) ? 'selected': ''}} value="{{$role->id }}"> {{$role->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('js')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

<script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>

<script src="{{ asset('admins/product/add/add.js') }}"></script>

<script>
    $('.select2_init').select2({
        'placeholder': 'chọn vai trò',

    })
</script>
@endsection