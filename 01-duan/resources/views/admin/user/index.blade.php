@extends('layouts.admin')

@section('title')
<title>Slider</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('admins/product/imageIndexList.css') }}">
@endsection


@section('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="{{asset('/admins/mainjs/main.js') }}"></script>
<!-- js delete -->
@endsection
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name'=>'User', 'key'=>'List'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('users.create')}}" class="btn btn-success float-right ma-2">Add</a>
                </div>
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên</th>
                                <th scope="col">email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <th scope="row">{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td class="d-flex align-items-center">
                                    <form action="{{route('users.edit',$user->id)}}" method="get">
                                        <button class="btn btn-default">
                                            Edit
                                        </button>
                                    </form>
           

                                    <form action="{{route('users.destroy',$user->id)}}" method="post">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <input type="hidden" name="_method" value="delete">
                                        <button class="btn btn-danger">
                                            Delete
                                        </button>
                                    </form>
                                </td>

                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
                <div class="col-md-12">

                </div>

            </div>
        </div>
    </div>
</div>
@endsection