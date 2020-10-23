@extends('layouts.admin')

@section('title')
<title>Trang Chu</title>
@endsection

@section('css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('admins/product/imageIndexList.css') }}">
@endsection

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'product', 'key'=> 'Edit'])
    <!-- truyền các key tương ứng sau do sang content-header nhan 2 gia tri   -->

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <form action="{{route('product.update', ['id' => $product->id])}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Tên sản phẩm</label>
                            <input type="text" class="form-control" name="name" placeholder="Nhập tên sản phẩm" value="{{$product->name}}">
                        </div>
                        <div class="form-group">
                            <label>giá sản phẩm</label>
                            <input type="text" class="form-control" name="price" placeholder="Nhập giá sản phẩm" value="{{$product->price}}">
                        </div>

                        












                        <div class="form-group">
                            <label>Ảnh đại diện sản phẩm</label>
                            <input type="file" class="form-control-file" id="feature_image_path" name="feature_image_path" placeholder="Ảnh chi tiết">
                            <div class="col-md-12">
                                <div class="row">
                                    <img class="product_image_150_100" src="{{$product->feature_image_path}}" alt="">
                                </div>
                            </div>
                        </div>



                        <div class="form-group">
                            <label>ảnh chi tiết</label>
                            <input type="file" multiple class="form-control-file" name="image_path[]" placeholder="ảnh chi tiết">
                            <div class="col-md-12">
                                <div class="row">
                                    @foreach($product->ProductImage as $productImage)
                                        <img class="product_image_150_100" src="{{$productImage->image_path }}" alt="">
                                    @endforeach
                                </div>
                            </div>
                        </div>



                        <div class="form-group">
                            <label>Chọn danh mục</label>
                            <select class="form-control" name="parent_id">
                                <option value="0">Chọn danh Mục</option>
                                {!!$htmlOption!!}
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Nhập tag cho sản phẩm</label>
                            <select name="tags[]" class="form-control tags_select_choose" multiple="multiple">
                            @foreach($product->tags as $tagItem)
                            <option value="{{$tagItem->name}}" selected>{{$tagItem->name}}</option>
                            @endforeach
                        </select>
                        </div>

                        <div class="form-group ">
                            <label class="text-uppercase font-weight-bold" for="content">Content:</label>
                            <textarea rows="50" cols="50" name="contents" id="content" placeholder="Description">{{$product->content}}</textarea>
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
@endsection