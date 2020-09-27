@extends('layouts.admin')

@section('title')
<title>Trang Chu</title>
@endsection

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name'=>'category', 'key'=>'Add'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('categories.create')}}" class="btn btn-success float-right ma-2">Add</a>
                </div>
                <div class="col-md-12">
                    <!-- /.table -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên danh mục</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <th scope="row">{{ $category->id}}</th>
                                <td>{{ $category->name}}</td>
                                <td>
                                    <a href="{{route('categories.edit',['id'=> $category->id]) }}" class="btn btn-default">Edit</a>
                                    <a href="{{route('categories.delete',['id'=> $category->id]) }}" class="btn btn-danger">Delete</a> </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-md-12">
                    {{$categories->links()}}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection