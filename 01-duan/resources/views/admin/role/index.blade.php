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
    @include('partials.content-header', ['name'=>'Role', 'key'=>'Add'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('roles.create')}}" class="btn btn-success float-right ma-2">Add</a>
                </div>
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên vai trò</th>
                                <th scope="col">Mô tả vai trò</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                            <tr>
                                <th scope="row">{{$role->id}}</th>
                                <td>{{$role->name}}</td>
                                <td>{{$role->display_name}}</td>

                                <td class="d-flex align-items-center">
                                    <form action=" {{route('roles.edit', $role->id)}} " method="get">
                                        <button class="btn btn-default">
                                            Edit
                                        </button>
                                    </form>
           
                                    <form action="" method="post">
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
                    {{$roles->links() }}

                </div>

            </div>
        </div>
    </div>
</div>
@endsection