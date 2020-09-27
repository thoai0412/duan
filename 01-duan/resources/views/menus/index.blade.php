@extends('layouts.admin')

@section('title')
<title>Trang Chu</title>
@endsection

@section('content')

<div class="content-wrapper">
    @include('partials.content-header', ['name'=>'menu', 'key'=>'Add'])

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('menus.create')}}" class="btn btn-success float-right ma-2">Add</a>
                </div>
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên Menu</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

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