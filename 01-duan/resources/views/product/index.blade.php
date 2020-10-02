@extends('layouts.admin')

@section('title')
<title>Add Product</title>
@endsection

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name'=>'product', 'key'=>'List'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('product.create')}}" class="btn btn-success float-right ma-2">Add</a>
                </div>
                <div class="col-md-12">
                    <!-- /.table -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên Sản Phẩm</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Hình ảnh</th>
                                <th scope="col">Danh mục</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Quần Què</td>
                                <td>10000$</td>
                                <td>
                                    <img src="" alt="">
                                </td>
                                <td>Quần Nam</td>
                                <td>
                                    <a href="" class="btn btn-default">Edit</a>
                                    <a href="" class="btn btn-danger">Delete</a> </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-12">
                    
                </div>

            </div>
        </div>
    </div>
</div>
@endsection