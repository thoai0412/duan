@extends('layouts.admin')

@section('title')
<title>Trang Chu</title>
@endsection

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'Permissions', 'key'=> 'Add'])
    <!-- truyền các key tương ứng sau do sang content-header nhan 2 gia tri   -->

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{route('permissions.store')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="form-group">
                                <label>Chọn tên module</label>
                                <select class="form-control" name="module_parent">
                                    <option value="">Chọn tên module</option>
                                    @foreach(config('permissions.table_module') as $moduleItem)
                                    <option value="{{$moduleItem}}">{{$moduleItem}}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group">
                            <div class="row">
                            @foreach(config('permissions.module_childrent') as $moduleItemChilrent)
                            <div class="col-md-3"><label>
                                <input type="checkbox" value="{{ $moduleItemChilrent }}" name="module_chilrent[]" >{{$moduleItemChilrent}}</label></div>
                            @endforeach

                            </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection