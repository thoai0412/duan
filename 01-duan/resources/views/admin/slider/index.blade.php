@extends('layouts.admin')

@section('title')
<title>Slider</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('admins/product/imageIndexList.css') }}">
@endsection

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name'=>'Slider', 'key'=>'List'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('sliders.create')}}" class="btn btn-success float-right ma-2">Add</a>
                </div>
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên slider</th>
                                <th scope="col">Description</th>
                                <th scope="col">image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sliders as $slider)
                            <tr>
                                <th scope="row">{{$slider->id}}</th>
                                <td>{{$slider->name}}</td>
                                <td>
                                    <img class="product_image_150_100" src="{{$slider->image_path}}" alt="">
                                </td>
                                <td>{{$slider->description}}</td>

                                <td class="d-flex align-items-center">
                                    <form action="{{route('sliders.edit',$slider->id)}}" method="get">
                                        <button class="btn btn-default">
                                            Edit
                                        </button>
                                    </form>

                                    <form action="{{route('sliders.destroy',$slider->id)}}" method="post">
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
                    {{$sliders->links() }}

                </div>

            </div>
        </div>
    </div>
</div>
@endsection