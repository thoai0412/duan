@extends('layouts.admin')

@section('title')
<title>Add Product</title>
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('admins/product/bootstrap.min.css')}}">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<style>
    .select2-selection__choice{
        background-color: #0c525d !important;
    }
</style>
@endsection



@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'product', 'key'=> 'Add'])
    <!-- truyền các key tương ứng sau do sang content-header nhan 2 gia tri   -->

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Tên sản phẩm</label>
                            <input type="text" class="form-control" name="name" placeholder="Nhập tên sản phẩm">
                        </div>
                        <div class="form-group">
                            <label>giá sản phẩm</label>
                            <input type="text" class="form-control" name="price" placeholder="Nhập giá sản phẩm">
                        </div>

                        <div class="form-group">
                            <label>Ảnh đại diện sản phẩm</label>
                            <input type="file" class="form-control-file" id="feature_image_path" name="feature_image_path" placeholder="Ảnh chi tiết">
                        </div>
                        <div class="form-group">
                            <label>ảnh chi tiết</label>
                            <input type="file" multiple class="form-control-file" name="image_path[]" placeholder="ảnh chi tiết">
                        </div>

                        <div class="form-group">
                            <label>Chọn danh mục</label>
                            <select class="form-control tags_select2" name="parent_id">
                                <option value="">Chọn danh Mục</option>
                                {!!$htmlOption!!}
                            </select>
                        </div>

                        <div class="form-group">

                            <label>Nhập tag cho sản phẩm</label>
                            <select name="tags[]" class="form-control tags_select_choose" multiple="multiple">
                            </select>
                        </div>

                        <div class="form-group ">
                            <label class="text-uppercase font-weight-bold" for="content">Content:</label>
                            <textarea rows="200" cols="200" name="contents" id="content" placeholder="Description"></textarea>
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
<script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>


<script src="{{ asset('admins/product/add/add.js') }}"></script>
@endsection