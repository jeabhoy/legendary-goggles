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
            Edit Student Record
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Manage Student</li>
            <li class="active">Edit Student Record</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        @if (session('status'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                {{session('status')}}
            </div>
        @endif
        <form action="" method="POST" enctype="multipart/form-data">
            {{ method_field('PUT') }}
            {{ csrf_field() }}
            <div class="row">
                <div class="col-lg-12">
                    <!-- Custom Tabs -->
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li id="profileLink"><a href="#" data-toggle="tab">Profile</a></li>
                            <li id="personalDataLink"><a href="#" data-toggle="tab">Personal Data</a></li>
                            <li class="active"><a href="#profile" data-toggle="tab">Family Background</a></li>
                            <li><a href="#" data-toggle="tab">Siblings</a></li>
                            <li><a href="#" data-toggle="tab">Educational Background</a></li>
                            <li><a href="#" data-toggle="tab">Structured Interview</a></li>
                            <li><a href="#" data-toggle="tab">Personality Test</a></li>
                            @if($user->exitInterviewTaken == 'true')
                                <li><a href="#" data-toggle="tab">Exit Interview</a></li>
                            @endif
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="profile">
                            </div>
                        </div>
                        <!-- /.tab-content -->
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-lg btn-flat btn-primary center-block">Save</button>
                </div>
            </div>
        </form>
    </section>
@endsection
@section('scripts')
    <script src="{{asset('js/admin/createRecord.js')}}"></script>
    <script>
        $( document ).ready(function() {
            $('#personalDataLink').click(function () {
                window.location.href = '{{route('adminEditPersonalData', ['id' => $user->id, 'personalDataId' => $userFamilyBackground->id])}}';
            });
            $('#profileLink').click(function () {
                window.location.href = '{{route('adminEditProfile', ['id' => $user->id])}}';
            });
        });
    </script>
@endsection
