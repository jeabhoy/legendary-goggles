@extends('layouts.admin')
@section('stylesheets')
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="{{asset('bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
@endsection
@section('sidebar')
<ul class="sidebar-menu" data-widget="tree"  data-follow-link='true'>
  <li class="header">MAIN NAVIGATION</li>
  <li class="treeview">
    <a href="{{route('adminDashboardIndex')}}">
      <i class="fa fa-dashboard"></i> <span>Dashboard</span>
    </a>
  </li>
  <li class="active treeview">
    <a href="{{route('adminManageStudentIndex')}}">
      <i class="fa fa-users"></i> <span>Manage Student</span>
    </a>
  </li>
  <li class="treeview">
    <a href="#">
      <i class="fa fa-file"></i> <span>Forms</span>
    </a>
  </li>
</ul>
@endsection
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    STUDENT CUMMULATIVE RECORD
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li>Manage Student</li>
    <li class="active">Create Student Record</li>
    <li class="active">Profile</li>
  </ol>
</section>
<!-- Main content -->
<section class="content">
  <form action="{{route('adminStoreStudentProfile')}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="row">
      <div class="col-lg-3">
        <div class="row">
          <div class="col-lg-12">
            <ul class="list-group">
              <li class="list-group-item">Profile</li>
              <li class="list-group-item active">Personal Data</li>
              <li class="list-group-item">Family Background</li>
              <li class="list-group-item">Educational Background</li>
              <li class="list-group-item">Structured Interview</li>
              <li class="list-group-item">Personality Test</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">Personal Data</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
            </div>
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
      <div class="text-center">
        <button class="btn btn-lg btn-flat btn-primary center-block">Save</button>
      </div>
  </form>
</section>
@endsection
@section('scripts')
  <script src="{{asset('js/admin/createRecord.js')}}"></script>
@endsection
