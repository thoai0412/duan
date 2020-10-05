@extends('layouts.admin')

@section('title')
<title>Add Product</title>
@endsection

@section('css')
       <link rel="stylesheet" href="{{asset('admins/product/imageIndexList.css') }}">
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
                        @foreach($products as $productItem)
                            <tr>
                                <th scope="row">{{$productItem->id }}</th>
                                <td>{{$productItem->name}}</td>
                                <td>{{$productItem->price}}</td>
                                <td>
                                    <img class="product_image_150_100" src="{{$productItem->feature_image_path}}" alt="">
                                </td>
                                <td>{{$productItem->category->name}}</td>
                                <td>
                                    <a href="" class="btn btn-default">Edit</a>
                                    <a href="" class="btn btn-danger">Delete</a> </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-md-12">
                </div>
                {{$products->links() }}
            </div>
        </div>
    </div>
</div>
@endsection