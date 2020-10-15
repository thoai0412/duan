@extends('layouts.admin')

@section('title')
<title>Settings</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('admins/settings/index.css')}}">
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
                <form action="{{route('settings.store')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        
                        
                        
                        <div class="form-group">
                            <label>Config Key</label>
                            <input type="text" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" name="config_key" placeholder="Nhập Config Key" >    
                        </div>

                        @if(request()->type === 'Text')
                        <div class="form-group">
                            <label>Config value</label>
                            <input type="text" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" name="config_value" placeholder="Nhập Config value" >    
                        </div>
                            @elseif(request()->type === 'Textarea')
                            <div class="form-group">
                            <label>Config value</label>
                            <textarea class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" name="config_value" rows="5"> </textarea>   
                        </div>
                        @endif


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