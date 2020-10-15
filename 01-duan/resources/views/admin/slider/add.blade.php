@extends('layouts.admin')

@section('title')
<title>Trang Chu</title>
@endsection

@section('css')
    <link rel="stylesheet" href=" {{asset('admins\slider\add\addslider.css') }} ">
@endsection

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'Slider', 'key'=> 'Add'])
    <!-- truyền các key tương ứng sau do sang content-header nhan 2 gia tri   -->

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                <form action="{{route('sliders.store')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Tên Slider</label>
                            <input type="text" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" name="name" placeholder="Nhập tên" >    
                        </div>
                        <div class="form-group ">
                            <label class="text-uppercase font-weight-bold" for="content">Description</label>
                            <textarea rows="200" cols="200"  name="description" id="content" placeholder="Description"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="image_path" >      
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