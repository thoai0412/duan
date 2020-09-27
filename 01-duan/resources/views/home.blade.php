  @extends('layouts.admin')

  @section('title')
  <title>Trang Chu</title>
  @endsection

  @section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      @include('partials.content-header', ['name'=>'Home', 'key'=>'Home'])
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-md-12">
                      <a href="{{route('categories.create')}}" class="btn btn-success float-right ma-2">Add</a>
                  </div>
                  <div class="col-md-12">
                    Trang Chu
                </div>
              </div>
              <!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection