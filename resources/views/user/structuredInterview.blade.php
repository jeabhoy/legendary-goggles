@extends('layouts.user')
@section('sidebar')
    <ul class="sidebar-menu" data-widget="tree" data-follow-link='true'>
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
            <a href="#">
                <i class="fa fa-user"></i> <span>Profile</span>
            </a>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-commenting-o"></i>
                <span>Structured Interview</span>
            </a>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-pencil"></i> <span>Test</span>
            </a>
        </li>
        @if($array['exitInterviewTaken'] == 'true')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-graguation-cap"></i> <span>Exit Interview</span>
                </a>
            </li>
        @endif
        <li class="treeview">
            <a href="{{route('counselingIndex', ['id' => $array['id']])}}">
                <i class="fa fa-user-secret"></i> <span>Counseling</span>
            </a>
        </li>
        <li class="treeview">
            <a href="{{route('violationIndex', ['id' => $array['id']])}}">
                <i class="fa fa-fire"></i> <span>Violations</span>
            </a>
        </li>
    </ul>
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Profile
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> User</a></li>
            <li class="active">Structured Interview</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- /.col -->
            <div class="col-md-12">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#personalData" data-toggle="tab">Personal Data</a></li>
                        <li><a href="#familyBackground" data-toggle="tab">Family Background</a></li>
                        <li><a href="#educationalBackground" data-toggle="tab">Educational Background</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="active tab-pane" id="personalData">

                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="familyBackground">

                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="educationalBackground">

                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
