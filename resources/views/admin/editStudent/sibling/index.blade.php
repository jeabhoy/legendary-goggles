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
            SIBLINGS
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>Manage Student</li>
            <li class="active">Create Student Record</li>
            <li class="active">Siblings</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <!-- Custom Tabs -->
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="disabled"><a href="#" data-toggle="tab">Profile</a></li>
                        <li class="disabled"><a href="#" data-toggle="tab">Personal Data</a></li>
                        <li class="disabled"><a href="#" data-toggle="tab">Family Background</a></li>
                        <li class="active"><a href="#tab_1" data-toggle="tab">Siblings</a></li>
                        <li class="disabled"><a href="#" data-toggle="tab">Educational Background</a></li>
                        <li class="disabled"><a href="#" data-toggle="tab">Structured Interview</a></li>
                        <li class="disabled"><a href="#" data-toggle="tab">Personality Test</a></li>
                        @if($user->level == 'College' && $user->exitInterviewTaken == 'false')
                            <li class="disabled"><a href="#" data-toggle="tab">Exit Interview</a></li>
                        @endif
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                            <div class="box box-solid">
                                <div class="box-header">
                                    <h3 class="box-title"></h3>

                                    <div class="box-tools pull-right">
                                        <a href="{{route('adminCreateSibling', array('id' => Request::route('id'),     ))}}">
                                            <button type="button" class="btn btn-primary btn-flat">
                                                Add Sibling
                                            </button>
                                        </a>
                                    </div>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>Name</th>
                                            <th>Age</th>
                                            <th>Educational Level</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach($userSiblings as $userSibling)
                                            <tr>
                                                <td>{{$userSibling->name}}</td>
                                                <td>{{$userSibling->age}}</td>
                                                <td>{{$userSibling->educationalLevel}}</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <a href="{{route('adminEditSibling', ['id' => Request::route('id'), 'siblingId' => $userSibling->id])}}">
                                                                <button type="button" class="btn btn-block btn-info btn-xs">Edit</button>
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <button type="button" class="btn btn-block btn-danger btn-xs" data-toggle="modal" data-target="#modal-danger">Delete</button>
                                                        </div>
                                                        <div class="modal modal-danger fade" id="modal-danger">
                                                            <div class="modal-dialog modal-sm">
                                                                <form action="{{route('adminDeleteSibling', ['id' => Request::route('id'), 'siblingId' => $userSibling->id])}}" method="POST" id="{{$userSibling->id}}">
                                                                    {{csrf_field()}}
                                                                    {{method_field('DELETE')}}
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span></button>
                                                                            <h4 class="modal-title">Alert</h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <input type="hidden" name="siblingId" value="{{$userSibling->id}}">
                                                                            <p class="text-center">Are you sure?</p>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
                                                                            <button type="button" class="btn btn-outline" onclick='document.getElementById("{{$userSibling->id}}").submit();'>Yes</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                                <!-- /.modal-content -->
                                                            </div>
                                                            <!-- /.modal-dialog -->
                                                        </div>
                                                        <!-- /.modal -->
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                    </div>
                    <!-- /.tab-content -->
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="{{route('adminCreateStudentEducationalBackground', ['id' => Request::route('id')])}}">
                <button class="btn btn-lg btn-flat btn-primary center-block">Next</button>
            </a>
        </div>
    </section>
@endsection
