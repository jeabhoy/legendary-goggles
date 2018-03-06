@extends('layouts.admin')
@section('sidebar')
<ul class="sidebar-menu" data-widget="tree" data-follow-link='true'>
  <li class="header">MAIN NAVIGATION</li>
  <li class="active treeview" data-follow-link='TRUE'>
    <a href="#">
      <i class="fa fa-dashboard"></i> <span>Dashboard</span>
    </a>
  </li>
  <li class="treeview">
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
    Dashboard
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  Charts here
</section>
<!-- /.content -->
@endsection
