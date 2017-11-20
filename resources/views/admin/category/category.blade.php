@extends('admin.layouts.app')
@section('main-content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add New Post 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">

          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tag</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            <form role="form">
              <div class="box-body">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="category">Category Name</label>
                    <input name="category" type="text" class="form-control" id="category" placeholder="Enter Category">
                  </div>
                  <div class="form-group">
                    <label for="Category">Tag Slug</label>
                    <input name="category" type="text" class="form-control" id="category" placeholder="Enter slug Category">
                  </div>
                </div>
              </div>
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>

@endsection