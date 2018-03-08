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
        <form action="#" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-lg-12">
                    <!-- Custom Tabs -->
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="disabled"><a href="#" data-toggle="tab">Profile</a></li>
                            <li class="disabled"><a href="#" data-toggle="tab">Personal Data</a></li>
                            <li class="active"><a href="#tab_1" data-toggle="tab">Family Background</a></li>
                            <li class="disabled"><a href="#" data-toggle="tab">Siblings</a></li>
                            <li class="disabled"><a href="#" data-toggle="tab">Educational Background</a></li>
                            <li class="disabled"><a href="#" data-toggle="tab">Structured Interview</a></li>
                            <li class="disabled"><a href="#" data-toggle="tab">Personality Test</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_1">
                                test
                            </div>
                        </div>
                        <!-- /.tab-content -->
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button class="btn btn-lg btn-flat btn-primary center-block">Next</button>
            </div>
        </form>

    </section>
@endsection