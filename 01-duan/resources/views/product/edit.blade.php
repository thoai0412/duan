@extends('layouts.admin')

@section('title')
<title>Trang Chu</title>
@endsection

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'category', 'key'=> 'Edit'])
    <!-- truyền các key tương ứng sau do sang content-header nhan 2 gia tri   -->

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <form action="{{route('categories.update', ['id'=>$category->id])}}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Tên danh mục</label>
                            <input type="text" class="form-control" value="{{$category->name}}" name="name" placeholder="Nhập tên danh mục">
                        </div>

                        <div class="form-group">
                            <label>Chọn danh mục cha</label>
                            <select class="form-control" name="parent_id">
                                <option value="0">Danh Mục cha</option>
                                {!!$htmlOption!!}
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