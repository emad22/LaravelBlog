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
              <h3 class="box-title">Title</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            <form role="form" action="{{ route('post.store') }}" method="post">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="Title">Post Title</label>
                    <input name="title" type="text" class="form-control" id="title" placeholder="Enter title">
                  </div>
                  <div class="form-group">
                    <label for="Title">Post Sub Title</label>
                    <input name="subtitle" type="text" class="form-control" id="subtitle" placeholder="Enter Sub title">
                  </div>
                  <div class="form-group">
                    <label for="Title">Post Slug</label>
                    <input name="slug" type="text" class="form-control" id="slug" placeholder="Enter Slug">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" id="image" name="image">
                  </div>
                  <br>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="status"> Publish
                    </label>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
               <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Write Post Body Here
                    <small>Simple and fast</small>
                  </h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                      <i class="fa fa-minus"></i></button>
                  </div>
                  <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body pad">
                    <textarea class="textarea" name="body" placeholder="Place some text here"
                              style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
              </div>

              <div class="box-footer">
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