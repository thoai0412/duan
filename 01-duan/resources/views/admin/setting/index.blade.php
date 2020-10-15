@extends('layouts.admin')

@section('title')
<title>Settings</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('admins/product/imageIndexList.css') }}">
<link rel="stylesheet" href="{{asset('admins/settings/index.css') }}">

@endsection

@section('content')




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name'=>'Settings', 'key'=>'List'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">


                    <div class="btn-group float-right">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            Add Setting
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('settings.create') . '?type=Text' }}">Text</a></li>
                            <li><a href="{{route('settings.create') . '?type=Textarea' }}">Textarea</a></li>
                        </ul>
                    </div>






                </div>
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Config Key</th>
                                <th scope="col">Config Value</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($settings as $setting)

                            <tr>
                                <th scope="row">{{ $setting->id}}</th>
                                <td>{{$setting->config_key}}</td>
                                <td>{{$setting->config_value}}
                                </td>

                                <td class="d-flex align-items-center">

                                    <form action="" method="get">
                                        <button class="btn btn-default">
                                            Edit
                                        </button>
                                    </form>
                                    <form action="" method="post">
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
                </div>
                {{$settings->links() }}

            </div>
        </div>
    </div>
</div>
@endsection